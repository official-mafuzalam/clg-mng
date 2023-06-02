@include('layout.header')

{{-- Alert --}}
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('success-trash'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('success-trash') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('success-delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('success-delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <a class="text-decoration-none" href="{{ route('administration_deposit.findPage') }}">
        <p class="fs-4">Deposit Find</p>
    </a>

</div>

<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="">
        <div class="col-md-8">
            <div class="input-group">
                <input type="text" class="form-control" name="id" placeholder="User Id" required>
            </div>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success mb-3">Search</button>
        </div>
    </form>
</div>
{{--  --}}

@if (!empty($students))
    <h4 class="text-center">Depositor</h4>
    <div class="table-responsive">
        <table class="table table-sm table-striped table-hover table-bordered border-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S_No</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Technologoy</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Year</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Clg/ID</th>
                    <th scope="col">Roll No</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="">
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->user_id }}</td>
                        <td>{{ $student->user_name }}</td>
                        <td>{{ $student->technology }}</td>
                        <td>{{ $student->current_semester }}</td>
                        <td>{{ $student->admission_year }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->clg_id }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->mobile_number }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm"
                                href="{{ route('administration_deposit.form', ['id' => $student->id]) }}" role="button"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Deposit">
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endif


{{--  --}}

<h4 class="text-center">Deposit History</h4>
<div class="table-responsive">
    <table class="table table-sm table-striped table-hover table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">S_No</th>
                <th scope="col">Date</th>
                <th scope="col">User_id</th>
                <th scope="col">Technologoy</th>
                <th scope="col">Year</th>
                <th scope="col">Semester</th>
                <th scope="col">Name</th>
                <th scope="col">Clg_Id</th>
                <th scope="col">Roll</th>
                <th scope="col">Deposit</th>
                <th scope="col">Amount</th>
                <th scope="col">Comment</th>
                <th scope="col">Challan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deposits as $deposit)
                <tr class="">
                    <td>{{ $deposit->id }}</td>
                    <td>{{ $deposit->date }}</td>
                    <td>{{ $deposit->user_id }}</td>
                    <td>{{ $deposit->technology }}</td>
                    <td>{{ $deposit->admission_year }}</td>
                    <td>{{ $deposit->current_semester }}</td>
                    <td>{{ $deposit->user_name }}</td>
                    <td>{{ $deposit->clg_id }}</td>
                    <td>{{ $deposit->roll_no }}</td>
                    <td>{{ $deposit->deposit_amount }}</td>
                    <td>{{ $deposit->deposit_category }}</td>
                    <td>{{ $deposit->comment }}</td>
                    <td>{{ $deposit->deposit_challan_no }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('administration_deposit.print', ['id' => $deposit->deposit_challan_no]) }}" role="button"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                            <i class="bi bi-printer"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container text-center">
    {!! $deposits->links() !!}
</div>

@include('layout.footer')
