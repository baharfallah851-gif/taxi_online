<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Make;
use App\Models\ModelCar;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{


    public function index()
    {
        $trips = Trip::all();
        return view('trip.index', compact('trips'));
    }


    public function add()
    {
        $drivers = Driver::all();
        $cars = Car::all();
        $customers = Customer::all();
        return view('trip.add', compact('drivers', 'cars', 'customers'));
    }


    public function save(Request $request)
    {
        Trip::create([
            'customer_id' => $request->get('customer_id'),
            'driver_id' => $request->get('driver_id'),
            'car_id' => $request->get('car_id'),
            'origin' => $request->get('origin'),
            'destination' => $request->get('destination'),
            'price' => $request->get('price'),
            'date' => $request->get('date'),
            'status' => $request->get('status'),
            'start_at' => $request->get('start_at'),
            'end_at' => $request->get('end_at'),
            'payment_method' => $request->get('payment_method'),
        ]);

        return redirect(route('trip.index'));
    }


    public function modal(Customer $customer)
    {
        return view('trip.modal', compact('customer'));
    }


    public function show(Trip $trip)
    {
        $drivers = Driver::all();
        $cars = Car::all();
        $customers = Customer::all();
        return view('trip.edit', compact('trip', 'drivers', 'cars', 'customers'));
    }


    public function update(Request $request, Trip $trip)
    {
        $trip->customer_id = $request->get('customer_id');
        $trip->driver_id = $request->get('driver_id');
        $trip->car_id = $request->get('car_id');
        $trip->origin = $request->get('origin');
        $trip->destination = $request->get('destination');
        $trip->price = $request->get('price');
        $trip->date = $request->get('date');
        $trip->status = $request->get('status');
        $trip->start_at = $request->get('start_at');
        $trip->end_at = $request->get('end_at');
        $trip->payment_method = $request->get('payment_method');
        $trip->update();

        return redirect(route('trip.index'));
    }


    public function delete(Trip $trip)
    {
        $trip->delete();
        return redirect(route('trip.index'));
    }
}
