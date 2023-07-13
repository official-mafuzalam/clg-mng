@extends('layout.body')

{{-- Page Title --}}
@section('page-title')
    <title>Notice | Best Politechnic Institute</title>
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


        <!-- Card -->
        <div class="flex flex-col">
            <h2 class="md:text-2xl text-xs pb-2 font-bold text-gray-800 dark:text-gray-200 text-center">
                Find Depositor
            </h2>
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <form role="search" action="">
                            <div
                                class="px-2 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">

                                <input name="date_1" required id="student-email" type="date"
                                    class="py-2 px-3 pr-11 block w-full bg-slate-600 text-slate-50 border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-500 dark:border-gray-700 dark:text-gray-100"
                                    placeholder="xxxxxx">

                                <input name="date_2" required id="student-email" type="date"
                                    class="py-2 px-3 pr-11 block w-full bg-slate-600 text-slate-50 border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-500 dark:border-gray-700 dark:text-gray-100"
                                    placeholder="xxxxxx">

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <button
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-500 text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-green-400 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-950 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                            type="submit">
                                            Search
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- End Header -->


                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-300 dark:bg-slate-800">
                                <tr>

                                    <th scope="col" class="pl-2 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                No
                                            </span>
                                        </label>
                                    </th>

                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                User ID
                                            </span>
                                        </div>
                                    </th>
                                    </th>

                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Date
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Voucher No
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
                                                Name
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
                                                Deposit
                                            </span>
                                        </div>
                                    </th>


                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Amount
                                            </span>
                                        </div>
                                    </th>


                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Comment
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($deposits as $key => $deposit)
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-2 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $key + 1 }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-2 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $deposit->user_id }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->date }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $deposit->deposit_challan_no }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">

                                                <span class="block text-sm text-gray-500">
                                                    {{ $deposit->current_semester }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->user_name }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->roll_no }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->deposit_category }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span
                                                    class="deposit-amount block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->deposit_amount }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->comment }}
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <div class="text-center">
                            <button id="totalBtn" type="button"
                                class="py-1 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-green-500 text-gray-700 shadow-sm align-middle hover:bg-lime-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-green-400 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-950 dark:hover:text-white dark:focus:ring-offset-gray-800">Total</button>
                            <p class="py-2 font-semibold text-gray-800 dark:text-gray-200" id="totalAmount"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#totalBtn').click(function() {
                var totalAmount = 0;

                // Loop through each deposit row and add the deposit amount to the total
                $('.deposit-amount').each(function() {
                    var depositAmount = parseFloat($(this).text());
                    totalAmount += depositAmount;
                });

                // Display the total amount
                $('#totalAmount').text('Total deposit: ' + totalAmount);
            });
        });
    </script>
@endsection
