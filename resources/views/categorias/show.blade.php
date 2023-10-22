@extends('layout.layout')
@section('contenido')
<br><br><br>
<div class="d-flex justify-content-center align-items-center">
    <div>
    <img src="{{ $categoria->url }}" class="img-fluid" alt="imagen_libros"
width="150" height="150"> <br><br>
<h3>Autor: {{ $categoria->autor }}</h3> <br><br>

</div>
<div>
    <h3>Nombre del libro: {{$categoria->nombre}}</h3>
    <h3> Año publicacion: {{ $categoria->año }}</h3>

</div>
<br><br>

</div>
<a  class="btn btn-primary d-flex justify-content-center align-items-center " href="/categorias" >Volver</a>

@endsection