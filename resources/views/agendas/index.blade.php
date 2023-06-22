@extends('layouts.app')
@section('title', 'Lista de Agenda Telefônica')
@section('content')
    <li > <a class="nav-link" href="{{ url('agendas\create') }}">Novo Produto</a></li>
    <h1 class="text-3xl font-bold underline">
       listagem das Agendas Telefônicas
    </h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="row">
        <table class="md:border-collapse">
            <thead>
                <tr>
                    <th class="border border-slate-300">Nome</th>
                    <th class="border border-slate-300">Email</th>
                    <th class="border border-slate-300">Data de Nascimento</th>
                    <th class="border border-slate-300">Cpf</th>
                    <th class="border border-slate-300">DDD</th>
                    <th class="border border-slate-300">Celular</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <div class="col-md-3">
                        @foreach ($agendas as $agenda)
                        <td class="border border-slate-300">{{$agenda->nome}}</td>
                        <td class="border border-slate-300">{{$agenda->email}}</td>
                        <td class="border border-slate-300">{{ date( 'd/m/Y' , strtotime($agenda->data_nascimento))}}</td>
                        <td class="border border-slate-300">{{$agenda->cpf}}</td>
                        <td class="border border-slate-300">{{$agenda->ddd}}</td>
                        <td class="border border-slate-300">{{$agenda->celular}}</td>
                        <td class="border border-slate-300">          
                            <form method="POST" action="{{action('AgendaTelefonicaController@destroy', $agenda->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{URL::to('agendas/'.$agenda->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                <button class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    @endforeach
                    </div>
                </tr>
            </tbody>
        </table>
@endsection