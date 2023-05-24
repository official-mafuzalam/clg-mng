@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">All Student List</p>
</div>


<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="">
        <div class="col-md-3">
            <div class="input-group">
                <select name="semester" id="semester" class="cars form-control" required>
                    <option value="" selected>Select Semester for Update</option>
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
        <div class="col-md-3">
            <div class="input-group">
                <select name="technology" id="technology" class="cars form-control" required>
                    <option value="" selected>Select Technology for Update</option>
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
        <div class="col-md-2">
            <button type="submit" class="btn btn-success mb-3">Search</button>
        </div>
    </form>
</div>

<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="" method="POST">
        @csrf
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" name="current_semester" class="form-control" value="{{ $search_semester ?? '' }}"
                    readonly>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" name="technology" class="form-control" value="{{ $search_technology ?? '' }}"
                    readonly>
            </div>
        </div>


        <div class="col-md-4">
            <div class="input-group">
                <select name="new_semester" id="semester" class="cars form-control" required>
                    <option value="" selected>Select the New Semester to Update</option>
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
        <div class="col-md-2">
            <button type="submit" class="btn btn-warning mb-3">Update</button>
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
                <th scope="col">Semester</th>
                <th scope="col">Year</th>
                <th scope="col">Gender</th>
                <th scope="col">Clg/ID</th>
                <th scope="col">Roll No</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@include('layout.footer')
