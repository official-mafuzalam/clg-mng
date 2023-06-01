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
    <p class="fs-4">All Trashed Student List</p>
</div>


<div class="table-responsive">
    <table class="table table-info table-bordered">
        <thead>
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
                        <a class="btn btn-danger btn-sm" href="{{ route('student.delete', ['id' => $student->id]) }}"
                            role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Parmanent Delete">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('student.restore', ['id' => $student->id]) }}"
                            role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Restore">
                            <i class="bi bi-recycle"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('layout.footer')
