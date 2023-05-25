@include('layout.header')

<div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <p class="fs-4">All Archived List</p>
</div>


<div class="table-responsive">
    <table class="table table-sm table-striped table-hover table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">S_No</th>
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
                <tr class="">
                    <td>{{ $notice->id }}</td>
                    <td>
                        @if ($notice->status == 1)
                            <button class="btn btn-success btn-sm">
                                Active
                            </button>
                        @else
                            <button class="btn btn-warning btn-sm">
                                Archived
                            </button>
                        @endif
                    </td>
                    <td>{{ $notice->category }}</td>
                    <td>{{ $notice->title }}</td>
                    <td>{{ $notice->description }}</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{ route('notice.delete', ['id' => $notice->id]) }}"
                            role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Permanent Delete">
                            <i class="bi bi-trash"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('notice.recycle', ['id' => $notice->id]) }}"
                            role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <i class="bi-recycle"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('layout.footer')
