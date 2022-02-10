@extends("Plantilla.plantillabase");

@section("contenido")
<a href="deportistas/create" class="btn btn-primary">Crea una Publicación </a>

 <table class="table table-dark table-striped mt-4 ">
     <thead>
     <tr>
         <!--Elementos de la tabla principal -->
         <th scope="col">Titulo de la publicación </th>
         <th scope="col">Comprobante extracto </th>
         <th scope="col">Contenido de la publicación </th>
         <th scope="col">Acesso</th>
         <th scope="col">Acciones  </th>
     </tr>
     </thead>
     <tbody>
     <!--For que accede a todos los atributos del formulario Create.bade.php
     -->
      @foreach ($noticias as $noticia)
     <tr>
      <td>{{$noticia->fechapublicacion  }}</td>
      <td>{{$noticia->extracto}}</td>
      <td>{{$noticia->contenidopublicacion }}</td>
      <td>{{$noticia->acceso }} </td>
      <td>{{ $noticia->comentable }}</td>
      <td>{{ $noticia->caducable }}</td>
      <td>{{$noticia->acceso}}</td>
      <td>{{ $noticia->acceso }}</td>
      <td>{{ $noticia->privado }}</td>
      <td>{{ $noticia->publico }}</td>
         <td>
             <a href="{{  url("noticias/".$noticias->id."/edit")}}"  class=" btn btn-info">Editar Post </a>
        
          
         </td>
         <td>
        <form action="{{"/post/".$post->id}}" method="POST">
                @csrf
                @method("DELETE")
            <button type="submit" class="btn-btn-danger">Eliminar Post </button>
            </form>
        </td>
     </tr>
     @endforeach
     </tbody>
 </table>
 @endsection
