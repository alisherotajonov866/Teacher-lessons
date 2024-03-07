<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="fs-4 font-bold">{{ $lesson->theme }}</p>
                    @if($lesson->file)
                        <div class="mt-5">
                            <p>{{ __("messages.lesson_file") }}</p>
                            <a href="{{ asset('uploads/files/'.$lesson->file) }}" download>{{ $lesson->file }}</a>
{{--                            <iframe src="{{ asset('uploads/files/'.$lesson->file) }}" frameborder="0" width="100%" height="1000px"></iframe>--}}
                        </div>
                    @endif
                    @if($lesson->video)
                        <div class="mt-5">
                            <p>{{ __("messages.lesson_video") }}</p>
                            <video src="{{ asset('uploads/videos/'.$lesson->video) }}" controls></video>
                        </div>
                    @endif
                    @if($lesson->task)
                        <div class="mt-5">
                            <p>{{ __("messages.lesson_task") }}</p>
                            <a href="{{ asset('uploads/tasks/'.$lesson->task) }}" download>{{ $lesson->task }}</a>
{{--                            <iframe src="{{ asset('uploads/tasks/'.$lesson->task) }}" frameborder="0" width="100%" height="1000px"></iframe>--}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
