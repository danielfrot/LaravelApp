@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Cliente</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <b>Usuário: {{ $solicitacoes->first()->tipo }}</b><br>
                    Você está logado! --}}

                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf
                        <label for="nome">Nome: </label><input type="text" name="nome"><br>
                        <label for="rg">rg: </label><input type="text" name="rg"><br>
                        <label for="cpf">cpf: </label><input type="text" name="cpf"><br>
                        <label for="profissao">profissao: </label><input type="text" name="profissao"><br>
                        <label for="estado_civil">estado_civil: </label><input type="text" name="estado_civil"><br>
                        <label for="longradouro">longradouro: </label><input type="text" name="longradouro"><br>
                        <label for="numero">numero: </label><input type="text" name="numero"><br>
                        <label for="bairro">bairro: </label><input type="text" name="bairro"><br>

                       

                        <label for="uf">uf: </label><select name="uf" id="">
                            @foreach ($uf as $u)
                                <option value="{{ $u->id }}">{{ $u->nome }}</option>
                            @endforeach
                        </select><br>

                        <label for="cidade">cidade: </label><select name="cidade" id="">
                            @foreach ($cidade as $c)
                                <option value="{{ $c->id }}">{{ $c->nome }}</option>
                            @endforeach     
                        </select><br>

                        {{-- <label for="cidade">cidade: </label><input type="text" name="cidade"><br>
                        <label for="uf">uf: </label><input type="text" name="uf"><br> --}}


                        <label for="nacionalidade">nacionalidade: </label><input type="text" name="nacionalidade"><br>
                        <label for="telefone">telefone: </label><input type="text" name="telefone"><br>

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
