<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index(){
        return view('admin.role.index');
    }
    public function store(){
        dd(request('name'));
    }
}
