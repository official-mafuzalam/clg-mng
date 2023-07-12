@extends('layout.body')

{{-- Page Title --}}
@section('page-title')
    <title>Profile | Best Politechnic Institute</title>
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Profile</a>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
        <div class="border-b border-gray-200 dark:border-gray-700">
            <nav class="-mb-0.5 flex justify-center space-x-6" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 active"
                    id="horizontal-alignment-item-1" data-hs-tab="#horizontal-alignment-1"
                    aria-controls="horizontal-alignment-1" role="tab">
                    Personal Info
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600"
                    id="horizontal-alignment-item-2" data-hs-tab="#horizontal-alignment-2"
                    aria-controls="horizontal-alignment-2" role="tab">
                    Guardian Info
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600"
                    id="horizontal-alignment-item-3" data-hs-tab="#horizontal-alignment-3"
                    aria-controls="horizontal-alignment-3" role="tab">
                    Academic Info
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600"
                    id="horizontal-alignment-item-4" data-hs-tab="#horizontal-alignment-4"
                    aria-controls="horizontal-alignment-4" role="tab">
                    Previous Academic Info
                </button>
            </nav>
        </div>

        <div class="mt-3">

            <div id="horizontal-alignment-1" role="tabpanel" aria-labelledby="horizontal-alignment-item-1">

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
                                placeholder="Maria" value="{{ $student_data->student_name }}">
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
                            <input name="student_nid" readonly id="student-nid" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxxx-xxxx-xxxx-xxxx" value="{{ $student_data->student_nid }}">
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
                        <input name="student_email" readonly id="student-email" type="email"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="maria@site.com" value="{{ $student_data->student_email }}">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label for="student-mobile"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
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
                        <label for="student-gender" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Gender
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <input name="student_mobile" readonly id="student-mobile" type="tel"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="{{ $student_data->student_gender }}">
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
                            <input name="address_street" readonly type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Street Address" value="{{ $student_data->address_street }}">
                            <input name="address_postOffice" readonly type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Post office address" value="{{ $student_data->address_postOffice }}">
                            <div class="sm:flex gap-3">
                                <input name="address_upazila" readonly type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Upazila" value="{{ $student_data->address_upazila }}">
                                <input name="address_zila" readonly type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Zila" value="{{ $student_data->address_zila }}">
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                </div>
            </div>






            <div id="horizontal-alignment-2" class="hidden" role="tabpanel"
                aria-labelledby="horizontal-alignment-item-2">

                <div class="grid grid-cols-12 gap-4 sm:gap-6">

                    <div class="col-span-3">
                        <label for="teacher-full-name"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Father's name
                        </label>
                    </div>
                    <!-- End Col -->


                    <div class="col-span-9">
                        <div class="sm:flex">
                            <input name="father_name" readonly id="father-full-name" type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Mr. Jak" value="{{ $student_data->father_name }}">
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
                            <input name="father_nid" readonly id="father-nid" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxxx-xxxx-xxxx-xxxx" value="{{ $student_data->father_nid }}">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label for="father-mobile"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Phone
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <div class="sm:flex">
                            <input name="father_mobile" readonly id="father-mobile" type="tel"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="+880xxxx-xxxxxx" value="{{ $student_data->father_mobile }}">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <label for="mother-full-name"
                            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Mother's name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <div class="sm:flex">
                            <input name="mother_name" readonly id="mother-full-name" type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Ms. Rose" value="{{ $student_data->mother_name }}">
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
                            <input name="mother_nid" readonly id="mother-nid" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxxx-xxxx-xxxx-xxxx" value="{{ $student_data->mother_nid }}">
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label for="mother-mobile"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Phone
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <div class="sm:flex">
                            <input name="mother_mobile" readonly id="mother-mobile" type="tel"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="+880xxxx-xxxxxx" value="{{ $student_data->mother_mobile }}">
                        </div>
                    </div>
                    <!-- End Col -->

                </div>
            </div>

            <div id="horizontal-alignment-3" class="hidden" role="tabpanel"
                aria-labelledby="horizontal-alignment-item-3">
                <div class="grid grid-cols-12 gap-4 sm:gap-6">

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Technology
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <input name="clg_id" readonly id="collage-id" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx/xx" value="{{ $student_data->technology }}">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Session
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <input name="clg_id" readonly id="collage-id" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx/xx" value="{{ $student_data->admission_year }}">
                    </div>
                    <!-- End Col -->

                    <div class="col-span-3">
                        <div class="inline-block">
                            <label for="student-class"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                                Semester
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-span-9">
                        <input name="clg_id" readonly id="collage-id" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx/xx" value="{{ $student_data->current_semester }}">
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
                            <label for="student-roll"
                                class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
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
                            <input name="reg_no" readonly id="student-reg" type="number"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="xxx" value="{{ $student_data->reg_no }}">
                        </div>
                    </div>
                    <!-- End Col -->


                </div>
            </div>
            <div id="horizontal-alignment-4" class="hidden" role="tabpanel"
                aria-labelledby="horizontal-alignment-item-4">

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
                                <input name="ssc_roll" readonly type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Roll" value="{{ $student_data->ssc_board }}">
                                <input name="ssc_roll" readonly type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Roll" value="{{ $student_data->ssc_group }}">
                            </div>
                            <div class="sm:flex gap-3">
                                <input name="ssc_roll" readonly type="number"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Roll" value="{{ $student_data->ssc_roll }}">
                                <input name="ssc_reg" readonly type="number"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Reg." value="{{ $student_data->ssc_reg }}">
                                <input name="ssc_result" readonly type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Result GPA" value="{{ $student_data->ssc_result }}">
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
                                <input name="clg_id" readonly id="collage-id" type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="xxx/xx" value="{{ $student_data->hsc_board }}">

                                <input name="clg_id" readonly id="collage-id" type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="xxx/xx" value="{{ $student_data->hsc_group }}">
                            </div>
                            <div class="sm:flex gap-3">
                                <input readonly name="hsc_roll" type="number"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Roll" value="{{ $student_data->hsc_roll }}">
                                <input readonly name="hsc_reg" type="number"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Board Reg." value="{{ $student_data->hsc_reg }}">
                                <input readonly name="hsc_result" type="text"
                                    class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Result GPA" value="{{ $student_data->hsc_result }}">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Grid -->

            </div>
        </div>
    </div>
@endsection
