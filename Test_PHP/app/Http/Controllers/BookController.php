<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $books = Book::where('title', 'LIKE', "%$searchTerm%")->get();

        return view('books.search', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title' => 'required',
            'authorid' => 'required|numeric',
            'ISBN' => 'required',
            'pub_year' => 'required|numeric',
            'available' => 'required|numeric',
        ]);

        // Create new book
        Book::create($request->all());

        // Redirect to books index page with success message
        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
