<?php

namespace App\Http\Controllers;

use App\Agenda;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AgendaTelefonicaController extends Controller
{
    public function index()
    {
      $agendas = Agenda::get();

      return view('agendas.index', compact('agendas'));
    }

    public function create() 
    {
      $agendas = Agenda::get();

      return view('agendas.create', compact('agendas'));
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'nome' => 'required|min:3|max:255',
            'email' => 'required|unique:agendas_telefonicas|min:3',
            'data_nascimento' => 'required',
            'cpf' => 'required|max:9',
            'dd' => 'required|max:2',
            'celular' => 'required',
        ]);

        $agenda = new Agenda();
        $agenda->nome = $request->input('nome');
        $agenda->email = $request->input('email');
        $agenda->data_nascimento = $request->input('data_nascimento');
        $agenda->cpf = $request->input('cpf');
        $agenda->ddd = $request->input('ddd');
        $agenda->celular = $request->input('celular');

        if($agenda->save()){
          return redirect('agendas\create')->with('success', 'Agenda Cadastrada com sucesso!');
        }
    }

    public function edit($id) 
    {
      $agenda = Agenda::find($id);
      return redirect('agendas\edit', compact('agenda','id'));
    }

    public function update(Request $request, $id) 
    {
      $agenda = Agenda::find($id);
      
      $this->validate($request, [
          'nome' => 'required|min:3',
          'email' => 'required|min:3|unique:agendas_telefonicas,email,{$id},id',
          'data_nascimento' => 'required',
          'ddd' => 'required|max:2',
          'cpf' => 'required|max:11',
          'celular' => 'required',
      ]);

      $agenda->nome = $request->get('nome');
      $agenda->email = $request->get('email');
      $agenda->data_nascimento = $request->get('data_nascimento');
      $agenda->cpf = $request->get('cpf');
      $agenda->celular = $request->get('celular');
  
      dd($agenda);
  
      if($agenda->save()){
          return redirect('agendas\ndex')->with('success', 'Agenda Atualizada com sucesso!');
      };
    }
  
    public function destroy($id) 
    {
      $agenda = Agenda::find($id);
      $agenda->delete();
  
      return redirect()->back()->with('success', 'Agenda deletada com sucesso!');
    }
}
