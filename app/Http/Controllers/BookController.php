<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // 1. Pojedyncza wartość
        $title = $request->input('title');

        // 2. Pełna tablica wszystkich przesłanych pól
        $all = $request->all();

        // 3. Podzbiór pól: tylko title i category
        $subset = $request->only(['title', 'category']);

        return redirect('/books')->with('status', 'Formularz został odebrany.');
    }

    public function edit($id)
    {
        $book = [
            'id'          => $id,
            'title'       => 'Limes inferior',
            'year'        => 1982,
            'category'    => 'Sci-Fi / Fantasy',
            'description' => 'Krótki opis fabuły.',
            'is_available' => true,
        ];

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'year'  => 'nullable|integer',
        ]);

        return redirect('/books')->with('status', "Zaktualizowano książkę nr $id.");
    }

    public function destroy($id)
    {
        return redirect('/books')->with('status', "Usunięto książkę nr $id.");
    }
}