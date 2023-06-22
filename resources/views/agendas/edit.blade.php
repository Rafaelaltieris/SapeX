@extends('layouts.app')
@section('title', 'Lista de Agenda Telefônica')
@section('content')
    <h1>Agenda Telefônica</h1>
    <h1 class="mb-3">Editar uma  agenda - {{$agenda->nome}}</h1>
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
           @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
           @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{action('AgendaTelefonicaController@update', $id)}}">
        @csrf
		<div class="form-group mb-3">
		    <label for="nome">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" value="{{$agenda->nome}}" placeholder="Digite o Nome da Agenda" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="email">Email</label>
		    <input type="text" class="form-control" id="email" name="email" value="{{$agenda->email}}" placeholder="Digite o Email da Agenda" required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="data_nascimento">Data de Nascimento</label>
		    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="{{$agenda->data_nascimento}}" placeholder="Digite sua Data de Nascimento" required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="cpf">CPF</label>
		    <input type="text" class="form-control" id="cpf" name="cpf" maxlength="11" value="{{$agenda->cpf}}" placeholder="Digite o CPF da Agenda" required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="nome">Nome</label>
		    <input type="text" class="form-control" id="nome" name="nome" value="{{$agenda->nome}}" placeholder="Digite o Nome da Agenda" required>
	 	</div>
        <div class="form-group mb-3">
		    <label for="ddd">DDD</label>
		    <input type="text" class="form-control" id="ddd" maxlength="2" name="ddd" value="{{$agenda->ddd}}" placeholder="Digite o seu DDD" required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="celular">Celular</label>
		    <input type="text" class="form-control" id="celular" maxlength="9" name="celular" value="{{$agenda->celular}}" placeholder="Digite o seu Celular" required>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Atualizar Agenda Telefônica</button>
	</form>
@endsection