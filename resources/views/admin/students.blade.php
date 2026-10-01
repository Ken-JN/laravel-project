@php
    $students = [
        ['name' => 'Kenji', 'nis' => '240001', 'CLASS' => 'X PPLG 1', 'Status' => 'Active'],
        ['name' => 'Bima Pratama', 'nis' => '240002', 'CLASS' => 'X PPLG 1', 'Status' => 'Active'],
        ['name' => 'Citra Lestari', 'nis' => '240003', 'CLASS' => 'X PPLG 2', 'Status' => 'Active'],
        ['name' => 'Daffa Ramadhan', 'nis' => '240004', 'CLASS' => 'X PPLG 2', 'Status' => 'Inactive'],
        ['name' => 'Eka Safitri', 'nis' => '240005', 'CLASS' => 'XI PPLG 1', 'Status' => 'Active'],
        ['name' => 'Fajar Nugraha', 'nis' => '240006', 'CLASS' => 'XI PPLG 1', 'Status' => 'Active'],
        ['name' => 'Gita Maharani', 'nis' => '240007', 'CLASS' => 'XI PPLG 2', 'Status' => 'Active'],
        ['name' => 'Hendra Wijaya', 'nis' => '240008', 'CLASS' => 'XI PPLG 2', 'Status' => 'Inactive'],
        ['name' => 'Intan Permata', 'nis' => '240009', 'CLASS' => 'XII PPLG 1', 'Status' => 'Active'],
        ['name' => 'Joko Susanto', 'nis' => '240010', 'CLASS' => 'XII PPLG 1', 'Status' => 'Active'],
    ];
@endphp

<x-admin.layout>
    <section class="col-span-1 sm:col-span-2 lg:col-span-4">
        <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                    Students
                </h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Manage student records and enrollment status.
                </p>
            </div>
            <button type="button" class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add student
            </button>
        </div>

        <div class="relative overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800">
            <div class="flex flex-col gap-4 border-b border-gray-200 p-4 dark:border-gray-700 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Student list</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">A list of all registered students.</p>
                </div>
                <label for="student-search" class="sr-only">Search students</label>
                <div class="relative w-full sm:w-64">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-4.35-4.35m2.35-5.65a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                        </svg>
                    </div>
                    <input id="student-search" type="search" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400" placeholder="Search students">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">NIS</th>
                            <th scope="col" class="px-6 py-3">Class</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="border-b bg-white last:border-b-0 hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                                <td class="whitespace-nowrap px-6 py-4 font-semibold text-gray-900 dark:text-white">{{ $student['name'] }}</td>
                                <td class="px-6 py-4">{{ $student['nis'] }}</td>
                                <td class="px-6 py-4">{{ $student['CLASS'] }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium {{ $student['Status'] === 'Active' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' }}">
                                        {{ $student['Status'] }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-between border-t border-gray-200 p-4 dark:border-gray-700">
                <span class="text-sm text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">10</span></span>
                <div class="inline-flex rounded-md shadow-sm" role="group" aria-label="Pagination">
                    <button type="button" class="rounded-l-lg border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400" disabled>Previous</button>
                    <button type="button" class="border-y border-gray-300 bg-blue-50 px-3 py-2 text-sm font-medium text-blue-700 dark:border-gray-600 dark:bg-gray-600 dark:text-white">1</button>
                    <button type="button" class="rounded-r-lg border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400" disabled>Next</button>
                </div>
            </div>
        </div>
    </section>
</x-admin.layout>
