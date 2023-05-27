@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">Please Input Marks and Clicked Save Button</p>
</div>

<div class="container text-center">
    <form class="row g-3 d-flex mb-3" role="search" action="">
        <div class="col-md-4">
            <input type="text" name="technology" class="form-control" value="{{ $search_technology ?? '' }}"
                readonly>
        </div>
        <div class="col-md-4">
            <input type="text" name="semeter" class="form-control" value="{{ $search_semester ?? '' }}" readonly>
        </div>
        <div class="col-md-4">
            <input type="text" name="subject" class="form-control" value="{{ $search_subject ?? '' }}" readonly>
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
                <th scope="col">Clg/ID</th>
                <th scope="col">Roll No</th>
                <th scope="col">Marks</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->user_id }}</td>
                    <td>{{ $student->user_name }}</td>
                    <td>{{ $student->technology }}</td>
                    <td>{{ $student->current_semester }}</td>
                    <td>{{ $student->clg_id }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>
                        <input type="number" class="form-control" name="marks"
                            data-student-id="{{ $student->id }}">
                    </td>
                    <td>
                        <button class="btn btn-primary btn-sm save-marks"
                            data-student-id="{{ $student->id }}">Save</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.save-marks').click(function() {
            var row = $(this).closest('tr');
            var studentId = row.find('input[name="marks"]').data('student-id');
            var marks = row.find('input[name="marks"]').val();
            var subject = $('input[name="subject"]').val();
            var userId = row.find('td:nth-child(2)').text();
            var userName = row.find('td:nth-child(3)').text();
            var technology = row.find('td:nth-child(4)').text();
            var current_semester = row.find('td:nth-child(5)').text();
            var rollNo = row.find('td:nth-child(7)').text();

            $.ajax({
                url: '{{ route('save_marks') }}',
                method: 'POST',
                data: {
                    studentId: studentId,
                    marks: marks,
                    subject: subject,
                    userId: userId,
                    userName: userName,
                    technology: technology,
                    current_semester: current_semester,
                    rollNo: rollNo,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Show success toast
                    $('.toast-body').text('Marks saved successfully!');
                    $('.toast').toast('show');
                    console.log(response);
                },
                error: function(xhr) {
                    // Show error toast
                    $('.toast-body').text('Error occurred while saving marks');
                    $('.toast').toast('show');
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>


<div class="toast position-fixed bottom-0 end-0 align-items-center" role="alert" aria-live="assertive"
    aria-atomic="true">
    <div class="d-flex">
        <div class="toast-body">
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>


@include('layout.footer')
