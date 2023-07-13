@extends('layout.body')

{{-- Page Title --}}
@section('page-title')
    <title>{{$notice_data->title}}</title>
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Notice</a>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">

        <div class="flex flex-col">
            <h2 class="md:text-2xl text-xs pb-2 font-bold text-gray-800 dark:text-gray-200 text-center">
                {{$notice_data->title}}
            </h2>

            <h2 class="md:text-lg text-xs pb-2 font-bold text-gray-800 dark:text-gray-200 text-center">
                {{$notice_data->category}}
            </h2>

            <h2 class="md:text-lg text-xs pb-2 font-bold text-gray-950 dark:text-gray-200 text-center">
                {{ $notice_data->created_at->format('d \ M \ Y') }}
            </h2>

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">

                <p class="text-base text-gray-500 p-4">
                    {{$notice_data->description}}
                </p>

            </div>


        </div>
    </div>
@endsection
