<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=[
    
        'titulopublicacion', 
        'extracto_publicacion', 
        'control_acceso'.
        'accion'

    ];

    protected $table = 'post;
