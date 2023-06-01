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
    <a class="text-decoration-none" href="{{ route('student.all') }}">
        <p class="fs-4">All Student List</p>
    </a>
</div>

<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="">
        <div class="col-md-4">
            <div class="input-group">
                <select name="semester" id="semester" class="cars form-control" required>
                    <option value="" selected>Select Semester</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                    <option value="6th">6th</option>
                    <option value="7th">7th</option>
                    <option value="8th">8th</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <select name="technology" id="technology" class="cars form-control" required>
                    <option value="" selected>Select a Technology</option>
                    <option value="Computer">Computer</option>
                    <option value="Graphic">Graphic</option>
                    <option value="RAC">RAC</option>
                    <option value="Civil">Civil</option>
                    <option value="Electronic">Electronic</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success mb-3">Search</button>
        </div>
    </form>
</div>

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
                        <a class="btn btn-warning btn-sm" href="{{ route('student.trash', ['id' => $student->id]) }}"
                            role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to Trash">
                            <i class="bi bi-trash"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('student.edit', ['id' => $student->id]) }}"
                            role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <i class="bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container text-center">
    {!! $students->links() !!}
</div>

@include('layout.footer')
