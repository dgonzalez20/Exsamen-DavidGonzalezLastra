<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deportista;

class DeportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Declaro variable deportistas= Deportistas:all obtngo datos del formulario
        En base a la vista index en la variable */
        $post = Post::all();

        return view("post.index")->with("post", $post);

    }

    /**
     * Show the form for creating a new resource.
     *<td>{{articulo}} </td>
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*Pido la vista create para crear nuevos deportistas */
        return view("post..create"); //Viws.deportista.create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     * Equivalente a historial de datos,
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Método que registra todos los datos, generando nuevo objeto deportistas, en base al modelo
     * Request --> get--> id formularip
     *
     */
    public function store(Request $request)
     {
       Post::create($request->all());
        return redirect("post");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     * Metodo para editar en este caso deportistas, filtramos por $id
     * Atributo del formulario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Declaración de variable deportista que llama al modelo
        $post=Post::find($id);
        return view('post.edit',compact("post")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Metódo que actualiza registros estos van filtrados por id
     * Request, método Get metodo del formulario
     */
    public function update(Request $request,Post $post)

    {
        $post->update($request->all());
        return redirect('post');

        
        // $deportista=Deportista::find($id);

        // $deportista->nombre=$request->get("nombre");
        // $deportista->apellido=$request->get("apellido");
        // $deportista->direccion=$request->get("direccion");
        // $deportista->temporadas_value=$request->get("temporadas_value");
        // $deportista->coste_licencia=$request->get("coste_licencia");

        // $deportista->update(); 

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //filtro por el id del post 

        $post_model=Post::find($id);

        // En base al identificadoor, usa el metódo delete 
        $post_model->delete(); 
        return redirect("/post");
        
    }
}
