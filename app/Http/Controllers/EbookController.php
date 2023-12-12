<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index() {
        $ebooks = EBook::all();
        return view('ebook.index', compact('ebooks'));
    }

    public function create() {
        return view('ebook.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $ebook = new EBook($validatedData);
        $ebook->save();

        return redirect()->route('ebook.index')->with('info', 'Book created successfully');
    }

    public function edit(EBook $ebook) {
        return view('ebook.edit', compact('ebook'));
    }

    public function update(Request $request, EBook $ebook) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $ebook->update($validatedData);

        return redirect()->route('ebook.index')->with('info', 'Book updated successfully');
    }

    public function destroy(EBook $ebook) {
        $ebook->delete();

        return redirect()->route('ebook.index')->with('info', 'Book deleted successfully');
    }
}
