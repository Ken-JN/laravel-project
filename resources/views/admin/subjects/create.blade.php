<x-admin.create-modal
    id="createSubjectModal"
    form-id="createSubjectForm"
    trigger-id="createSubjectModalButton"
    title="Tambah Mata Pelajaran"
    :action="route('admin.subjects.store')"
    submit-label="Tambah Mata Pelajaran"
>
    <div class="sm:col-span-2">
        <label for="subject_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mata Pelajaran</label>
        <input type="text" name="name" id="subject_name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama mata pelajaran" required>
        @error('name')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
</x-admin.create-modal>
