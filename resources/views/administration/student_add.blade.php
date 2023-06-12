{{-- @include('layout.header')

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
            <select name="technology" id="technology" class="cars form-control" required>
                <option value="" selected>Select a Technology</option>
                <option value="Computer" {{ $student_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                </option>
                <option value="Graphic" {{ $student_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic</option>
                <option value="RAC" {{ $student_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                <option value="Civil" {{ $student_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                <option value="Electronic" {{ $student_data->technology == 'Electronic' ? 'selected' : '' }}>Electronic
                </option>
                <option value="Electrical" {{ $student_data->technology == 'Electrical' ? 'selected' : '' }}>Electrical
                </option>
                <option value="Architecture" {{ $student_data->technology == 'Architecture' ? 'selected' : '' }}>
                    Architecture
                </option>
                <option value="Mechanical" {{ $student_data->technology == 'Mechanical' ? 'selected' : '' }}>Mechanical
                </option>
                <option value="Others" {{ $student_data->technology == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="admission_year" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Seasons</option>
                <option value="18-19" {{ $student_data->admission_year == '18-19' ? 'selected' : '' }}>18-19</option>
                <option value="19-20" {{ $student_data->admission_year == '19-20' ? 'selected' : '' }}>19-20</option>
                <option value="20-21" {{ $student_data->admission_year == '20-21' ? 'selected' : '' }}>20-21</option>
                <option value="21-22" {{ $student_data->admission_year == '21-22' ? 'selected' : '' }}>21-22</option>
                <option value="22-23" {{ $student_data->admission_year == '22-23' ? 'selected' : '' }}>22-23</option>
                <option value="23-24" {{ $student_data->admission_year == '23-24' ? 'selected' : '' }}>23-24</option>
                <option value="Others" {{ $student_data->admission_year == 'Others' ? 'selected' : '' }}>Others
                </option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <select name="current_semester" id="semester" class="cars form-control" required>
                <option value="" selected>Select Semester</option>
                <option value="1st" {{ $student_data->current_semester == '1st' ? 'selected' : '' }}>1st</option>
                <option value="2nd" {{ $student_data->current_semester == '2nd' ? 'selected' : '' }}>2nd</option>
                <option value="3rd" {{ $student_data->current_semester == '3rd' ? 'selected' : '' }}>3rd</option>
                <option value="4th" {{ $student_data->current_semester == '4th' ? 'selected' : '' }}>4th</option>
                <option value="5th" {{ $student_data->current_semester == '5th' ? 'selected' : '' }}>5th</option>
                <option value="6th" {{ $student_data->current_semester == '6th' ? 'selected' : '' }}>6th</option>
                <option value="7th" {{ $student_data->current_semester == '7th' ? 'selected' : '' }}>7th</option>
                <option value="8th" {{ $student_data->current_semester == '8th' ? 'selected' : '' }}>8th</option>
                <option value="Others" {{ $student_data->current_semester == 'Others' ? 'selected' : '' }}>Others
                </option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="user_name" id="name" class="form-control"
                value="{{ $student_data->user_name }}" placeholder="Name" required>
        </div>
        <br>
        <div class="input-group">
            <select name="gender" id="admisionYear" class="cars form-control" required>
                <option value="" selected>Select Gender</option>
                <option value="Male" {{ $student_data->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $student_data->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Others" {{ $student_data->gender == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <input type="text" name="clg_id" id="clgId" class="form-control"
                value="{{ $student_data->clg_id }}" placeholder="Collage ID" required>
        </div>
        <br>
        <div class="input-group">
            <input type="number" name="roll_no" id="Roll" class="form-control"
                value="{{ $student_data->roll_no }}" placeholder="Roll no" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="mobile_number" id="name" class="form-control"
                value="{{ $student_data->mobile_number }}" placeholder="Mobile number" required>
        </div>
        <br>
        <div class="input-group">
            <input type="tel" name="email" id="name" class="form-control" value="{{ $student_data->email }}"
                placeholder="Email" required>
        </div>
        <br>
        <input class="submit btn btn-success save-btn" name="student_submit" type="submit" value="Save">

    </form>
</div>

@include('layout.footer') --}}








@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Student Add | Best Politechnic Institute</title>
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
                Student Add Form
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
                    <label for="student-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
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
                        <input name="student_name" required id="student-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Maria">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID/ Birth Certificate no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="student_nid" required id="student-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <label for="student-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input name="student_email" required id="student-email" type="email"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com">
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="student_mobile" required id="student-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-gender" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Gender
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-gender" name="student_gender"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Gender</option>
                        <option value="Male" {{ $student_data->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student_data->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Others" {{ $student_data->gender == 'Others' ? 'selected' : '' }}>Others</option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="father-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Father's name
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="father_name" required id="father-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Mr. Jak">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="father-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="father_nid" required id="father-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="father-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="father_mobile" required id="father-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="mother-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Mother's name
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="mother_name" required id="mother-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Ms. Rose">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="mother-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="mother_nid" required id="mother-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="mother-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="mother_mobile" required id="mother-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
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
                            placeholder="Street Address">
                        <input name="address_postOffice" required type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Post office address">
                        <div class="sm:flex gap-3">
                            <input name="address_upazila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Upazila">
                            <input name="address_zila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Zila">
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>


            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Previous Academic Information
            </label>

            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        SSC
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="mt-2 space-y-3">
                        <div class="sm:flex gap-3">
                            <select id="pre-board" name="ssc_board"
                                class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option value="" selected>Select Board</option>
                                <option value="Dhaka" {{ $student_data->ssc_board == 'Dhaka' ? 'selected' : '' }}>Dhaka
                                </option>
                                <option value="Jessore" {{ $student_data->ssc_board == 'Jessore' ? 'selected' : '' }}>
                                    Jessore
                                </option>
                                <option value="Barisal" {{ $student_data->ssc_board == 'Barisal' ? 'selected' : '' }}>
                                    Barisal
                                </option>
                                <option value="Comilla" {{ $student_data->ssc_board == 'Comilla' ? 'selected' : '' }}>
                                    Comilla
                                </option>
                                <option value="Chittagong"
                                    {{ $student_data->ssc_board == 'Chittagong' ? 'selected' : '' }}>Chittagong
                                </option>
                                <option value="Dinajpur" {{ $student_data->ssc_board == 'Dinajpur' ? 'selected' : '' }}>
                                    Dinajpur
                                </option>
                                <option value="Rajshahi" {{ $student_data->ssc_board == 'Rajshahi' ? 'selected' : '' }}>
                                    Rajshahi
                                </option>
                                <option value="Sylhet" {{ $student_data->ssc_board == 'Sylhet' ? 'selected' : '' }}>Sylhet
                                </option>
                                <option value="Madrasah" {{ $student_data->ssc_board == 'Madrasah' ? 'selected' : '' }}>
                                    Madrasah
                                </option>
                                <option value="Technical" {{ $student_data->ssc_board == 'Technical' ? 'selected' : '' }}>
                                    Technical
                                </option>
                            </select>
                            <select id="pre-group" name="ssc_group"
                                class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option value="" selected>Select Group</option>
                                <option value="Science" {{ $student_data->ssc_group == 'Science' ? 'selected' : '' }}>
                                    Science
                                </option>
                                <option value="Arts" {{ $student_data->ssc_group == 'Arts' ? 'selected' : '' }}>Arts
                                </option>
                                <option value="Commerce" {{ $student_data->ssc_group == 'Commerce' ? 'selected' : '' }}>
                                    Commerce
                                </option>
                            </select>
                        </div>
                        <div class="sm:flex gap-3">
                            <input name="ssc_roll" required id="af-payment-billing-address" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Board Roll">
                            <input name="ssc_reg" required type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Board Reg.">
                            <input name="ssc_result" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Result GPA">
                        </div>
                    </div>
                </div>
                <div class="col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        HSC
                    </label>
                    <span class="text-sm text-gray-400 dark:text-gray-600">
                        (Optional)
                    </span>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="mt-2 space-y-3">
                        <div class="sm:flex gap-3">
                            <select id="pre-board" name="hsc_board"
                                class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option value="" selected>Select Board</option>
                                <option value="Dhaka" {{ $student_data->hsc_board == 'Dhaka' ? 'selected' : '' }}>Dhaka
                                </option>
                                <option value="Jessore" {{ $student_data->hsc_board == 'Jessore' ? 'selected' : '' }}>
                                    Jessore
                                </option>
                                <option value="Barisal" {{ $student_data->hsc_board == 'Barisal' ? 'selected' : '' }}>
                                    Barisal
                                </option>
                                <option value="Comilla" {{ $student_data->hsc_board == 'Comilla' ? 'selected' : '' }}>
                                    Comilla
                                </option>
                                <option value="Chittagong"
                                    {{ $student_data->hsc_board == 'Chittagong' ? 'selected' : '' }}>Chittagong
                                </option>
                                <option value="Dinajpur" {{ $student_data->hsc_board == 'Dinajpur' ? 'selected' : '' }}>
                                    Dinajpur
                                </option>
                                <option value="Rajshahi" {{ $student_data->hsc_board == 'Rajshahi' ? 'selected' : '' }}>
                                    Rajshahi
                                </option>
                                <option value="Sylhet" {{ $student_data->hsc_board == 'Sylhet' ? 'selected' : '' }}>Sylhet
                                </option>
                                <option value="Madrasah" {{ $student_data->hsc_board == 'Madrasah' ? 'selected' : '' }}>
                                    Madrasah
                                </option>
                                <option value="Technical" {{ $student_data->hsc_board == 'Technical' ? 'selected' : '' }}>
                                    Technical
                                </option>
                            </select>
                            <select id="pre-group" name="hsc_group"
                                class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                <option value="" selected>Select Group</option>
                                <option value="Science" {{ $student_data->hsc_group == 'Science' ? 'selected' : '' }}>
                                    Science
                                </option>
                                <option value="Arts" {{ $student_data->hsc_group == 'Arts' ? 'selected' : '' }}>Arts
                                </option>
                                <option value="Commerce" {{ $student_data->hsc_group == 'Commerce' ? 'selected' : '' }}>
                                    Commerce
                                </option>
                            </select>
                        </div>
                        <div class="sm:flex gap-3">
                            <input name="hsc_roll" id="af-payment-billing-address" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Board Roll">
                            <input name="hsc_reg" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Board Reg.">
                            <input name="hsc_result" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Result GPA">
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Grid -->

            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Academic Information
            </label>
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Technology
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-class" name="technology"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select a Technology</option>
                        <option value="Computer" {{ $student_data->technology == 'Computer' ? 'selected' : '' }}>Computer
                        </option>
                        <option value="Graphic" {{ $student_data->technology == 'Graphic' ? 'selected' : '' }}>Graphic
                        </option>
                        <option value="RAC" {{ $student_data->technology == 'RAC' ? 'selected' : '' }}>RAC</option>
                        <option value="Civil" {{ $student_data->technology == 'Civil' ? 'selected' : '' }}>Civil</option>
                        <option value="Electronic" {{ $student_data->technology == 'Electronic' ? 'selected' : '' }}>
                            Electronic
                        </option>
                        <option value="Electrical" {{ $student_data->technology == 'Electrical' ? 'selected' : '' }}>
                            Electrical
                        </option>
                        <option value="Architecture" {{ $student_data->technology == 'Architecture' ? 'selected' : '' }}>
                            Architecture
                        </option>
                        <option value="Mechanical" {{ $student_data->technology == 'Mechanical' ? 'selected' : '' }}>
                            Mechanical
                        </option>
                        <option value="Others" {{ $student_data->technology == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Session
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-class" name="admission_year"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Seasons</option>
                        <option value="18-19" {{ $student_data->admission_year == '18-19' ? 'selected' : '' }}>18-19
                        </option>
                        <option value="19-20" {{ $student_data->admission_year == '19-20' ? 'selected' : '' }}>19-20
                        </option>
                        <option value="20-21" {{ $student_data->admission_year == '20-21' ? 'selected' : '' }}>20-21
                        </option>
                        <option value="21-22" {{ $student_data->admission_year == '21-22' ? 'selected' : '' }}>21-22
                        </option>
                        <option value="22-23" {{ $student_data->admission_year == '22-23' ? 'selected' : '' }}>22-23
                        </option>
                        <option value="23-24" {{ $student_data->admission_year == '23-24' ? 'selected' : '' }}>23-24
                        </option>
                        <option value="Others" {{ $student_data->admission_year == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Semester
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-class" name="current_semester"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option value="" selected>Select Semester</option>
                        <option value="1st" {{ $student_data->current_semester == '1st' ? 'selected' : '' }}>1st
                        </option>
                        <option value="2nd" {{ $student_data->current_semester == '2nd' ? 'selected' : '' }}>2nd
                        </option>
                        <option value="3rd" {{ $student_data->current_semester == '3rd' ? 'selected' : '' }}>3rd
                        </option>
                        <option value="4th" {{ $student_data->current_semester == '4th' ? 'selected' : '' }}>4th
                        </option>
                        <option value="5th" {{ $student_data->current_semester == '5th' ? 'selected' : '' }}>5th
                        </option>
                        <option value="6th" {{ $student_data->current_semester == '6th' ? 'selected' : '' }}>6th
                        </option>
                        <option value="7th" {{ $student_data->current_semester == '7th' ? 'selected' : '' }}>7th
                        </option>
                        <option value="8th" {{ $student_data->current_semester == '8th' ? 'selected' : '' }}>8th
                        </option>
                        <option value="Others" {{ $student_data->current_semester == 'Others' ? 'selected' : '' }}>Others
                        </option>
                    </select>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="collage-id" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Collage ID
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="clg_id" required id="collage-id" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx/xx">
                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-roll" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Roll no
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="roll_no" required id="student-roll" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-reg" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Reg no
                        </label>
                        <span class="text-sm text-gray-400 dark:text-gray-600">
                            (Optional)
                        </span>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="reg_no" required id="student-roll" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-password"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Password
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="password" id="student-password" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxxxxxxxxxx">
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
