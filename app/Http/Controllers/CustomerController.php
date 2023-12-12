<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create() {
        return view('customer.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $customer = new Customer($validatedData);
        $customer->save();

        return redirect()->route('customer.index')->with('info', 'Customer created successfully');
    }

    public function edit(Customer $customer) {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $customer->update($validatedData);

        return redirect()->route('customer.index')->with('info', 'Customer updated successfully');
    }

    public function destroy(Customer $customer) {
        $customer->delete();

        return redirect()->route('customer.index')->with('info', 'Customer deleted successfully');
    }
}
