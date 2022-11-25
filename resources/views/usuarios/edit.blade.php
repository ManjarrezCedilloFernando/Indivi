@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection

@section('menu')
@endsection

@yield('container')

 <!-- Begin Page Content -->
 <div class="container-fluid">

 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Usuarios Editar</h1>

</div>

   

<!--Content Row -->


 

<!--Content Row -->
<div class="row">

<!-- Content Colum-->
<div class="col-1g-12 mb-4">

 

<!--  Project Card Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weignt-bold text-primary">Editar Servicio</h6>
</div>
<div class="card-body">

<form action="{{url('usuarios/' .$usuarios->id)}}" method="post">
{!! csrf_field() !!}

@method("PATCH")

<label > Nombre Completo:</label>
<input class="form-control" type="text" id="nombre_completo" name="nombre_completo" value="{{$usuarios->nombre_completo}}">

<label> Correo del Usuario:</label>
<input class="form-control" type="text" id="correo" name="correo" value="{{$usuarios->correo}}">

<label> Contraseña:</label>
<input class="form-control" type="number" id="contraseña" name="contraseña" value="{{$usuarios->contraseña}}">

<label> Telefono:</label>
<input class="form-control" type="number" id="telefono" name="telefono" value="{{$usuarios->telefono}}">

<label> Imagen Perfil del Usuario:</label>
<input class="form-control" type="" id="img_perfil" name="img_perfil" value="{{$usuarios->img_perfil}}">


<div class="row">
<a class="btn btn-danger m-3" href="/usuarios" >Cancelar</a>
<button type="submit" class="btn btn-primary m-3" value="update" >Guadar</button>
</div>
</form>
</div>
</div>

 
</div>
</div>

</div>
<!-- /.container-fluid-->

 

</div>
<!-- End of Main Content-->

 
