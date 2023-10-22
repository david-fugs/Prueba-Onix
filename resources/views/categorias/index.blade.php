@extends('layout.layout')
@section('contenido')
    <br><br>
    <h1 class="d-flex justify-content-center">Libreria Alejandria</h1>
    <hr>
    <div class="d-md-flex justify-content-md-end">
        <label for="">
            <h4></h4>
        </label>
        <form action="{{ route('categorias.index') }}" method="GET">
            <div class="btn-group">
                <label for="" style="font-size: 25px">Busqueda</label>
                <input type="text" name="busqueda" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-primary">
            </div>

        </form>
    </div>

    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            Crear un nuevo libro
        </button>
    </div>
    <br><br>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear un nuevo libro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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





                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex " style="max-width: 100% ; border-radius: 50px">
        <div class="row">


            @foreach ($categorias as $categoria)
                <div class="card p-3 col-4 ">
                    <div class="card-body p-3 ">
                        <h3 class="card-title"> {{ $categoria->nombre }}</h3>
                        <img src="{{ $categoria->url }}" class="img-fluid" alt="imagen_libros" width="300"
                            height="200">
                        <h6 class="card-text">Autor: {{ $categoria->autor }}</h6>
                        <h6 class="card-text">Año de publicacion: {{ $categoria->año }}</h6>
                        <h6 class="card-text">Genero: {{ $categoria->genero }}</h6>
                        <div class="btn-group px-3">
                            <a class="btn btn-warning" href="{{ route('categorias.edit', $categoria) }}" >Editar</a>

                            <a type="button" class="btn btn-primary" 
                                href="{{ route('categorias.show', $categoria) }}">
                                Mostrar
                            </a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
    



                        </div>

                    </div>
                </div>
            @endforeach
        </div>



    </div>

    <div class="card p-3 col-4 ">
        <div colspan="4">{{ $categorias->appends(['busqueda' => $busqueda]) }}</div>


    </div>
    <!--  <table>
                    <tbody>
                        <tr>
                            <td colspan="4">{{ $categorias->appends(['busqueda' => $busqueda]) }}</td>
                        </tr>

                    </tbody>
                </table> -->
@endsection
