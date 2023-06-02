@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">Semester: {{ $search_semester }} | Technology: {{ $search_technology }} | Subject:
        {{ $search_subject }}</p>

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
                <th scope="col">Roll No</th>
                <th scope="col">Subject</th>
                <th scope="col">Marks</th>
                <th scope="col" class="noPrint">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($results))
                @foreach ($results as $result)
                    <tr class="">
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->user_id }}</td>
                        <td>{{ $result->user_name }}</td>
                        <td>{{ $result->technology }}</td>
                        <td>{{ $result->semester }}</td>
                        <td>{{ $result->roll_no }}</td>
                        <td>{{ $result->subject }}</td>
                        <td>{{ $result->marks }}</td>
                        <td class="noPrint">
                            <a class="btn btn-primary btn-sm" href="{{ route('administration_result.edit', ['id' => $result->id]) }}"
                                role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="bi-pencil-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No Data found.</td>
                </tr>
            @endif

        </tbody>
    </table>
    <button type="button" class="btn btn-info btn-sm noPrint" onclick="window.print()">Print</button>
</div>







@include('layout.footer')
