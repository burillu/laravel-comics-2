<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;


//use Illuminate\View\View;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index(Request $request)
    {
        if (!empty($request->query("genre"))) {
            //con una select che fa il filtro della ricerca
            $search = $request->query('genre');
            //dd($search);
            $comics = Comic::where('type', 'LIKE', $search . '%')->get();
        } else {
            $comics = Comic::all();
        }
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
    public function store(StoreComicRequest $request)
    {
        //dd($request->all());
        //recupero i dati validati dalla request
        $form_data = $request->validated();
        //creo un nuovo comic col metodo astratto create, passando come parametri $form_data
        $new_comic = Comic::create($form_data);
        // reindirizzo alla pagina show per mostrare il comic appena creato
        return to_route("comics.show", $new_comic->id);
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //all'interno bisogna prendere i valori dal form 

        $form_data = $request->validated();

        //inserisco i dati modificati automaticamente col metodo fill
        $comic->fill($form_data);
        //aggiornare i parametri dell oggetto comic
        $comic->update();
        return to_route("comics.show", $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il fumetto $comic->title è stato cancellato");
    }
    /**
     * Summary of validation: creo una mia funzione per la validazione, dove imposterò i messaggi di errore personalizzati
     */
    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required | min:3',
            'price' => 'required | max:20',
            'sale_date' => 'required',
            'series' => 'required | max:100',
            'type' => 'required',
        ], [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere minimo :min caratteri',
            'price.required' => '',
        ])->validate();
        return $validator;
    }
}
