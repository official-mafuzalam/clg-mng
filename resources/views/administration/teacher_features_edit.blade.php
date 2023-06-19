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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Teacher</a>
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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Add Teacher</span>
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
                        <input name="teacher_name" readonly id="teacher-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Maria" value="{{ $teacher_data->teacher_name }}">
                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="teacher-user_id" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            User ID
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="user_id" readonly id="teacher-user_id" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="{{ $teacher_data->user_id }}">
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
                    <input name="teacher_email" readonly id="teacher-email" type="email"
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
                        <input name="teacher_mobile" readonly id="teacher-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="{{ $teacher_data->teacher_mobile }}">
                    </div>
                </div>
                <!-- End Col -->

            </div>




            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Features
            </label>
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="s_add-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Student Add
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="s_add" type="checkbox" id="s_add-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($s_add == 1) checked @endif>
                            <label for="s_add-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="s_all-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Student All
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="s_all" type="checkbox" id="s_all-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($s_all == 1) checked @endif>
                            <label for="s_all-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="s_trash-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Student Trash
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="s_trash" type="checkbox" id="s_trash-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($s_trash == 1) checked @endif>
                            <label for="s_trash-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="s_u_sem-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Semester Update
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="s_u_sem" type="checkbox" id="s_u_sem-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($s_u_sem == 1) checked @endif>
                            <label for="s_u_sem-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="t_add-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Teacher Add
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="t_add" type="checkbox" id="t_add-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($t_add == 1) checked @endif>
                            <label for="t_add-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="t_all-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Teacher All
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="t_all" type="checkbox" id="t_all-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($t_all == 1) checked @endif>
                            <label for="t_all-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="t_trash-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Teacher Trash
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="t_trash" type="checkbox" id="t_trash-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($t_trash == 1) checked @endif>
                            <label for="t_trash-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="t_features-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Teacher Features
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="t_features" type="checkbox" id="t_features-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($t_features == 1) checked @endif>
                            <label for="t_features-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="n_add-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Notice Add
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="n_add" type="checkbox" id="n_add-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($n_add == 1) checked @endif>
                            <label for="n_add-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="n_all-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Notice All
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="n_all" type="checkbox" id="n_all-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($n_all == 1) checked @endif>
                            <label for="n_all-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="n_archived-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Notice Archived
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="n_archived" type="checkbox" id="n_archived-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($n_archived == 1) checked @endif>
                            <label for="n_archived-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="r_publish-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Result Published
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="r_publish" type="checkbox" id="r_publish-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($r_publish == 1) checked @endif>
                            <label for="r_publish-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="r_check-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Result Checked
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="r_check" type="checkbox" id="r_check-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($r_check == 1) checked @endif>
                            <label for="r_check-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="f_deposit-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Fees Deposit
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="f_deposit" type="checkbox" id="f_deposit-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($f_deposit == 1) checked @endif>
                            <label for="f_deposit-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="f_quarry-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Deposit Quarry
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="f_quarry" type="checkbox" id="f_quarry-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($f_quarry == 1) checked @endif>
                            <label for="f_quarry-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="c_add-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Course Add
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="c_add" type="checkbox" id="c_add-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($c_add == 1) checked @endif>
                            <label for="c_add-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="c_all-switch"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Course All
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <input name="c_all" type="checkbox" id="c_all-switch"
                                class="relative shrink-0 w-11 h-6 bg-gray-100 checked:bg-none checked:bg-blue-600 rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800
                                before:inline-block before:w-5 before:h-5 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                                @if ($c_all == 1) checked @endif>
                            <label for="c_all-switch"
                                class="text-sm text-gray-500 ml-3 dark:text-gray-400">Active</label>
                        </div>

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
