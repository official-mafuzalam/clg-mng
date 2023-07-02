{{-- <div class="container text-center">
    <a class="text-decoration-none" href="{{ url('/') }}">
        <h2 class="fw-bold">Best Polytechnic Institute</h2>
    </a>
    <a class="text-decoration-none" href="{{ route('administration_deposit.findPage') }}">
        <p class="fs-4">Deposit Find</p>
    </a>

</div>

<div class="container text-center">
    <form class="row g-3 d-flex" role="search" action="">
        <div class="col-md-4">
            <div class="input-group">
                <input type="date" class="form-control" name="date_1" placeholder="User Id" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="date" class="form-control" name="date_2" placeholder="User Id" required>
            </div>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success mb-3">Search</button>
        </div>
    </form>
</div>

<h4 class="text-center">Deposit History</h4>
<div class="table-responsive">
    <table class="table table-sm table-striped table-hover table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th scope="col">S_No</th>
                <th scope="col">Date</th>
                <th scope="col">User_id</th>
                <th scope="col">Technologoy</th>
                <th scope="col">Year</th>
                <th scope="col">Semester</th>
                <th scope="col">Name</th>
                <th scope="col">Clg_Id</th>
                <th scope="col">Roll</th>
                <th scope="col">Deposit</th>
                <th scope="col">Amount</th>
                <th scope="col">Comment</th>
                <th scope="col">Challan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deposits as $deposit)
                <tr class="">
                    <td>{{ $deposit->id }}</td>
                    <td>{{ $deposit->date }}</td>
                    <td>{{ $deposit->user_id }}</td>
                    <td>{{ $deposit->technology }}</td>
                    <td>{{ $deposit->admission_year }}</td>
                    <td>{{ $deposit->current_semester }}</td>
                    <td>{{ $deposit->user_name }}</td>
                    <td>{{ $deposit->clg_id }}</td>
                    <td>{{ $deposit->roll_no }}</td>
                    <td class="deposit-amount">{{ $deposit->deposit_amount }}</td>
                    <td>{{ $deposit->deposit_category }}</td>
                    <td>{{ $deposit->comment }}</td>
                    <td>{{ $deposit->deposit_challan_no }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm"
                            href="{{ route('administration_deposit.print', ['id' => $deposit->deposit_challan_no]) }}" role="button"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                            <i class="bi bi-printer"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container text-center">
    {!! $deposits->links() !!}
</div>

<div class="container text-center">
    <strong id="totalAmount"></strong>
    <button id="totalBtn" type="button" class="btn btn-primary btn-sm">Total</button>
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
            $('#totalAmount').text('Total: ' + totalAmount);
        });
    });
</script>
 --}}


@extends('layouts.body')

{{-- Page Title --}}
@section('page-title')
    <title>Deposit Quarry | Best Politechnic Institute</title>
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
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Deposit Quarry</span>
        </div>
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    {{-- Alert notification --}}
    @if (session('success'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-sm text-teal-800 font-medium">
                        {{ session('success') }}
                    </div>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('success-trash'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-200 border border-teal-200 rounded-md p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-sm text-teal-800 font-medium">
                        {{ session('success-trash') }}
                    </div>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('success-delete'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-400 border border-teal-200 rounded-md p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-4 w-4 text-teal-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-sm text-teal-800 font-medium">
                        {{ session('success-delete') }}
                    </div>
                </div>
                <div class="pl-3 ml-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif




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
                                                No / User ID
                                            </span>
                                        </label>
                                    </th>

                                    <th scope="col" class="pl-2 lg:pl-6 xl:pl-4 pr-6 py-3 text-left">
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
                                                Technologoy
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


                                    <th scope="col" class="px-2 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Action
                                            </span>
                                        </div>
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($deposits as $deposit)
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-2 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $deposit->id }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $deposit->user_id }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 lg:pl-3 xl:pl-4 pr-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <div class="grow">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                            {{ $deposit->date }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-3">

                                                <span class="block text-sm text-gray-500">
                                                    {{ $deposit->technology }}
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

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-2 py-1.5">
                                                <a target="blank"
                                                    class="block items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                                    href="{{ route('administration_deposit.print', ['id' => $deposit->deposit_challan_no]) }}">
                                                    Print
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-2 py-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="inline-flex gap-x-2">
                                {{ $deposits->links() }}
                            </div>
                        </div>
                        <!-- End Footer -->

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
