@extends('layout.body')

{{-- Page Title --}}
@section('page-title')
    <title>Dashboard | Best Politechnic Institute</title>
@endsection

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
    <!-- Page Heading -->
    <header>

        <h1 class="block text-2xl font-bold text-gray-800 sm:text-5xl dark:text-white text-center">
            Best Politechnic Institute
        </h1>
        <p class="mt-2 text-lg sm:text-2xl text-gray-800 dark:text-gray-400 text-center">Hemayetpur, Savar, Dhaka</p>

    </header>
    <!-- End Page Heading -->

    <div class="w-full h-fit pt-2 mt-2 bg-green-400 dark:bg-amber-400 rounded-lg text-slate-900 dark:text-gray-950">

        <marquee class="text-sm mx-4" behavior="scroll" direction="left" onmouseover="this.stop();"
            onmouseout="this.start();">
            <a href="{{ route('student_portal.notice') }}">
                {{ $latest_notice->title }}
            </a>
        </marquee>

    </div>


    <div class="w-full h-fit p-4 mt-4 bg-green-400 dark:bg-violet-900 rounded-lg text-lg text-slate-900 dark:text-gray-950">

        <div class="grid grid-cols-4 gap-4">

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2 text-center">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-gray-50 dark:text-gray-200 text-center">
                    Last Deposite
                </p>
                <p class="text-sm sm:font-bold text-slate-950 dark:text-gray-400 text-center">{{ $latest_deposit->date }} :
                    {{ $latest_deposit->deposit_amount }}</p>
                <p class="text-sm sm:font-bold text-red-300 dark:text-red-200 text-center">{{ $latest_deposit->comment }}
                </p>

                <a class="inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-400 hover:text-blue-700"
                    href="#">
                    Deposite
                    <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2 text-center">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-gray-50 dark:text-gray-200 text-center">
                    Event
                </p>
                <p class="text-sm sm:font-bold text-slate-950 dark:text-gray-400 text-center">{{ $latest_deposit->date }} :
                    {{ $latest_deposit->deposit_amount }}</p>
                <p class="text-sm sm:font-bold text-red-300 dark:text-red-200 text-center">{{ $latest_deposit->comment }}
                </p>

                <a class="inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-400 hover:text-blue-700"
                    href="#">
                    Deposite
                    <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2 text-center">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-gray-50 dark:text-gray-200 text-center">
                    Last Result
                </p>
                <p class="text-sm sm:font-bold text-slate-950 dark:text-gray-400 text-center">{{ $latest_deposit->date }} :
                    {{ $latest_deposit->deposit_amount }}</p>
                <p class="text-sm sm:font-bold text-red-300 dark:text-red-200 text-center">{{ $latest_deposit->comment }}
                </p>

                <a class="inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-400 hover:text-blue-700"
                    href="#">
                    Deposite
                    <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2 text-center">
                <p class="sm:font-bold sm:text-lg text-sm overflow-hidden text-gray-50 dark:text-gray-200 text-center">
                    Last Deposite
                </p>
                <p class="text-sm sm:font-bold text-slate-950 dark:text-gray-400 text-center">{{ $latest_deposit->date }} :
                    {{ $latest_deposit->deposit_amount }}</p>
                <p class="text-sm sm:font-bold text-red-300 dark:text-red-200 text-center">{{ $latest_deposit->comment }}
                </p>

                <a class="inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-400 hover:text-blue-700"
                    href="#">
                    Deposite
                    <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </div>

        </div>

    </div>

    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
