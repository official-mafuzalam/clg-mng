@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Teacher Add | Best Politechnic Institute</title>
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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Add Student</span>
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
                Personal Information
            </label>

        </div>

        <form method="POST" action="{{ $url }}">
            @csrf
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <label for="teacher-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Full name
                    </label>
                    <div class="hs-tooltip inline-block">
                        <button type="button" class="hs-tooltip-toggle ml-1">
                            <svg class="inline-block w-3 h-3 text-gray-400 dark:text-gray-600"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </button>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-lg dark:bg-slate-700"
                            role="tooltip">
                            Displayed on public forums, such as Preline
                        </span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="teacher_name" required id="teacher-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Maria" value="{{ $teacher_data->teacher_name }}">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="teacher-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID/ Birth Certificate no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="teacher_nid" required id="teacher-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx" value="{{ $teacher_data->teacher_nid }}">
                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <label for="teacher-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input name="teacher_email" required id="teacher-email" type="email"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $teacher_data->teacher_email }}">
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="teacher-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="teacher_mobile" required id="teacher-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="{{ $teacher_data->teacher_mobile }}">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="teacher-gender" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Gender
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="teacher-gender" name="teacher_gender"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Gender</option>
                        <option value="Male" {{ $teacher_data->teacher_gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $teacher_data->teacher_gender == 'Female' ? 'selected' : '' }}>Female
                        </option>
                        <option value="Others" {{ $teacher_data->teacher_gender == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Address
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="mt-2 space-y-3">
                        <input name="address_street" required id="af-payment-billing-address" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Street Address" value="{{ $teacher_data->address_street }}">
                        <input name="address_postOffice" required type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Post office address" value="{{ $teacher_data->address_postOffice }}">
                        <div class="sm:flex gap-3">
                            <input name="address_upazila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Upazila" value="{{ $teacher_data->address_upazila }}">
                            <input name="address_zila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Zila" value="{{ $teacher_data->address_zila }}">
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>




            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Academic Information
            </label>
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="teacher-designation"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Designation
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="teacher-designation" name="designation"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Designation</option>
                        <option value="Admin" {{ $teacher_data->designation == 'Admin' ? 'selected' : '' }}
                            data-type-value="1">
                            Admin</option>
                        <option value="CI" {{ $teacher_data->designation == 'CI' ? 'selected' : '' }}
                            data-type-value="0">CI
                        </option>
                        <option value="JR Instructor"
                            {{ $teacher_data->designation == 'JR Instructor' ? 'selected' : '' }} data-type-value="0">JR
                            Instructor</option>
                        <option value="Accountants" {{ $teacher_data->designation == 'Accountants' ? 'selected' : '' }}
                            data-type-value="2">
                            Accountants</option>
                        <option value="Others" {{ $teacher_data->designation == 'Others' ? 'selected' : '' }}
                            data-type-value="0">
                            Others</option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="teacher-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Technology
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="teacher-class" name="technology"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select a Technology</option>
                        <option value="Computer" {{ $teacher_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                        </option>
                        <option value="Graphic" {{ $teacher_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic
                        </option>
                        <option value="RAC" {{ $teacher_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                        <option value="Civil" {{ $teacher_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                        <option value="Electronic" {{ $teacher_data->technology == 'Electronic' ? 'selected' : '' }}>
                            Electronic
                        </option>
                        <option value="Electrical" {{ $teacher_data->technology == 'Electrical' ? 'selected' : '' }}>
                            Electrical
                        </option>
                        <option value="Architecture" {{ $teacher_data->technology == 'Architecture' ? 'selected' : '' }}>
                            Architecture
                        </option>
                        <option value="Mechanical" {{ $teacher_data->technology == 'Mechanical' ? 'selected' : '' }}>
                            Mechanical
                        </option>
                        <option value="Others" {{ $teacher_data->technology == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="teacher-password"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Password
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="password" id="teacher-password" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxxxxxxxxxx" value="{{ $teacher_data->password }}">
                    </div>
                </div>
                <!-- End Col -->








            </div>
            <!-- End Grid -->










            <div class="mt-5 flex justify-center gap-x-2">
                <input name="" type="submit" value="Save"
                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            </div>
        </form>
    </div>
    <!-- End Card -->
@endsection
