<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="row">
            @foreach (['Income', 'Expenses', 'Lend', 'Borrow'] as $item)
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-title" style="background-color: rgb(206, 206, 206); padding: 20px">
                            <h1><strong>{{ $item }}</strong></h1>
                        </div>
                        <div class="text-center">
                            <span style="font-size: 5rem">
                                <strong>
                                    @if ($item == 'Income')
                                        {{ $income }}
                                    @elseif($item == 'Expenses')
                                        {{ $expenses }}
                                    @elseif($item == 'Lend')
                                        {{ $lend }}
                                    @else
                                        {{ $borrow }}
                                    @endif
                                </strong>
                            </span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5 pt-4">
            @include('transactions.index')
        </div>
    </div>

</x-app-layout>
