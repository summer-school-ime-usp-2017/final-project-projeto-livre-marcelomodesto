@extends('layout')

@section('title', 'Cadastro de Participante')

@section('page-header-content', 'Cadastro de Evento')

@section('content')

    <div class="col-md-6">

      @if(count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $message)
              <li>{{ $message }}</li>
            @endforeach
          </ul>
        </div>
      @endif


      <form action="/participantes/store" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome"  />
        </div>

        <div class="form-group">
          <label for="rg">RG</label>
          <input type="text" class="form-control" name="rg"  />
        </div>

        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" name="cpf"  />
        </div>

        <div class="form-group">
          <label for="url">Sexo</label>
          <input type="text" class="form-control" name="sexo"  />
        </div>

        <div class="form-group">
          <label for="perfil">Perfil</label>
          <input type="text" class="form-control" name="perfil"  />
        </div>


        <div class="form-group">
          <label for="data_nascimento">Data de Nascimento</label>
          <input type="text" class="form-control" name="data_nascimento" />
        </div>


        <button class="btn btn-primary">Salvar</button>
      </form>

    </div>
  </div>

@endsection
