<?php

namespace App\Http\Controllers;

use App\Http\Service\UploadFile;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use RealRashid\SweetAlert\Facades\Alert;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:teacher')->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $lessons = Lesson::where('course_id', $id)->get();
        return view('teachers.lessons.index', compact('lessons', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        return view('teachers.lessons.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadFile = new UploadFile();
        request()->validate([
            'theme' => 'required',
            'file' => 'mimes:pdf',
            'video' => 'mimes:mp4,avi,mov',
            'task' => 'mimes:pdf',
        ]);
        $file = $request->file('file');
        $video = $request->file('video');
        $task = $request->file('task');

        if (!$file) {
            $file_name = "";
        } else {
            $file_name = $uploadFile->uploadFile($file, 'uploads/files');
        }
        if (!$video) {
            $video_name = "";
        } else {
            $video_name = $uploadFile->uploadFile($video, 'uploads/videos');
        }
        if (!$task) {
            $task_name = "";
        } else {
            $task_name = $uploadFile->uploadFile($task, 'uploads/tasks');
        }

        $lesson = new Lesson();
        $lesson->theme = $request->theme;
        $lesson->course_id = $request->course_id;
        $lesson->file = $file_name;
        $lesson->video = $video_name;
        $lesson->task = $task_name;
        $lesson->save();
        Alert::success('Success', __('messages.lesson_created'));
        return redirect()->route('lessons.index', ['id' => $request->course_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Lesson $lesson
     * @return \Illuminate\Http\Response
     */

}
