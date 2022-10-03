<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //TODO Versão 9 do laravel solicita criar;

class SeriesController extends Controller
{
    //TODO Para ter uma function com retorno, colocar no final : int
    public function index()
    {
        //TODO para rerotnar um Json com o Laravel colocar o return [ 'Punisher', 'Lost','Perdidos no Espaço', 'The Witcher'];
        //TODO para pegar um retorno da url ?id=100 fazer: $request->get('id');
        //TODO Redirect:: return redirect('https://www.galaxyz.com.br');
        //TODO Redirect return response('', 302, ['Location' => 'https://www.galaxyz.com.br']);

        $series = DB::select('SELECT name FROM series;');

        // TODO var_dump do Laravel dd($series);
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nameSerie = $request->input('name');

        if(DB::insert('INSERT INTO series (name) values (?)', [$nameSerie]))
        {
            return "OK";
        } else {
            return "ERROR";
        }
    }
}
