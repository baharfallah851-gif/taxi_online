<?php

namespace App\Http\Controllers;

use App\Models\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    public function index(){
        $makes = Make::all();
        return view('make.index', compact('makes'));
    }

    public function add()
    {
        return view('make.add');
    }

    public function save(Request $request)
    {
        Make::create([
            'title' => $request->get('title'),
        ]);
        return redirect(route('make.index'));
    }

    public function show(Make $make)
    {
        return view('make.edit', compact('make'));
    }

    public function update(Request $request, Make $make)
    {
        $make->title = $request->get('title');
        $make->update();

        return redirect(route('make.index'));
    }

    public function delete(Make $make)
    {
        $make->delete();
        return redirect(route('make.index'));
    }
}
