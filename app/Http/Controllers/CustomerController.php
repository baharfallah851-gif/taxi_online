<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\City;
use App\Models\Customer;
use App\Models\Province;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function add()
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.add', compact('provinces', 'cities'));
    }

    public function save(Request $request)
    {
        $customer = Customer::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'phone_number' => $request->get('phone_number'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'gender' => $request->get('gender'),
            'birth_date' => $request->get('birth_date'),
            'wallet_balance' => $request->get('wallet_balance'),
            'total_trips' => $request->get('total_trips'),
            'city_id' => $request->get('city_id'),
            'province_id' => $request->get('province_id'),
        ]);

        $titles = $request->get('title');
        $addresses = $request->get('address', []);
        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit');

        foreach ($addresses as $index => $address) {                        //ادرس جدید
            if (!empty($address)) {
                Address::create([
                    'customer_id' => $customer->id,                       //کلید خارجی
                    'title' => $titles[$index],
                    'address' => $address,
                    'postal_code' => $postal_codes[$index],
                    'unit' => $units[$index],
                ]);
            }
        }
        return redirect(route('customer.index'));
    }

    public function show(Customer $customer)
    {
        $provinces = Province::all();
        $cities = City::all();
        return view('customer.edit', compact('customer', 'provinces', 'cities'));
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->phone_number = $request->get('phone_number');
        $customer->email = $request->get('email');
        $customer->username = $request->get('username');
        $customer->password = $request->get('password');
        $customer->gender = $request->get('gender');
        $customer->birth_date = $request->get('birth_date');
        $customer->wallet_balance = $request->get('wallet_balance');
        $customer->total_trips = $request->get('total_trips');
        $customer->city_id = $request->get('city_id');
        $customer->province_id = $request->get('province_id');
        $customer->update();

        $postal_codes = $request->get('postal_code');
        $units = $request->get('unit');
        $titles = $request->get('title');
        $addresses = $request->get('address', []);
        $address_ids = $request->get('address_id', []);

        $address_id_in_db = $customer->addresses()->pluck('id')->toArray();
        $deleted_ids = array_diff($address_id_in_db, $address_ids);            // (ادرس توی دیتابیس رو بااین ادرس مقابسه میکنه) حذف ادرس
        foreach ($deleted_ids as $delete_id) {
            $address = Address::find($delete_id);
            $address->delete();
        }

        foreach ($addresses as $index => $address) {                                                                      //تغییر ادرس
            if (!empty($address) && !empty($address_ids[$index])) {
                $old_address = Address::find($address_ids[$index]);
                $old_address->title = $titles[$index];
                $old_address->address = $address;
                $old_address->postal_code = $postal_codes[$index];
                $old_address->unit = $units[$index];
            } else {
                if (!empty($address)) {                                                                                     //ادرس جدید
                    Address::create([
                        'customer_id' => $customer->id,
                        'title' => $titles[$index],
                        'address' => $address,
                        'postal_code' => $postal_codes[$index],
                        'unit' => $units[$index],
                    ]);
                }
            }
        }

        return redirect(route('customer.index'));
    }


    public function delete(customer $customer)
    {
        $customer->delete();
        return redirect(route('customer.index'));
    }
}
