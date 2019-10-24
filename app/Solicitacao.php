<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = "solicitacoes";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
