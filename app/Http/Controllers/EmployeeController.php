<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getAll()
    {
        return Employee::all();
    }

    public function getOne($id)
    {
        $employee = Employee::find($id);
        return $employee->tasks()->get();
    }

    public function add(Request $request)
    {
        Employee::create([
            "name" => $request->name,
            "role_id" => $request->role_id
        ]);
        return response('');
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response('OK');
    }
}
