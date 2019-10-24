<?php

namespace App\Models\Publico;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    protected $table = 'estados';
    protected $fillable = ['id','nome', 'sigla'];

}
