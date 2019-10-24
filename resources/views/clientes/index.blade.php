@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Clientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <b>Usuário: {{ $solicitacoes->first()->tipo }}</b><br>
                    Você está logado! --}}
                        <a href="{{ route('clientes.create') }}">Novo Cliente</a>
                    <table style="width:100%">
                            <hr>
                            <tr>
                                <th>Nome</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Ações</th>
                            </tr>
                           @foreach ($clientes as $c)
                           <tr>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c['rg'] }}</td>
                                <td>{{ $c['cpf'] }}</td>
                                <td><a href="{{ route('clientes.show', $c->id) }}">Ver</a> <a href="{{ route('clientes.edit', $c->id) }}">Editar</a> <a href="{{ route('clientes.destroy', $c->id) }}">Apagar</a></td>
                            </tr>
                           @endforeach
                    </table>
                    <hr>
                    {{-- <table style="width:100%">
                            <hr>
                            <tr>
                                <th>Solicitação</th>
                                <th>Tipo</th>
                                <th>Usuário</th>
                            </tr>
                        @forelse ($solicitacoes as $s)
                            <tr>
                                <td>{{ $s->descricao }}</td>
                                <td>{{ $s->tipo }}</td>
                                <td>{{ $s->tipo }}</td>
                            </tr>
                        @empty
                            <p>Nenhum cliente cadastrado!</p>
                        @endforelse
                            
                    </table>
                    <hr> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
