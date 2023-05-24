@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">All Teacher List</p>
</div>

<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="">
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
                        <a name="" id="" class="btn btn-warning btn-sm"
                            href="#"role="button">Trush</a>
                        <a name="" id="" class="btn btn-info btn-sm"
                            href="{{ route('teacher.edit', ['id' => $teacher->id]) }}"role="button">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container text-center">
    {!! $teachers->links() !!}
</div>

@include('layout.footer')
