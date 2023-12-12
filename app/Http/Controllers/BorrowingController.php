<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Ebook;
use App\Models\Customer;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index() {
        $borrowings = Borrowing::all();
        return view('borrowing.index', compact('borrowings'));
    }

    public function create() {
        $ebooks = Ebook::all();
        $customers = Customer::all();
        return view('borrowing.create', compact('ebooks', 'customers'));
    }

    public function store(Request $request) {
        $request->validate([
            'ebook_id' => 'required|exists:ebooks,id',
            'name' => 'required|string',
            'borrowed_at' => 'required|date',
            'returned_at' => 'nullable|date',
        ]);

        Borrowing::create([
            'ebook_id' => $request->ebook_id,
            'name' => $request->name,
            'borrowed_at' => $request->borrowed_at,
            'returned_at' => $request->returned_at,
        ]);

        return redirect()->route('borrowing.index')->with('info', 'Borrowing created successfully');
    }

    public function edit(Borrowing $borrowing) {
        $ebooks = Ebook::all();
        $customers = Customer::all();
    
        return view('borrowing.edit', compact('borrowing', 'ebooks', 'customers'));
    }

    public function update(Request $request, Borrowing $borrowing) {
        $validatedData = $request->validate([
            'ebook_id' => 'exists:ebooks,id',
            'name' => 'string',
            'borrowed_at' => 'date',
            'returned_at' => 'nullable|date',
        ]);

        $borrowing->update($validatedData);

        return redirect()->route('borrowing.index')->with('info', 'Borrowing updated successfully');
    }

    public function destroy(Borrowing $borrowing) {
        $borrowing->delete();

        return redirect()->route('borrowing.index')->with('info', 'Borrowing deleted successfully');
    }
}
