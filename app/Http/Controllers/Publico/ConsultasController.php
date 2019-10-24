<?php

namespace App\Http\Controllers\Publico;

use App\Models\Publico\Cidades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use SoapClient,DB;

class ConsultasController extends Controller
{
    public function __construct(Cidades $cidades)
    {
        $this->cidades = $cidades;

    }


    public function getCidades($id)
    {
        try
        {
            return $cidades = Cidades::orderby('nome','asc')->where('fk_estado',$id)->get();
//            return Response::json($modelos);
        }
        catch (\Exception $e)
        {
            return 'Error';
        }
    }
}
