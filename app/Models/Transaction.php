<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'remark', 'type', 'user_id', 'person'];

    /**
     * Relation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
