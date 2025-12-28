<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index',compact('admins'));
    }

    public function add()
    {
        return view('admin.add');
    }

    public function save(Request $request)
    {
        Admin::create([
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ]);
        return redirect(route('admin.index'));
    }
}

