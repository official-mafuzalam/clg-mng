
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    {{-- Alert --}}
    @if (session('success'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-sm text-teal-800 font-medium">
                        {{ session('success') }}
                    </div>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
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

    <!-- Page Heading -->
    <header>

        <h1 class="block text-2xl font-bold text-gray-800 sm:text-5xl dark:text-white text-center">Best High School
        </h1>
        <p class="mt-2 text-lg sm:text-2xl text-gray-800 dark:text-gray-400 text-center">Hemayetpur, Savar, Dhaka</p>

    </header>
    <!-- End Page Heading -->

    <div class="w-full h-fit p-4 mt-4 bg-slate-300 dark:bg-gray-800 rounded-lg text-lg text-slate-900 dark:text-gray-400">

        <div class="grid grid-cols-4 gap-4">

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">
                    Total Student</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">{{ $totalStudents }}</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">
                    Total Teacher</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center"> {{ $totalTeachers }}</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">
                    Today's Total
                    Attendance</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">150</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">
                    Running Notice</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">  {{ $totalNotice }}</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">This
                    Today Total Deposit
                </p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center"> {{ $totalAmount }} ৳</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">
                    Running Notice</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">  {{ $totalNotice }}</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-teal-500 dark:text-gray-200 text-center">This
                    Today My Deposit
                </p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center"> {{ $totalOwnAmount }} ৳</p>
            </div>

        </div>



    </div>

    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
