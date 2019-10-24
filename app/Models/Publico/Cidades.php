<?php

namespace App\Models\Publico;

use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{

     protected $table = 'cidades';
    protected $fillable = ['id','nome', 'codigo_ibge', 'fk_estado'];


    public function Estado()
    {
        return $this->belongsTo('App\Models\Publico\Estados', 'fk_estado');
    }



    public static function nome($id)
    {
        $result = Cidades::where('id', $id)->first();
        if($result) {
            return $result->nome;
        }else{
            return '-----' ;
        }
    }

    public static function nomeComSigla($id)
    {
        $result = Cidades::where('id', $id)->first();
        if($result) {
            return $result->nome .'/'.$result->Estado->sigla;
        }else{
            return '-----' ;
        }
    }


}
