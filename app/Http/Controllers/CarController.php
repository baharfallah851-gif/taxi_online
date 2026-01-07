<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Make;
use App\Models\Modele;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

    public function add()
    {
        $drivers = Driver::all();
        $makes = Make::all();
        $models = Modele::all();
        return view('car.add', compact('drivers', 'makes', 'models'));
    }

    public function save(Request $request)
    {
        Car::create([
            'driver_id' => $request->get('driver_id'),
            'make_id' => $request->get('make_id'),
            'model_id' => $request->get('model_id'),
            'manufacture_year' => $request->get('manufacture_year'),
            'color' => $request->get('color'),
            'licence_plate' => $request->get('licence_plate',0),
            'car_type' => $request->get('car_type'),
            'technical_inspection' => $request->get('technical_inspection',0),
        ]);
        return redirect(route('car.index'));
    }


    public function modal(Driver $driver)
    {
        return view('car.modal', compact('driver'));
    }

    public function show(Car $car)
    {
        $drivers = Driver::all();
        $makes = Make::all();
        $models = Modele::all();
        return view('car.edit', compact( 'drivers', 'makes', 'models', 'car'));
    }

    public function update(Request $request, Car $car)
    {
        $car->driver_id = $request->get('driver_id');
        $car->make_id = $request->get('make_id');
        $car->model_id = $request->get('model_id');
        $car->manufacture_year = $request->get('manufacture_year');
        $car->color = $request->get('color');
        $car->licence_plate = $request->get('licence_plate');
        $car->car_type = $request->get('car_type');
        $car->technical_inspection = $request->get('technical_inspection');
        $car->update();

        return redirect(route('car.index'));
    }

    public function delete(Car $car)
    {
        $car->delete();
        return redirect(route('car.index'));
    }
}
