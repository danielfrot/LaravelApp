@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editando Cliente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <b>Usuário: {{ $solicitacoes->first()->tipo }}</b><br>
                    Você está logado! --}}

                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                        @csrf
                        <label for="nome">Nome: </label><input type="text" name="nome" value="{{ $cliente->nome }}"><br>
                        <label for="rg">rg: </label><input type="text" name="rg" value="{{ $cliente->rg }}"><br>
                        <label for="cpf">cpf: </label><input type="text" name="cpf" value="{{ $cliente->cpf }}"><br>
                        <label for="profissao">profissao: </label><input type="text" name="profissao" value="{{ $cliente->profissao }}"><br>
                        <label for="estado_civil">estado_civil: </label><input type="text" name="estado_civil" value="{{ $cliente->estado_civil }}"><br>
                        <label for="longradouro">longradouro: </label><input type="text" name="longradouro" value="{{ $cliente->longradouro }}"><br>
                        <label for="numero">numero: </label><input type="text" name="numero" value="{{ $cliente->numero }}"><br>
                        <label for="bairro">bairro: </label><input type="text" name="bairro" value="{{ $cliente->bairro }}"><br>
                        <label for="cidade">cidade: </label><input type="text" name="cidade" value="{{ $cliente->cidade }}"><br>
                        <label for="uf">uf: </label><input type="text" name="uf" value="{{ $cliente->uf }}"><br>
                        <label for="nacionalidade">nacionalidade: </label><input type="text" name="nacionalidade" value="{{ $cliente->nacionalidade }}"><br>
                        <label for="telefone">telefone: </label><input type="text" name="telefone" value="{{ $cliente->telefone }}"><br>

                        <input type="submit" value="Salvar"><button type="cancel">Cancelar</button>
                    </form>
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
