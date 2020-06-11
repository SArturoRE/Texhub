@extends('plantilla')

@section('titulo')
Biblioteca
@endsection

@section('botones')
<ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">Biblioteca <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Catalogo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Cerrar Sesion</a>
    </li>
</ul>
@endsection

@section('sec_cont')
<div class="row">
    <div class="col-12">
        <h1 class="display-3">Biblioteca Administrador</h1>
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-auto my-3"> 
            <form class="form-inline my-1 my-lg-0">    
                <input class="form-control form-control-sm" id="myInput" type="text" onkeyup="filtro()" placeholder="Buscar...">
                <br>
            </form>      
        </div>


        <div class="col-auto my-3">        
            <h5>Ordenar por: </h5> 
        </div>
        
        <div class="col my-3">
            <button type="button" class="btn btn-outline-success btn-block btn-sm mx-1">Autor</button>
        </div>
        <div class="col my-3">
            <button type="button" class="btn btn-outline-success btn-block btn-sm mx-1">Articulo</button>
        </div>
        <div class="col my-3">
            <button type="button" class="btn btn-outline-success btn-block btn-sm mx-1">Tema</button>
        </div>        
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

@endsection