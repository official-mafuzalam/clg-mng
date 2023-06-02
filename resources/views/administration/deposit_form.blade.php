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
    <a class="text-decoration-none" href="{{ route('administration_course.allPage') }}">
        <p class="fs-4">Deposit Find</p>
    </a>

</div>


<div class="container text-center">
    <form class="row g-3 d-flex" action="{{ route('administration_deposit.confirm') }}" method="POST">
        @csrf
        <p class="fs-5">Student Details</p>
        <div class="col-md-4">
            <input type="text" name="user_id" id="user_id" class="form-control"
                value="{{ $student_data->user_id }}" readonly>
        </div>
        <br>
        <div class="col-md-4">
            <input type="text" name="technology" id="technology" class="form-control"
                value="{{ $student_data->technology }}" readonly>
        </div>
        <br>
        <div class="col-md-4">
            <input type="text" name="admission_year" id="admission_year" class="form-control"
                value="{{ $student_data->admission_year }}" readonly>

        </div>
        <br>
        <div class="col-md-4">
            <input type="text" name="current_semester" id="current_semester" class="form-control"
                value="{{ $student_data->current_semester }}" readonly>

        </div>
        <br>
        <div class="col-md-4">
            <input type="text" name="user_name" id="user_name" class="form-control" readonly
                value="{{ $student_data->user_name }}">
        </div>
        <br>
        <div class="col-md-4">
            <input type="text" name="clg_id" id="clgId" class="form-control" readonly
                value="{{ $student_data->clg_id }}">
        </div>
        <br>
        <div class="col-md-4">
            <input type="number" name="roll_no" id="Roll" class="form-control" readonly
                value="{{ $student_data->roll_no }}">
        </div>
        <br>
        <div class="col-md-4">
            <input type="tel" name="mobile_number" id="name" class="form-control" readonly
                value="{{ $student_data->mobile_number }}">
        </div>
        <div class="col-md-4">
            <input type="email" name="email" id="email" class="form-control" readonly
                value="{{ $student_data->email }}">
        </div>
        <hr>
        <p class="fs-5">Fill the Deposit Form</p>

        <div class="text-center">
            <div class="row">
                <div class="col-md-2 offset-md-5">
                    <input name="date" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <select name="deposit_category" class="cars form-control" required onchange="changeValue()">
                <option value="" selected>Select Fees Category</option>
                <option value="Semester Fees" data-value="8500">Semester Fees</option>
                <option value="Tuition Fees" data-value="12000">Tuition Fees</option>
                <option value="Form Fill-Up Fees" data-value="2500">Form Fill-Up Fees</option>
                <option value="Mid Term Fees" data-value="600">Mid Term Fees</option>
                <option value="Referred Exam Fees" data-value="800">Referred Exam Fees</option>
                <option value="Others" data-value="0">Others</option>
            </select>
        </div>
        <div class="col-md-6">
            <input type="number" name="deposit_amount" id="deposit_amount" value="" class="form-control"
                required>
        </div>
        <div class="col-md-12">
            <input type="text" name="comment" id="comment" placeholder="Comment" class="form-control"
                required>
        </div>

        <div class="col-md-12">
            <input class="submit btn btn-success" type="submit" value="Save">
        </div>


    </form>
</div>



<script>
    function changeValue() {
        var dropdown = document.getElementsByName("deposit_category")[0];
        var inputBox = document.getElementById("deposit_amount");
        inputBox.value = dropdown.options[dropdown.selectedIndex].getAttribute("data-value");
    }
</script>

@include('layout.footer')
