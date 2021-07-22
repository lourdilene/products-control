<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nome','preco','categoria_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}