<div>
    <button type="button" class="btn btn-primary mb-4" style="color: black" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Add New
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/transactions" method="POST">
                    @csrf
                    <input type="text" name="amount">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <th>SN</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Person</th>
        <th>Remarks</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($transactions as $key => $transaction)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->type }}</td>
                <td>{{ $transaction->person }}</td>
                <td>{{ $transaction->remark }}</td>
                <td>
                    <div class="d-flex">
                        <button class="btn btn-block btn-primary">Show</button>
                        <button class="btn btn-block btn-info">Edit</button>
                        <button class="btn btn-block btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
