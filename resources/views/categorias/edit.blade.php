@extends('layout.layout')
@section('contenido')
<br><br><br>
    <div class="">
        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="">Codigo</label>
                <input type="text" name="codigo" value="{{ $categoria->codigo }}" class="form-control">
            </div>
            <div>
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control">

            </div>

            <div>
                <label for="">Autor del libro</label>
                <input type="text" name="autor" value="{{ $categoria->autor }}" class="form-control">

            </div>
            <div>
                <label for="">Año de publicacion</label>
                <input type="text" name="año" value="{{ $categoria->año }}" class="form-control">

            </div>
            <div>
                <label for="">Genero </label><br />


                <select name="genero" class="form-control" required>
                    <option value="Terror"> Terror </option>
                    <option value="Accion"> Accion </option>
                    <option value="Aventura"> Aventura </option>
                    <option value="Comedia"> Comedia </option>

                </select>
                <br>
            </div>
            <div>
                <label for="">URL de la imagen</label>
                <input type="text" name="url" value="{{ $categoria->url }}" class="form-control">

            </div>





            <div>
                <input type="submit" value="Enviar" class="btn btn-success">
                <a  class="btn btn-primary " href="/categorias" >Volver</a>

            </div>



        </form>
    </div>
@endsection
