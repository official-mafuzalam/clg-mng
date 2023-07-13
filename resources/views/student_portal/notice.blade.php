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
                All Notice's
            </h2>
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-slate-800">
                                <tr>

                                    <th scope="col" class="pl-6 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                No
                                            </span>
                                        </label>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Category
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Title
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
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
                                @foreach ($notice_data as $notice)
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 py-3">
                                                {{-- <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $notice->created_at }}
                                                </span> --}}
                                                <div class="block rounded-t overflow-hidden text-center">
                                                    <div class="bg-blue-600 text-white text-sm md:text-lg">
                                                        {{ $notice->created_at->format('Y \ M') }}
                                                    </div>
                                                    <div class="pt-1 bg-slate-600">
                                                        <span class="text-lg md:text-4xl font-bold leading-tight">
                                                            {{ $notice->created_at->format('d') }}
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">

                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $notice->category }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px md:whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $notice->title }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-1.5">
                                                <a class="py-1 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                    href="{{ route('student_portal.notice.full', ['id' => $notice->id]) }}">
                                                    Read Full
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-arrow-right-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-4 py-4 border-t border-gray-200 dark:border-gray-700">
                            <div class="inline-flex gap-x-2">
                                {{-- {{ $notices->links() }} --}}
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
@endsection
