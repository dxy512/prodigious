<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = ['name','cpf','nasc','email','descricao','arquivo'];
}