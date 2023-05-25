@include('layout.header')

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
                <th scope="col">Designation</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr class="">
                    <td>{{ $teacher->id }}</td>
                    <td>{{ $teacher->user_id }}</td>
                    <td>{{ $teacher->user_name }}</td>
                    <td>{{ $teacher->technology }}</td>
                    <td>{{ $teacher->position }}</td>
                    <td>{{ $teacher->mobile_number }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{ route('teacher.delete', ['id' => $teacher->id]) }}"
                            role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Parmanent Delete">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('teacher.restore', ['id' => $teacher->id]) }}"
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
