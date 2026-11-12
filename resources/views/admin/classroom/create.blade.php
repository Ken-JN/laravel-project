<x-admin.create-modal
    id="createClassroomModal"
    form-id="createClassroomForm"
    trigger-id="createClassroomModalButton"
    title="Tambah Kelas"
    :action="route('admin.classroom.store')"
    submit-label="Tambah Kelas"
>
    <div class="sm:col-span-2">
        <label for="classroom_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
        <input type="text" name="name" id="classroom_name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh: 10 PPLG 1" required>
        @error('name')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
    <div class="sm:col-span-2">
        <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
        <input type="text" name="major" id="major" value="{{ old('major') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contoh: PPLG" required>
        @error('major')
            <p class="mt-1 text-xs text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
    </div>
</x-admin.create-modal>
