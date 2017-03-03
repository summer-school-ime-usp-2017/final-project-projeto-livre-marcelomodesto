<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        return view('evento.index', compact('eventos'));
    }

/*
    public function show($index) {
      $evento = $this->eventos[$index];
      return view('cursos.show', compact('curso'));
    }
    */

    public function show(Evento $evento) {
      //$evento = $this->eventos[$index];
      return view('evento.show', compact('evento'));
    }

    public function create()
    {

      return view('evento.create');
    }


    public function save()
    {

      $this->validate(request(), [
        'titulo' => 'required|min:2|max:255',
        'website' => 'required'
      ]);

      Evento::create(request()->all());
      return redirect('/eventos');
    }

    public function edit(Evento $evento)
    {
        return view('evento.edit', compact('evento'));
    }


    public function update($id)
    {
      $this->validate(request(), [
        'titulo' => 'required|min:2|max:255',
        'website' => 'required'
      ]);


      $evento = Evento::find($id);
      $evento -> fill (request()->all());
      $evento->save();
      return redirect ('/eventos');

    }

}
