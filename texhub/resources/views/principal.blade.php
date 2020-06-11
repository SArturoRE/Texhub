@extends('plantilla')

@section('titulo')
Principal
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
        <a class="nav-link" href="#">Acerca de</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Hola desde principal</a>
    </li>
</ul>
@endsection

@section('sec_cont')
       <div class="row">
            <div class="col-7">
                <img src='/images/biblioteca.jpg' class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-4">
            <div class="form-group  ">
              <center><label for="exampleInputEmail1">Ingrese su Usuario</label></center>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <center><label for="exampleInputPassword1">Ingrese su Contraseña</label></center>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            </div>
            <center>
            <!--<button type="submit" class="btn btn-outline-dark" onclick="location.href='dash.html'">Ingresar</button>-->
           <a href="dash.html"><input type="button" class="btn btn-outline-dark" value="Ingresar"></a>  
          </div>
        </div>

@endsection