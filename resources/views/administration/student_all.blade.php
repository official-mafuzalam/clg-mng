{{-- @include('layout.header') --}}

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



{{-- <div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <a class="text-decoration-none" href="{{ route('administration_student.all') }}">
        <p class="fs-4">All Student List</p>
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

<div class="table-responsive">
    <table class="table table-sm table-striped table-hover table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">S_No</th>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Technologoy</th>
                <th scope="col">Semester</th>
                <th scope="col">Year</th>
                <th scope="col">Gender</th>
                <th scope="col">Clg/ID</th>
                <th scope="col">Roll No</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr class="">
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->user_id }}</td>
                    <td>{{ $student->user_name }}</td>
                    <td>{{ $student->technology }}</td>
                    <td>{{ $student->current_semester }}</td>
                    <td>{{ $student->admission_year }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->clg_id }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->mobile_number }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('administration_student.trash', ['id' => $student->id]) }}"
                            role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Move to Trash">
                            <i class="bi bi-trash"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" href="{{ route('administration_student.edit', ['id' => $student->id]) }}"
                            role="button"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                            <i class="bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container text-center">
    {!! $students->links() !!}
</div>

@include('layout.footer') --}}

@extends('layouts.body')

<!-- Breadcrumb -->
@section('breadcrumb')
    <li>
        <div class="flex items-center">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a href="#"
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Students</a>
        </div>
    </li>
    <li aria-current="page">
        <div class="flex items-center">
            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">All Student</span>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <div
                            class="px-4 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Users
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Add users, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        href="#">
                                        View all
                                    </a>

                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="#">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Add user
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-slate-800">
                                <tr>

                                    <th scope="col" class="pl-6 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                No
                                            </span>
                                        </label>
                                    </th>
                                    <th scope="col" class="pl-6 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                User ID
                                            </span>
                                        </label>
                                    </th>

                                    <th scope="col" class="pl-6 lg:pl-6 xl:pl-4 pr-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Name
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                A. Details
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Guardian
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Address
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                NID
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Action
                                            </span>
                                        </div>
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->id }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->user_id }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->gender }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 lg:pl-3 xl:pl-4 pr-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <div class="grow">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                            {{ $student->user_name }}
                                                        </span>
                                                        <span class="block text-sm text-gray-500">
                                                            {{ $student->email }}</span>
                                                        <span class="block text-sm text-gray-500">
                                                            {{ $student->mobile_number }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->technology }}
                                                </span>
                                                <span class="block text-sm text-gray-500">Roll:
                                                    {{ $student->roll_no }}</span>
                                                <span class="block text-sm text-gray-500">Sem:
                                                    {{ $student->current_semester }}</span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->father_name }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->father_mobile }}</span>
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->mother_name }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->mother_mobile }}</span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_street }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_postOffice }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_upazila }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_zila }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    S: {{ $student->student_nid }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    F: {{ $student->father_nid }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    M: {{ $student->mother_nid }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-1.5">
                                                <a class="block items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                                    href="{{ route('administration_student.edit', ['id' => $student->id]) }}">
                                                    Edit
                                                </a>
                                                <a class="block items-center gap-x-1.5 text-sm text-red-600 decoration-2 hover:underline font-medium"
                                                    href="{{ route('administration_student.trash', ['id' => $student->id]) }}">
                                                    Trash
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-4 py-4 border-t border-gray-200 dark:border-gray-700">

                            <div>
                                <div class="inline-flex gap-x-2">
                                    {{ $students->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
@endsection
