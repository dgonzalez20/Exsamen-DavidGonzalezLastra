<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class post_table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id(); 
            $table->timestamps(); 
            $table->string('id_usuario'); 
            $table->string('titulopublicacion');
            $table->boolean('caducable'); 
            $table->string('extracto_publicacion')
            $table->boolean('comentable'); 
            $table->string('acceso'); 
            $table->string('privado'); 
            $table->string('publico'); 
        });
    }}
    