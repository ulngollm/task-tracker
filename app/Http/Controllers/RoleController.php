<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getAll()
    {
        return Role::all();
    }

    public function getOne($id)
    {
        return Role::find($id);
    }
    public function add(Request $request)
    {
        Role::create([
            'name'=>$request->name
        ]);
        return response()->setStatusCode(400);
    }
}
