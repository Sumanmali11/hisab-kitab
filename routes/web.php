<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $transactions = Transaction::latest()->get();
    $income = 0;
    $expenses = 0;
    $lend = 0;
    $borrow = 0;
    foreach ($transactions as $transaction) {
        if ($transaction->type == 'Income') {
            $income += $transaction->amount;
        } elseif ($transaction->type == 'Expenses') {
            $expenses += $transaction->amount;
        } elseif ($transaction->type == 'Lend') {
            $lend += $transaction->amount;
        } else {
            $borrow += $transaction->amount;
        }
    }
    return view('dashboard', compact('income', 'expenses', 'lend', 'borrow', 'transactions'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('transactions', TransactionController::class);
});

require __DIR__ . '/auth.php';
