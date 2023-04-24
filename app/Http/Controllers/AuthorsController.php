<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create($request->all());
        return redirect()->route('authors.index')->with(['message' => 'Conference added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $conf = Author::all();
        return view('welcome', ['conf' => $conf]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAuthorRequest $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('authors.index')->with(['message' => 'Conference updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index')->with(['message' => 'Conference deleted successfully']);
    }
}
