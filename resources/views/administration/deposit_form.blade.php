@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Deposit Form | Best Politechnic Institute</title>
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
                Deposit Form
            </h2>
            <label class="inline-block text-sm font-medium dark:text-gray-400">
                Student details
            </label>

        </div>

        <form method="POST" action="{{ route('administration_deposit.confirm') }}">
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
                        <input name="student_name" id="student-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Maria" value="{{ $student_data->student_name }}" readonly>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        User ID
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input name="user_id" readonly id="student-email" type="email"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $student_data->user_id }}">
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input name="student_email" readonly id="student-email" type="email"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $student_data->student_email }}">
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
                        <input name="student_mobile" readonly id="student-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="{{ $student_data->student_mobile }}">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Technology
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input name="technology" readonly id="technology" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $student_data->technology }}">
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
                    <input name="admission_year" readonly id="admission_year" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $student_data->admission_year }}">
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
                    <input name="current_semester" readonly id="current_semester" type="text"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com" value="{{ $student_data->current_semester }}">
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
                        <input name="clg_id" readonly id="collage-id" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx/xx" value="{{ $student_data->clg_id }}">
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
                        <input name="roll_no" readonly id="student-roll" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx" value="{{ $student_data->roll_no }}">
                    </div>
                </div>
                <!-- End Col -->

            </div>
            <!-- End Grid -->

            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Deposit Form Details
            </label>

            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="date" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Date
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="date" required id="date type="date"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Deposit Category
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <select name="deposit_category"
                            class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            required onchange="changeValue()">
                            <option value="" selected>Select Fees Category</option>
                            <option value="Semester Fees" data-value="8500">Semester Fees</option>
                            <option value="Tuition Fees" data-value="12000">Tuition Fees</option>
                            <option value="Form Fill-Up Fees" data-value="2500">Form Fill-Up Fees</option>
                            <option value="Mid Term Fees" data-value="600">Mid Term Fees</option>
                            <option value="Referred Exam Fees" data-value="800">Referred Exam Fees</option>
                            <option value="Others" data-value="0">Others</option>
                        </select>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-roll" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Deposit Amount
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="deposit_amount" required id="deposit_amount" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Comment
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="comment" required  type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx">
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



    <script>
        function changeValue() {
            var dropdown = document.getElementsByName("deposit_category")[0];
            var inputBox = document.getElementById("deposit_amount");
            inputBox.value = dropdown.options[dropdown.selectedIndex].getAttribute("data-value");
        }
    </script>
@endsection
