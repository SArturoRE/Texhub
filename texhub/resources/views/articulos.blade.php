@extends('plantilla')

@section('titulo')
Inicio
@endsection

@section('botones')
<ul class="navbar-nav">
<li class="nav-item">
        <a class="nav-link" href="{{ url('/inicio_admin') }}">Inicio <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/biblio_admin') }}">Biblioteca </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/principal') }}">Cerrar Sesion</a>
    </li>
</ul>
@endsection

@section('sec_cont')
<div class="row">
    <div class="col-12">
        <h1 class="display-3">Articulos</h1>
        <input class="form-control form-control-sm my-3" id="myInput" type="text" onkeyup="filtro()" placeholder="Buscar...">  
    </div>
</div>

<div class="container">
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