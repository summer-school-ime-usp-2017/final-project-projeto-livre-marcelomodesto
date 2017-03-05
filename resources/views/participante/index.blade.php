@extends('layout')
@section('content')

        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">Participantes</div>
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                  </tr>
              </thead>
              <tfoot>
                  <a href='/participantes/create'>Adicionar</a>
              </tfoot>

              <tbody>
              @foreach ($participantes as $participante)
                <tr>
                  <td>
                    <a href="/participantes/view/{{ $participante->id }}">{{$participante->nome}}</a>
                  </td>
                  <td>
                     {{$participante->rg}}
                  </td>
                  <td>
                     {{$participante->cpf}}
                  </td>
                  <td>
                     {{$participante->data_nascimento}}
                  </td>
                  <td>
                     {{$participante->perfil}}
                  </td>
                  <td>
                    <a href="/participantes/edit/{{ $participante->id }}">Editar</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
            </table>
          </div>
@endsection
