@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Deposit Print | Best Politechnic Institute</title>
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
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Deposit</a>
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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Deposit Print</span>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
        <div id="divprint">
            <style type="text/css">

                @media print {

                    .noPrint {
                        display: none;
                    }
                }


                .ticket-print-main {
                    width: 800px;
                    margin: 0 auto;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .ticket-head {
                    font-size: 11px;
                    text-align: right;
                    font-weight: bold;
                    vertical-align: top;
                    padding-right: 3px;
                }

                .ticket-value {
                    font-size: 11px;
                    text-align: left;
                    padding-left: 3px;
                }
            </style>

            <div class="ticket-print-main" id="printDiv">
                <div class="dark:text-gray-300">
                    <table style="font-size: 11px; font-family: Arial, Helvetica, sans-serif">
                        <tbody>
                            <tr>
                                <td style="padding-right: 10px;vertical-align: top;">
                                    <table style="font-size:11px; padding-left: -20px;" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="ticket-head">Challan No :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_challan_no }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Date :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->date }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">User ID :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->user_id }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Technologoy :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->technology }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Year :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->admission_year }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Semester :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->current_semester }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Student Name :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->user_name }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Collage ID :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->clg_id }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Roll :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->roll_no }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Deposit :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_category }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Deposit Amount :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_amount }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Comment :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->comment }}</b>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="ticket-head">Reciver :</td>
                                                <td style="font-size: 11px;" class="ticket-value">
                                                    {{ $deposit_data[0]->inserter_id }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding-left: 10px;vertical-align: top;">
                                    <table style="font-size:11px; padding-left: -20px;" border="0">
                                        <tbody>
                                            <tr>
                                                <td class="ticket-head">Challan No :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_challan_no }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Date :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->date }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">User ID :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->user_id }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Technologoy :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->technology }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Year :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->admission_year }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Semester :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->current_semester }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Student Name :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->user_name }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Collage ID :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->clg_id }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Roll :</td>
                                                <td style="font-size: 13px;" class="ticket-value">
                                                    <b>{{ $deposit_data[0]->roll_no }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Deposit :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_category }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Deposit Amount :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->deposit_amount }}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ticket-head">Comment :</td>
                                                <td style="font-size: 13px; class="ticket-value">
                                                    <b>{{ $deposit_data[0]->comment }}</b>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="ticket-head">Reciver :</td>
                                                <td style="font-size: 11px;" class="ticket-value">
                                                    {{ $deposit_data[0]->inserter_id }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-500 text-gray-700 shadow-sm align-middle hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-green-300 dark:hover:bg-green-600 dark:border-gray-700 dark:text-slate-950 dark:hover:text-white dark:focus:ring-offset-gray-800 noPrint" onclick="window.print()">Print</button>



    </div>
    <!-- End Card -->
@endsection
