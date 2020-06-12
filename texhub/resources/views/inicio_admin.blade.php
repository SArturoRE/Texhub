@extends('plantilla')

@section('titulo')
Inicio
@endsection

@section('botones')
<ul class="navbar-nav">
<li class="nav-item active">
        <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
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
        <h1 class="display-3">Bienvenido Administrador</h1>
    </div>
</div>
<div class="container">
    <div class="row my-3">
        <h2>Desea ver la tabla por:</h2>
        <div class="col-12 my-3">
            <form action="usuarios">
                <input type="submit" class="btn btn-outline-dark btn-block btn-lg mx-1" value="Usuarios"></button>
            </form>
        </div>
        <div class="col-12 my-3">
            <form action="articulos">
                <input type="submit" class="btn btn-outline-dark btn-block btn-lg mx-1" value="Articulos"></button>
            </form>
        </div>
        <div class="col-12 my-3">
            <form action="colaboraciones">
                <input type="submit" class="btn btn-outline-dark btn-block btn-lg mx-1" value="Colaboraciones"></button>
            </form>
        </div>
        <div class="col-12 my-3">
            <form action="temas">
                <input type="submit" class="btn btn-outline-dark btn-block btn-lg mx-1" value="Temas"></button>
            </form>
        </div>
        <div class="col-12 my-3">
            <form action="reportes">
                <input type="submit" class="btn btn-outline-dark btn-block btn-lg mx-1" value="Reportes Usuarios"></button>
            </form>
        </div>
</div>
@endsection