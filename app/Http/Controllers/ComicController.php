<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);

        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $this->validation($request->all());

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }


    private function validation($data) {

        $validator = Validator::make($data, [
            'title' =>'required|max:255',
            'description' =>'required|max:2000',
            'thumb' =>'required|max:1000',
            'price' =>'required|max:10',
            'series' =>'required|max:50',
            'sale_date' =>'required',
            'type' =>'required|max:50',
            'artists' =>'required|max:1000',
            'writers' =>'required|max:1000'
        ], [
            'title.required' => 'Il campo ":attribute" deve essere riempito.',
            'title.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'description.required' => 'Il campo ":attribute" deve essere riempito.',
            'description.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'thumb.required' => 'Il campo ":attribute" deve essere riempito.',
            'thumb.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'price.required' => 'Il campo ":attribute" deve essere riempito.',
            'price.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'series.required' => 'Il campo ":attribute" deve essere riempito.',
            'series.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'sale_date.required' => 'Il campo ":attribute" deve essere riempito.',
            'type.required' => 'Il campo ":attribute" deve essere riempito.',
            'type.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'artists.required' => 'Il campo ":attribute" deve essere riempito.',
            'artists.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
            'writers.required' => 'Il campo ":attribute" deve essere riempito.',
            'writers.max' => 'Il campo ":attribute" può avere una lunghezza massima di :max caratteri.',
        ])->validate();
    }
}
