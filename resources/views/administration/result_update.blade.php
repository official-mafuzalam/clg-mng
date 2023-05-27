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
            <input class="form-control" type="text" name="id" value="{{ $result_data->id }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="user_id" value="{{ $result_data->user_id }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="roll_no" value="{{ $result_data->roll_no }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="user_name" value="{{ $result_data->user_name }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="semester" value="{{ $result_data->semester }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="technology" value="{{ $result_data->technology }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="subject" value="{{ $result_data->subject }}"
                placeholder="Notice Title" readonly>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="number" name="marks" value="{{ $result_data->marks }}"
                placeholder="Notice Title" required>
        </div>
        <br>
        
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
</div>


@include('layout.footer')
