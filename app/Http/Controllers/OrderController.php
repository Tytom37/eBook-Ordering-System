<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ebook;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function create() {
        $ebooks = Ebook::all();
        return view('order.create', compact('ebooks'));
    }

    public function store(Request $request) {
        $request->validate([
            'ebook_id' => 'required|exists:ebooks,id',
            'name' => 'required|string',
            'date_ordered' => 'required|date'
        ]);

        Order::create([
            'ebook_id' => $request->ebook_id,
            'name' => $request->name,
            'date_ordered' => $request->date_ordered
        ]);

        return redirect()->route('order.index')->with('info', 'Order created successfully');
    }

    public function edit(Order $order) {
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, Order $order) {
        $validatedData = $request->validate([
            'ebook_id' => 'exists:ebooks,id',
            'name' => 'string',
            'date_ordered' => 'date'
            // 'customer_id' => 'required|exists:customers,id',
        ]);

        $order->update($validatedData);

        return redirect()->route('order.index')->with('info', 'Order updated successfully');
    }

    public function destroy(Order $order) {
        $order->delete();

        return redirect()->route('order.index')->with('info', 'Order deleted successfully');
    }
}
