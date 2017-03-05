@extends('layout')

@section('title', 'Cadastro de Evento')

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


      <form action="/eventos/store" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" name="titulo" id="titulo" />
        </div>

        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" name="descricao"  id="descricao" />
        </div>

        <div class="form-group">
          <label for="website">Website</label>
          <input type="text" class="form-control" name="website" id="website" />
        </div>

        <div class="form-group">
          <label for="local">Local</label>
          <input type="text" class="form-control" name="local" id="local" />
        </div>

        <div class="form-group">
          <label for="data_inicio">Data de Início</label>
          <input type="text" class="form-control" name="data_inicio" id="data_inicio" />
        </div>

        <div class="form-group">
          <label for="data_termino">Data de Término</label>
          <input type="text" class="form-control" name="data_termino" id="data_termino" />
        </div>

        <div class="form-group">
          <label for="data_inicio">Data de Início Inscrições</label>
          <input type="text" class="form-control" name="data_inicio_inscricao" id="data_inicio_inscricao" />
        </div>

        <div class="form-group">
          <label for="data_termino">Data de Término Inscrições</label>
          <input type="text" class="form-control" name="data_termino_inscricao" id="data_termino_inscricao" />
        </div>



        <div class="form-group">
          <label for="data_inicio_submissao">Data de Início da Submissão de Resumos</label>
          <input type="text" class="form-control" name="data_inicio_submissao" id="data_inicio_submissao" />
        </div>

        <div class="form-group">
          <label for="data_termino_submissao">Data de Término da Submissão de Resumos</label>
          <input type="text" class="form-control" name="data_termino_submissao" id="data_termino_submissao" />
        </div>

        <div class="form-group">
          <label for="taxa_professor">Taxa para professores</label>
          <input type="text" class="form-control" name="taxa_professor" id="taxa_professor" />
        </div>

        <div class="form-group">
          <label for="taxa_estudante">Taxa para estudantes</label>
          <input type="text" class="form-control" name="taxa_estudante" id="taxa_estudante" />
        </div>

        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>

@endsection
