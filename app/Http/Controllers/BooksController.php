<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books =Book::all();
        return view("index",compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"string|required",
            "auther"=>"string|required|max:40",
            "type"=>"string|required|max:40",
            "description"=>"string|required|min:3"
        ]);

        Book::create($request->all());
        return redirect()->route("books.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("show",compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("edit",compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            "title"=>"string|required",
            "auther"=>"string|required|max:40",
            "type"=>"string|required|max:40",
            "description"=>"string|required|min:3"
        ]);

        $book->update($request->all());
        return redirect()->route("books.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route("books.index");
    }
}
