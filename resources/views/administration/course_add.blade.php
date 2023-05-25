@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">{{ $title }}</p>
</div>

<div class="container text-center">
    <form class="form-inline" action="{{ $url }}" method="POST">
        @csrf
        <div class="input-group">
            <select name="semester" id="semester" class="cars form-control" required>
                <option value="" selected>Select Semester</option>
                <option value="1st" {{ $course_data->semester == '1st' ? 'selected' : '' }}>1st</option>
                <option value="2nd" {{ $course_data->semester == '2nd' ? 'selected' : '' }}>2nd</option>
                <option value="3rd" {{ $course_data->semester == '3rd' ? 'selected' : '' }}>3rd</option>
                <option value="4th" {{ $course_data->semester == '4th' ? 'selected' : '' }}>4th</option>
                <option value="5th" {{ $course_data->semester == '5th' ? 'selected' : '' }}>5th</option>
                <option value="6th" {{ $course_data->semester == '6th' ? 'selected' : '' }}>6th</option>
                <option value="7th" {{ $course_data->semester == '7th' ? 'selected' : '' }}>7th</option>
                <option value="8th" {{ $course_data->semester == '8th' ? 'selected' : '' }}>8th</option>
                <option value="Others" {{ $course_data->semester == 'Others' ? 'selected' : '' }}>Others
                </option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="technology" id="technology" class="cars form-control" required>
                <option value="" selected>Select a Technology</option>
                <option value="Computer" {{ $course_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                </option>
                <option value="Graphic" {{ $course_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic</option>
                <option value="RAC" {{ $course_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                <option value="Civil" {{ $course_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                <option value="Electronic" {{ $course_data->technology == 'Electronic' ? 'selected' : '' }}>Electronic
                </option>
                <option value="Electrical" {{ $course_data->technology == 'Electrical' ? 'selected' : '' }}>Electrical
                </option>
                <option value="Architecture" {{ $course_data->technology == 'Architecture' ? 'selected' : '' }}>
                    Architecture
                </option>
                <option value="Mechanical" {{ $course_data->technology == 'Mechanical' ? 'selected' : '' }}>Mechanical
                </option>
                <option value="Others" {{ $course_data->technology == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="book_name" class="form-control" value="{{ $course_data->book_name }}"
                placeholder="Name" required>
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
</div>


@include('layout.footer')
