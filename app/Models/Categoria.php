<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Categoria extends Model
{
    protected $fillable = ['titulo'];
    public $timestamps = false;

    public function Produtos(){
        return $this->hasMany(Produto::class);
    }
}