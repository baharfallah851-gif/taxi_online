<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function add(Customer $customer)
    {
        return view('address.add', compact('customer'));
    }

    public function index(Customer $customer)
    {
        $addresses = $customer->addresses;
        return view('address.index', compact('addresses', 'customer'));
    }


    public function save(Request $request, Customer $customer)
    {
        Address::create([
            'customer_id' => $customer->id,
            'address' => $request->get('address'),
            'postal_code' => $request->get('postal_code'),
            'unit' => $request->get('unit'),
            'title' => $request->get('title'),
        ]);
        return [
            'success' => true,
        ];
    }

    public function show(Address $address)
    {
        return view('address.edit', compact('address'));
    }

    public function update(Request $request, Address $address)
    {
        $address->address = $request->get('address');
        $address->postal_code = $request->get('postal_code');
        $address->unit = $request->get('unit');
        $address->title = $request->get('title');
        $address->update();

        return [
            'success' => true,
        ];
    }

    public function delete(Address $address)
    {
        $address->delete();
        return [
            'success' => true,
        ];
    }
}
