@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/', []) }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">Fill the form for add a new student in database.</p>
</div>

<div class="container text-center">
    <form class="form-inline" action="{{ route('student.add') }}" method="POST">
        @csrf
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
        <br>
        <div class="input-group">
            <select name="admission_year" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Seasons</option>
                <option value="18-19">18-19</option>
                <option value="19-20">19-20</option>
                <option value="20-21">20-21</option>
                <option value="21-22">21-22</option>
                <option value="22-23">22-23</option>
                <option value="23-24">23-24</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="current_semester" id="semester" class="cars form-control" required>
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
        <br>
        <div class="input-group">
            <input type="text" name="user_name" id="name" class="form-control" placeholder="Name" required>
        </div>
        <br>
        <div class="input-group">
            <select name="gender" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="clg_id" id="clgId" class="form-control" placeholder="Collage ID" required>
        </div>
        <br>
        <div class="input-group">
            <input type="number" name="roll_no" id="Roll" class="form-control" placeholder="Roll no" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="mobile_number" id="name" class="form-control" placeholder="Mobile number"
                required>
            <span class="text-danger">
            </span>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="email" id="name" class="form-control" placeholder="Email" required>
        </div>
        <br>
        <input class="submit btn btn-success save-btn" name="student_submit" type="submit" value="Save">

    </form>
</div>

@include('layout.footer')
