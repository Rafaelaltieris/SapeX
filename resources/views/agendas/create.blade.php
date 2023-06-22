@extends('layouts.app')
@section('title', 'Adicionar Agenda Telefônica')
@section('content')
    <h1>Adicionar Agenda Telefônica</h1>
	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <form  method="post" action="{{url('agendas/store')}}">
        @csrf
		<div class="form-group mb-3">
		    <label for="nome">Nome:</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" required>
	 	</div>
	 	<div class="form-group mb-3">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email" required>
	 	</div>
        <div class="form-group mb-3">
		    <label for="data_nascimento">Data de nascimento:</label>
		    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Digite a sua data de nascimento" required>
	 	</div>
        <div class="form-group mb-3">
		    <label for="cpf">CPF:</label>
		    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite a sua data de nascimento" required>
	 	</div>
		 <div class="form-group mb-3">
		    <label for="ddd">DDD</label>
		    <input type="text" class="form-control" id="ddd" name="ddd" maxlength="2" placeholder="Digite o seu DDD " required>
	 	</div>
         <div class="form-group mb-3">
		    <label for="celular">Celular</label>
		    <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o número do seu celular" required>
	 	</div>
	 	<button type="submit" class="btn btn-primary">Cadastrar Agenda Telefônica</button>
	</form>
@endsection