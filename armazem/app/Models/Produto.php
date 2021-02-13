<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

     protected $fillable = [
        'codigo',
        'name',
        'marca',
        'data_de_validade',
    ];

    public function users(){
    	return $this->belongTo(User::class);
    }
}
