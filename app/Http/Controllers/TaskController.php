<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getAll()
    {
        return Task::all();
    }

    public function getOne($id)
    {
        return Task::find($id);
    }

    public function add(Request $request)
    {
        Task::create([
            'title'=>$request->title,
            'description'=>$request->desc,
            'employee_id'=>$request->employee,
            'project_id'=>$request->project
        ]);
        return response('OK');
    }
}
