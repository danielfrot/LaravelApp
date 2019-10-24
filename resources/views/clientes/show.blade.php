@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalhes do Cliente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <b>Usuário: {{ $solicitacoes->first()->tipo }}</b><br>
                    Você está logado! --}}
                        <a href="{{ route('clientes.create') }}">Novo Cliente</a>
                        <hr>
                        <ul>
                            <li>Nome: {{ $cliente['nome'] }}</li>
                            <li>RG: {{ $cliente['rg'] }}</li>
                            <li>CPF: {{ $cliente['cpf'] }}</li>
                            <li>Profissão: {{ $cliente['profissao'] }}</li>
                            <li>Estado Civil: {{ $cliente['estado_civil'] }}</li>
                            <li>Endereço: {{ $cliente['longradouro'] }}, {{ $cliente['numero'] }}, {{ $cliente['bairro'] }}</li>
                            <li>Cidade: {{ $cliente['fk_cidade'] }}</li>
                            <li>Estado: {{ $cliente['fk_estado'] }}</li>
                            <li>Nacionalidade: {{ $cliente['nacionalidade'] }}</li>
                            <li>Telefone: {{ $cliente['telefone'] }}</li>
                            
                        </ul>

                    {{-- <table style="width:100%">
                            <hr>
                            <tr>
                                <th>Nome</th>
                                <th>RG</th>
                                <th>CPF</th>
                            </tr>
                           
                           <tr>
                                <td>{{ $cliente['nome'] }}</td>
                                <td>{{ $cliente['rg'] }}</td>
                                <td>{{ $cliente['cpf'] }}</td>
                            </tr>
                           
                    </table> --}}
                    <a href="{{ route('clientes.index') }}">Voltar</a>
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
