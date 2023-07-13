@extends('layout.body')

{{-- Page Title --}}
@section('page-title')
    <title>Result | Best Politechnic Institute</title>
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Result</a>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">

                    <form role="search" action="">
                        <div
                            class="px-2 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">

                            <input name="technology" readonly type="text"
                                class="py-2 px-3 pr-11 block w-full bg-slate-600 text-slate-50 border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-500 dark:border-gray-700 dark:text-gray-100"
                                placeholder="xxxxxx" value="{{ session('user.technology') }}">

                            <select name="semester" id="semester"
                                class="py-2 px-3 pr-9 block w-full bg-slate-600 text-slate-50 border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-500 dark:border-gray-700 dark:text-slate-100"
                                required>
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

                            <button
                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-500 text-gray-700 shadow-sm align-middle hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-green-300 dark:hover:bg-green-600 dark:border-gray-700 dark:text-slate-950 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                type="submit">
                                Search
                            </button>


                        </div>
                    </form>


                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>

                                <th scope="col" class="pl-2 py-3 text-left">
                                    <label class="flex">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            User ID
                                        </span>
                                    </label>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Student
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Technology
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Sem
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Roll
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Subject
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-2 py-3 text-left">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Marks
                                        </span>
                                    </div>
                                </th>

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($result_data as $student)
                                <tr>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="pl-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->user_id }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->user_name }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">

                                            <span class="block text-sm text-gray-500">
                                                {{ $student->technology }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->semester }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->roll_no }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->subject }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                {{ $student->marks }}
                                            </span>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
