@extends("Plantilla.plantillabase");

@section("contenido")

<form action="{{ url("post") }}" method="POST">
@csrf 

<div class="mb-3">
        <label for="titulopublicacion" class="form-label">Titulo de la publicación </label>
        <input id="titulopublicacion" name="titulopublicacion" type="text" class="form-control" tabindex="1" required
            placeholder="Por favor escriba el titulo de la publicación"
            value="{{ old(titulopublicacion, $noticias->fechapublicacion)}}">
        
    </div>
    <div class="mb-3">
        <label for="extracto_publicacion" class="form-label">Extracto de la publicación</label>
        <input type="date" name="extracto_publicacion" id="extracto_publicacion"
        placeholder="En que fecha a realizado la publicación?"
        value="{{ old('extracto_publicacion'), $noticias->extractopublicacion }}">
    </div>
    <div class="mb-3">
        <label for="accion" class="form-label" id="accion"> Control de acceso</label>
        <input type="checkbox" id="accion"> caducable 
        <input type="checkbox" id="accion">comentable
    </div>

<div class="mb-3">
    <select name="control_acceso" id="control_acceso"></select>
        <option value="Acceso"> Acceso</option>
        <option value="Publico">Publico</option>
        <option value="Private">Private</option>

</div>

</form>