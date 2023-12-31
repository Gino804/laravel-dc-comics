<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'price.required' => 'Il prezzo è obbligatorio',
            'title.unique' => "Il fumetto con titolo $request->title esiste già"
        ]);

        $data = $request->all();
        $new_comic = new Comic;
        $new_comic->fill($data);

        $new_comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string'
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'price.required' => 'Il prezzo è obbligatorio',
            'title.unique' => "Il fumetto con titolo $request->title esiste già"
        ]);

        $data = $request->all();

        $comic->update($data);

        return to_route('comics.index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
