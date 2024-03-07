<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-8">
                            <div class="row">
                                <div class="col-12">
                                    <h1>{{ $course->title }}</h1>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->description }}</p>
                                </div>
                                <div class="col-12">
                                    <p>{{ number_format($course->price, 0, ' ', ' ') }} {{ __("messages.uzs") }}</p>
                                </div>
                                <div class="col-12">
                                    <p><i class="bi bi-eye"></i> {{ $course->views - 1 }}</p>
                                    <a href="{{ route('student.course-start', [$course->id, $course->user->id]) }}" class="btn btn-primary">{{ __("messages.start") }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-12">
                                    <h1>{{ __("messages.teacher") }}</h1>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->user->name." ".$course->user->surname }}</p>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->user->phone }}</p>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->user->job }}</p>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->user->city.", ".$course->user->country }}</p>
                                </div>
                                <div class="col-12">
                                    <p>{{ $course->user->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
