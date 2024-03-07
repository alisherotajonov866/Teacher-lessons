<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h3 class="font-bold mb-3 mt-3">{{ __("messages.lessons") }}</h3>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-10">{{ __("messages.theme") }}</th>
                            <th class="col-1"></th>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $lesson->theme }}</td>
                                <td>
                                    @if($status == 1)
                                        <div class="d-flex align-items-center justify-content-around">
                                            <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-info">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </div>
                                    @endif
                                    @if($status == 0)
                                        <div class="d-flex align-items-center justify-content-around">
                                            <a class="btn btn-info">
                                                <i class="bi bi-lock"></i>
                                            </a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
