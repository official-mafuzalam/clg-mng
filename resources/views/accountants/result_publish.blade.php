@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <a class="text-decoration-none" href="{{ route('result.publishPage') }}">
        <p class="fs-4">Select Subject for Publish Result</p>
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
@if (!empty($courses))
    <div class="container text-center">
        <form class="row g-3 d-flex" role="search" action="" method="POST">
            @csrf
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" name="semester" class="form-control" value="{{ $search_semester ?? '' }}"
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
                    <select id="technology" name="subject" class="cars form-control" required>
                        <option value="">Select Subject</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->book_name }}">{{ $course->book_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>
    </div>
@endif



@include('layout.footer')
