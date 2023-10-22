@extends('layout.layout')
@section('contenido')
<style>
    .inicio{
        background-color: rgba(183, 138, 254, 0.756);
        display: flex;
        justify-content:space-around;
        align-items: center;
        height: 100vh;

        

    }
    .boton{
    width: 300px; 
    height: 150px; 
    font-size: 4em;
}    
a {
    text-decoration: none; 
    color: inherit; 
}
.texto{
    color: #0b0b0b;

}
a:hover {
    color: #ff0000; 
}

a:visited {
    color: #800080; 
}
    
</style>
<div class=" " >
    <div class="inicio">
        <div class="">
            <div class="texto" style="font-size: 5em">
                <p>Libreria Alejandria</p>
        
            </div>
            <img src="https://www.clara.es/medio/2022/06/03/frases-libros-pensar_76779bbf_1280x720.jpg" alt="" width="500px" height="400px">
    
        </div>
        <div class="boton">
            <a  class="" href="/categorias">Entra aqui</a>
        </div>

    
    </div>
</div>



@endsection
