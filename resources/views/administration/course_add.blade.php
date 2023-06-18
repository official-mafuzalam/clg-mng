@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>{{ $title }} | Best Politechnic Institute</title>
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Course</a>
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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Add Course</span>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                {{ $title }}
            </h2>
            <label class="inline-block text-sm font-medium dark:text-gray-400">
                Course Information
            </label>

        </div>

        <form method="POST" action="{{ $url }}">
            @csrf
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-4 sm:gap-6">


                <div class="col-span-3">
                    <label for="course-semester" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Semester
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="course-semester" name="semester"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Semester</option>
                        <option value="1st" {{ $course_data->semester == '1st' ? 'selected' : '' }}>1st</option>
                        <option value="2nd" {{ $course_data->semester == '2nd' ? 'selected' : '' }}>2nd</option>
                        <option value="3rd" {{ $course_data->semester == '3rd' ? 'selected' : '' }}>3rd</option>
                        <option value="4th" {{ $course_data->semester == '4th' ? 'selected' : '' }}>4th</option>
                        <option value="5th" {{ $course_data->semester == '5th' ? 'selected' : '' }}>5th</option>
                        <option value="6th" {{ $course_data->semester == '6th' ? 'selected' : '' }}>6th</option>
                        <option value="7th" {{ $course_data->semester == '7th' ? 'selected' : '' }}>7th</option>
                        <option value="8th" {{ $course_data->semester == '8th' ? 'selected' : '' }}>8th</option>
                        <option value="Others" {{ $course_data->semester == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="course-technology" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Technology
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="course-technology" name="technology"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        
                        <option value="" selected>Select a Technology</option>
                        <option value="Computer" {{ $course_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                        </option>
                        <option value="Graphic" {{ $course_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic
                        </option>
                        <option value="RAC" {{ $course_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                        <option value="Civil" {{ $course_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                        <option value="Electronic" {{ $course_data->technology == 'Electronic' ? 'selected' : '' }}>
                            Electronic
                        </option>
                        <option value="Electrical" {{ $course_data->technology == 'Electrical' ? 'selected' : '' }}>
                            Electrical
                        </option>
                        <option value="Architecture" {{ $course_data->technology == 'Architecture' ? 'selected' : '' }}>
                            Architecture
                        </option>
                        <option value="Mechanical" {{ $course_data->technology == 'Mechanical' ? 'selected' : '' }}>
                            Mechanical
                        </option>
                        <option value="Others" {{ $course_data->technology == 'Others' ? 'selected' : '' }}>Others</option>
                    
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="course-book" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Book Name
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="book_name" id="course-book" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Book Name" value="{{ $course_data->book_name }}">
                    </div>
                </div>
                <!-- End Col -->
            </div>







            <div class="mt-5 flex justify-center gap-x-2">
                <input name="" type="submit" value="Save"
                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            </div>
        </form>
    </div>
    <!-- End Card -->
@endsection
