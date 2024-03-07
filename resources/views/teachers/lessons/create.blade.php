<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="fs-4 font-bold">{{ __("messages.add_lesson") }}</p>
                    <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <label for="theme" class="block text-gray-700 text-sm font-bold mb-2">{{ __("messages.theme") }}:</label>
                            <input type="text" name="theme" id="theme" class="form-control" placeholder="{{ __("messages.theme") }}">
                            @error('theme')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="file" class="block text-gray-700 text-sm font-bold mb-2">{{ __("messages.file") }}:</label>
                            <input type="file" name="file" id="file" accept=".pdf" class="form-control">
                            @error('file')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="video" class="block text-gray-700 text-sm font-bold mb-2">{{ __("messages.video") }}:</label>
                            <input type="file" name="video" id="video" accept=".avi,.mp4" class="form-control">
                            @error('video')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="task" class="block text-gray-700 text-sm font-bold mb-2">{{ __("messages.task") }}:</label>
                            <input type="file" name="task" id="task" accept=".pdf" class="form-control">
                            @error('task')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="hidden" name="course_id" value="{{ $id }}">
                        <div class="mt-4">
                            <button type="submit" class="btn btn-info font-bold py-2 px-4 rounded">{{ __("messages.save") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
