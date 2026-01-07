<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Models\Modele;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $models = Modele::all();
        return view('model.index', compact( 'models'));
    }

    public function add()
    {
        $makes = Make::all();
        return view('model.add', compact( 'makes'));
    }

    public function save(Request $request)
    {
        Modele::create([
            'title' => $request->get('title'),
            'make_id' => $request->get('make_id'),
        ]);
        return redirect(route('model.index'));
    }

    public function show(Modele $model)
    {
        $makes = Make::all();
        return view('model.edit', compact('model', 'model', 'makes'));
    }

    public function update(Request $request, Modele $model)
    {
            $model->title = $request->get('title');
            $model->make_id = $request->get('make_id');
            $model->update();

        return redirect(route('model.index'));
    }

    public function delete(Modele $model)
    {
        $model->delete();
        return redirect(route('model.index'));
    }
}
