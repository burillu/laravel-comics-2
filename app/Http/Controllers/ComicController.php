<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

//use Illuminate\View\View;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        //
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        //tutti i dati possono essere validati lato back end con la funzione:
        // $request->validate([
        //     "title"=>'required | min:5',
        //     'descriprion'=> 'require|max:...',
        //     'price'=> 'require',
        //     'sale_date'=> 'require',
        //     'series'=> 'require',
        // ]);

        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $form_data["title"];
        $new_comic->description = $form_data["description"];
        $new_comic->thumb = $form_data["thumb"];
        $new_comic->price = $form_data["price"];
        $new_comic->sale_date = $form_data["sale_date"];
        $new_comic->series = $form_data["series"];
        $new_comic->type = $form_data["type"];
        $new_comic->save();
        return to_route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        //
        //$comic = Comic::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
        //all'interno bisogna prendere i valori dal form 
        //aggiornare i parametri dell oggetto comic
        $form_data = $request->all();

        $comic->title = $form_data["title"];
        $comic->description = $form_data["description"];
        $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->sale_date = $form_data["sale_date"];
        $comic->series = $form_data["series"];
        $comic->type = $form_data["type"];
        $comic->update();
        return to_route("comics.show", $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // $comic->delete();
        //return to_route('comics.index')->with("Il fumetto $comic->title è stato cancellato");
    }
}
