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
            <select name="technology" id="technology" class="cars form-control" required>
                <option value="" selected>Select a Technology</option>
                <option value="Computer" {{ $teacher_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                </option>
                <option value="Graphic" {{ $teacher_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic</option>
                <option value="RAC" {{ $teacher_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                <option value="Civil" {{ $teacher_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                <option value="Electronic" {{ $teacher_data->technology == 'Electronic' ? 'selected' : '' }}>Electronic
                </option>
                <option value="Electrical" {{ $teacher_data->technology == 'Electrical' ? 'selected' : '' }}>Electrical
                </option>
                <option value="Architecture" {{ $teacher_data->technology == 'Architecture' ? 'selected' : '' }}>
                    Architecture
                </option>
                <option value="Mechanical" {{ $teacher_data->technology == 'Mechanical' ? 'selected' : '' }}>Mechanical
                </option>
                <option value="Others" {{ $teacher_data->technology == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="user_name" id="name" class="form-control"
                value="{{ $teacher_data->user_name }}" placeholder="Name" required>
        </div>
        <br>
        <div class="input-group">
            <select name="position" id="position" class="cars form-control" required>
                <option value="" selected>Select Position</option>
                <option value="CI" {{ $teacher_data->position == 'CI' ? 'selected' : '' }}>CI</option>
                <option value="JR Instructor" {{ $teacher_data->position == 'JR Instructor' ? 'selected' : '' }}>JR
                    Instructor</option>
                <option value="Accountants" {{ $teacher_data->position == 'Accountants' ? 'selected' : '' }}>
                    Accountants</option>
                <option value="Others" {{ $teacher_data->position == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="mobile_number" id="name" class="form-control"
                value="{{ $teacher_data->mobile_number }}" placeholder="Mobile number" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="email" id="name" class="form-control" value="{{ $teacher_data->email }}"
                placeholder="Email" required>
        </div>
        <br>
        <input class="submit btn btn-success save-btn" name="teacher_submit" type="submit" value="Save">
    </form>
</div>

@include('layout.footer')
