<x-app-layout>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <div class="d-flex justify-content-around float-end" style="width: 25%;">
                            <a href="{{ route('students', ['id' => $id]) }}" class="btn btn-info">
                                <i class="bi bi-people"></i>
                            </a>
                            <a href="{{ route('courses.edit', $id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('courses.destroy', $id) }}"
                                  method="post" id="course-form">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                            <a href="{{ route('lessons.create', ['id' => $id]) }}"
                               class="btn btn-success">{{ __("messages.add_lesson") }}</a>
                        </div>
                        <h3 class="font-bold mb-3 mt-3">{{ __("messages.lessons") }}</h3>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-3">{{ __("messages.theme") }}</th>
                            <th class="col-2">{{ __("messages.file") }}</th>
                            <th class="col-2">{{ __("messages.video") }}</th>
                            <th class="col-2">{{ __("messages.task") }}</th>
                            <th class="col-2">{{ __("messages.action") }}</th>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $lesson->theme }}</td>
                                <td>
                                    <a href="{{ asset('uploads/files/' . $lesson->file) }}" target="_blank">
                                        {{ $lesson->file }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('uploads/videos/' . $lesson->video) }}" target="_blank">
                                        {{ $lesson->video }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('uploads/tasks/' . $lesson->task) }}" target="_blank">
                                        {{ $lesson->task }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-around">
                                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('lessons.destroy', $lesson) }}"
                                              method="post" id="course-form">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
