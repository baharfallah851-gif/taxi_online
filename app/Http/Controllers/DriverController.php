<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use App\Models\Driver;
use App\Models\Province;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('driver.index', compact('drivers'));
    }

    public function add()
    {
        $cities = City::all();
        $provinces = Province::all();
        return view('driver.add', compact('cities', 'provinces'));
    }

    public function save(Request $request)
    {
        Driver::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
            'gender' => $request->get('gender'),
            'birth_date' => $request->get('birth_date'),
            'national_code' => $request->get('national_code'),
            'rating' => $request->get('rating'),
            'total_trips' => $request->get('total_trips'),
            'total_income' => $request->get('total_income'),
            'is_active' => $request->get('is_active', 0),
            'city_id' => $request->get('city_id'),
            'province_id' => $request->get('province_id'),
            'image' => $request->get('image'),
            'license_number' => $request->get('license_number'),
            'license_expired_at' => $request->get('license_expired_at'),
        ]);

        return redirect(route('driver.index'));
    }

    public function show(Driver $driver)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('driver.edit', compact('driver', 'provinces', 'cities'));
    }

    public function update(Request $request, Driver $driver)
    {
        $driver->first_name = $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->phone_number = $request->get('phone_number');
        $driver->email = $request->get('email');
        $driver->username = $request->get('username');
        $driver->password = $request->get('password');
        $driver->gender = $request->get('gender');
        $driver->birth_date = $request->get('birth_date');
        $driver->national_code = $request->get('national_code');
        $driver->rating = $request->get('rating');
        $driver->total_trips = $request->get('total_trips');
        $driver->total_income = $request->get('total_income');
        $driver->is_active = $request->get('is_active', 0);
        $driver->city_id = $request->get('city_id');
        $driver->province_id = $request->get('province_id');
        $driver->license_number = $request->get('license_number');
        $driver->license_expired_at = $request->get('license_expired_at');
        if ($request->file('image')) {                               //images → پوشه‌ای که فایل داخلش ذخیره می‌شه (storage/app/public/images)
            $driver->image = $request->file('image')->store('images', 'public');
        } else {
            $driver->image = $request->old_image;
        }

        $driver->update();



        return redirect(route('driver.index'));
    }

    public function delete(driver $driver)
    {
        $driver->delete();
        return redirect(route('driver.index'));
    }

}
