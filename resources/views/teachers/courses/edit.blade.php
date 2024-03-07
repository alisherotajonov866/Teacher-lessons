<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="fs-4 font-bold">{{ __("messages.edit_course") }}</p>
                    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            <label for="title" class="form-label">{{ __("messages.title") }}:</label>
                            <input type="text" name="title" id="title" value="{{ $course->title }}" class="form-control" placeholder="{{ __("messages.title") }}">
                            @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="description" class="form-label">{{ __("messages.description") }}:</label>
                            <textarea rows="5" name="description" id="description" class="form-control" placeholder="{{ __("messages.description") }}">
                                {{ $course->description }}
                            </textarea>
                            @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="price" class="form-label">{{ __("messages.price") }}:</label>
                            <input type="text" name="price" id="price" value="{{ $course->price }}" class="form-control" placeholder="{{ __("messages.price") }}">
                            @error('price')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="category" class="form-label">{{ __("messages.category") }}:</label>
                            <select name="category" id="category" class="form-control form-select">
                                @foreach($categories as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-info font-bold py-2 px-4 rounded">{{ __("messages.save") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('category').value = {{ $course->category_id }};
    </script>
</x-app-layout>
