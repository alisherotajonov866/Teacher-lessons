<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-2" style="background-color: #f3f1f1">
                            <a href="{{ route('my-courses')}}"
                               class="m-3 row text-dark fw-bold">{{ __("messages.all") }}</a>
                            @foreach($categories as $category)
                                <a href="{{ route('my-courses', ['category' => $category->id]) }}"
                                   class="m-3 row text-dark fw-bold">{{ $category->name }}</a>
                            @endforeach
                        </div>
                        <div class="col-10 align-content-center">
                            <form action="">
                                <input type="search" name="search" class="form-control"
                                       placeholder="{{ __("messages.search") }}">
                            </form>
                            <div class="row row-cols-3">
                                @foreach($courses as $course)
                                    <a href="{{ route('student.course-lessons', $course->id) }}"
                                       class="rounded p-3 text-white fw-bold m-3"
                                       style="background-color: #6292d9; width: 45%">
                                        <p>{{ $course->course->title }}</p>
                                        <p>{{ number_format($course->course->price, 0, ' ', ' ') }} {{ __("messages.uzs") }}</p>
                                        <p class="float-end">
                                            @if($course->status == 1)
                                                <span class="badge bg-success">{{ __("messages.active") }}</span>
                                            @else
                                                <span class="badge bg-warning">{{ __("messages.inactive") }}</span>
                                            @endif
                                            <i class="bi bi-eye ml-1"></i> {{ $course->course->views }}
                                            <i class="bi bi-heart ml-1"></i> 5
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                            <div>
                                {{ $courses->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
