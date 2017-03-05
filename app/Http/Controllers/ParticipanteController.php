<?php

#namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Participante;
use Illuminate\Http\Request;
use Session;

class ParticipanteController extends Controller
{

    public function index(Request $request)
    {
      $participantes = Participante::all();
      return view('participante.index', compact('participantes'));
    }

    public function create()
    {
        return view('participante.create');
    }


    public function store(Request $request)
    {
        $requestData = $request->all();
        Participante::create($requestData);
        Session::flash('flash_message', 'Participante added!');
        return redirect('/participantes');
    }


    public function show($id)
    {
        $participante = Participante::findOrFail($id);
        return view('participante.show', compact('participante'));
    }


    public function edit($id)
    {
        $participante = Participante::findOrFail($id);
        return view('participante.edit', compact('participante'));
    }


    public function update($id, Request $request)
    {

        $requestData = $request->all();
        $participante = Participante::findOrFail($id);
        $participante->update($requestData);
        Session::flash('flash_message', 'Participante updated!');
        return redirect('/participantes');
    }


    public function destroy($id)
    {
        Participante::destroy($id);
        Session::flash('flash_message', 'Participante deleted!');
        return redirect('/participantes');
    }
}
