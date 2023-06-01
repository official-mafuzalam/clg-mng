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
            <select name="category" class="cars form-control" required>
                <option value="" selected>Select Category</option>
                <option value="Admission"{{ $notice_data->category == 'Admission' ? 'selected' : '' }}>Admission
                </option>
                <option value="Due Payment" {{ $notice_data->category == 'Due Payment' ? 'selected' : '' }}>Due Payment
                </option>
                <option value="Form Fill-Up" {{ $notice_data->category == 'Form Fill-Up' ? 'selected' : '' }}>Form
                    Fill-Up</option>
                <option value="Admit Card" {{ $notice_data->category == 'Admit Card' ? 'selected' : '' }}>Admit Card
                </option>
                <option value="Others" {{ $notice_data->category == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input class="form-control" type="text" name="title" value="{{ $notice_data->title }}"
                placeholder="Notice Title" required>
        </div>
        <br>
        <div class="input-group">
            <textarea class="form-control" name="description" placeholder="Notice Description" required>{{ $notice_data->description }}</textarea>
        </div>
        <br>
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
</div>


@include('layout.footer')
