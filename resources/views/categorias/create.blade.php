@extends('layout.layout')
@section('contenido')
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Codigo</label><br />
            <input class="form-control" type="text" name="codigo" required><br />
        </div>
        <div>
            <label for="">Nombre del libro </label><br />
            <input type="text" name="nombre" class="form-control" required> <br />
        </div>

        <div>
            <label for="">Autor del libro </label><br />
            <input type="text" name="autor" class="form-control" required> <br />
        </div>
        <div>
            <label for="">Año de publicacion </label><br />
            <input type="text" name="año" class="form-control" required> <br />
        </div>
        <div>
            <label for="">Genero del libro</label><br />
            <select name="genero" class="form-control" required>
                <option value=""> </option>

                <option value="Terror"> Terror </option>
                <option value="Accion"> Accion </option>
                <option value="Aventura"> Aventura </option>
                <option value="Comedia"> Comedia </option>

            </select>
            <br>
        </div>
        <div>
            <div>
                <label for="">URL de la iamgen del libro</label><br />
                <input type="text" name="url" class="form-control" required> <br />
            </div>




            <div>
                <input type="submit" value="Enviar" class="btn btn-success">

                <a class="btn btn-danger gap-10 ms-5" href="/categorias">Atras</a>
            </div>

        </div>
    </form>
@endsection
