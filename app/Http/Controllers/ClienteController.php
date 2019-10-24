<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Models\Publico\Cidades;
use App\Models\Publico\Estados;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::All();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uf = Estados::all();
        $cidade = Cidades::all();
        //return $id = $uf->first()->id;
        // $cidade = Cidades::orderby('nome','asc')->where('fk_estado',$uf->first()->id)->get();
        return view('clientes.create', compact(['uf', 'cidade']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->rg = $request->input('rg');
        $cliente->cpf = $request->input('cpf');
        $cliente->profissao = $request->input('profissao');
        $cliente->estado_civil = $request->input('estado_civil');
        $cliente->longradouro = $request->input('longradouro');
        $cliente->numero = $request->input('numero');
        $cliente->bairro = $request->input('bairro');
        $cliente->cidade = $request->input('cidade');
        $cliente->uf = $request->input('uf');
        $cliente->nacionalidade = $request->input('nacionalidade');
        $cliente->telefone = $request->input('telefone');
        $cliente->save();
        //$dados = $request->all();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)){
            return view('clientes.edit', compact('cliente'));
        }
        return redirect()->route('clientes.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)){
            $cliente->nome = $request->input('nome');
            $cliente->rg = $request->input('rg');
            $cliente->cpf = $request->input('cpf');
            $cliente->profissao = $request->input('profissao');
            $cliente->estado_civil = $request->input('estado_civil');
            $cliente->longradouro = $request->input('longradouro');
            $cliente->numero = $request->input('numero');
            $cliente->bairro = $request->input('bairro');
            $cliente->cidade = $request->input('cidade');
            $cliente->uf = $request->input('uf');
            $cliente->nacionalidade = $request->input('nacionalidade');
            $cliente->telefone = $request->input('telefone');
            $cliente->save();
        }
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        if (isset($cliente)){
            $cliente->delete();
        }
        return redirect()->route('clientes.index');
    }
}
