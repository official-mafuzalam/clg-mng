@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">{{ $title }}</p>
    <p class="fs-4">{{$userType}}</p>
</div>

<div class="container text-center">
    <form class="form-inline" action="{{ $url }}" method="POST">
        @csrf
        <div class="input-group">
            <select name="technology" id="technology" class="cars form-control" required>
                <option value="" selected>Select a Technology</option>
                <option value="Computer" {{ $student_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                </option>
                <option value="Graphic" {{ $student_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic</option>
                <option value="RAC" {{ $student_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                <option value="Civil" {{ $student_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                <option value="Electronic" {{ $student_data->technology == 'Electronic' ? 'selected' : '' }}>Electronic
                </option>
                <option value="Electrical" {{ $student_data->technology == 'Electrical' ? 'selected' : '' }}>Electrical
                </option>
                <option value="Architecture" {{ $student_data->technology == 'Architecture' ? 'selected' : '' }}>
                    Architecture
                </option>
                <option value="Mechanical" {{ $student_data->technology == 'Mechanical' ? 'selected' : '' }}>Mechanical
                </option>
                <option value="Others" {{ $student_data->technology == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="admission_year" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Seasons</option>
                <option value="18-19" {{ $student_data->admission_year == '18-19' ? 'selected' : '' }}>18-19</option>
                <option value="19-20" {{ $student_data->admission_year == '19-20' ? 'selected' : '' }}>19-20</option>
                <option value="20-21" {{ $student_data->admission_year == '20-21' ? 'selected' : '' }}>20-21</option>
                <option value="21-22" {{ $student_data->admission_year == '21-22' ? 'selected' : '' }}>21-22</option>
                <option value="22-23" {{ $student_data->admission_year == '22-23' ? 'selected' : '' }}>22-23</option>
                <option value="23-24" {{ $student_data->admission_year == '23-24' ? 'selected' : '' }}>23-24</option>
                <option value="Others" {{ $student_data->admission_year == 'Others' ? 'selected' : '' }}>Others
                </option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="current_semester" id="semester" class="cars form-control" required>
                <option value="" selected>Select Semester</option>
                <option value="1st" {{ $student_data->current_semester == '1st' ? 'selected' : '' }}>1st</option>
                <option value="2nd" {{ $student_data->current_semester == '2nd' ? 'selected' : '' }}>2nd</option>
                <option value="3rd" {{ $student_data->current_semester == '3rd' ? 'selected' : '' }}>3rd</option>
                <option value="4th" {{ $student_data->current_semester == '4th' ? 'selected' : '' }}>4th</option>
                <option value="5th" {{ $student_data->current_semester == '5th' ? 'selected' : '' }}>5th</option>
                <option value="6th" {{ $student_data->current_semester == '6th' ? 'selected' : '' }}>6th</option>
                <option value="7th" {{ $student_data->current_semester == '7th' ? 'selected' : '' }}>7th</option>
                <option value="8th" {{ $student_data->current_semester == '8th' ? 'selected' : '' }}>8th</option>
                <option value="Others" {{ $student_data->current_semester == 'Others' ? 'selected' : '' }}>Others
                </option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="user_name" id="name" class="form-control"
                value="{{ $student_data->user_name }}" placeholder="Name" required>
        </div>
        <br>
        <div class="input-group">
            <select name="gender" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Gender</option>
                <option value="Male" {{ $student_data->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $student_data->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Others" {{ $student_data->gender == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="clg_id" id="clgId" class="form-control"
                value="{{ $student_data->clg_id }}" placeholder="Collage ID" required>
        </div>
        <br>
        <div class="input-group">
            <input type="number" name="roll_no" id="Roll" class="form-control"
                value="{{ $student_data->roll_no }}" placeholder="Roll no" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="mobile_number" id="name" class="form-control"
                value="{{ $student_data->mobile_number }}" placeholder="Mobile number" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="email" id="name" class="form-control" value="{{ $student_data->email }}"
                placeholder="Email" required>
        </div>
        <br>
        <input class="submit btn btn-success save-btn" name="student_submit" type="submit" value="Save">

    </form>
</div>

@include('layout.footer')
