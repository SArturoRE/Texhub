@extends('plantilla')

@section('titulo')
Principal
@endsection

@section('botones')
<ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="">Principal <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/biblio_admin') }}">Biblioteca </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">Acerca de</a>
    </li>
</ul>
@endsection

@section('sec_cont')
<style>
    body {
        background-image: url("/images/biblioteca.jpg");
        background-color: #AD6300;
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        color: white;
    }
    .container{
        background: #774500;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    
</style>
<div class="row">
    
    <div class="col-12 col-sm-7 my-2">
        <center><h1>¡Bienvenido!</h1><center>
        <br><br>
        <center><h4>Te damos la bienvenida a TexHub, la platafomra en donde encontraras muchisima informacion academica resplada por expertos en el area</h4><center>
        <center><img src="images/icono_libro.png" class="img-fluid" alt="Responsive image" height="250" width="250"><center>
    </div>
    <div class="col-12 col-sm-5 my-2">
        <center><h3>Inicia Sesión</h3><center>
        <div class="form-group  ">
            <center><label for="exampleInputEmail1">Ingrese su Usuario</label></center>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <center><label for="exampleInputPassword1">Ingrese su Contraseña</label></center>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
        </div>
        <!--<button type="submit" class="btn btn-outline-dark" onclick="location.href='dash.html'">Ingresar</button>-->
        <a href="{{ url('/inicio_admin') }}"><input type="button" class="btn btn-outline-light my-3" value="Ingresar"></a>  
        <br>
        <center><h6>¿Aun no tienes una cuenta?</h6><center>
        <center><h3>¡Registrate!</h3><center>
        <a href="{{ url('/inicio_admin') }}"><input type="button" class="btn btn-outline-light my-3" value="Registrarse"></a>
    </div>
</div>
@endsection