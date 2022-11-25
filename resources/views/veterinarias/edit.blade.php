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
<h1 class="h3 mb-0 text-gray-800">Veterinaria Editar</h1>

</div>

   

<!--Content Row -->


 

<!--Content Row -->
<div class="row">

<!-- Content Colum-->
<div class="col-1g-12 mb-4">

 

<!--  Project Card Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weignt-bold text-primary">Editar Veterinaria</h6>
</div>
<div class="card-body">

<form action="{{url('veterinarias/' .$veterinarias->id)}}" method="post">
{!! csrf_field() !!}

@method("PATCH")
<input class="form-control" type="text" value="{{$veterinarias->id}}" aria-label="Disabled input exemple" disabled>
<label for=""> Nombre Completo:</label>
<input class="form-control" type="text" id="nombre_completo" name="nombre_completo" value="{{$veterinarias->nombre_completo}}">


<label for=""> Telefono:</label>
<input class="form-control" type="number" id="telefono" name="telefono" value="{{$veterinarias->telefono}}">

<label for=""> Imagen del perfil:</label>
<input class="form-control" type="number" id="img_perfil" name="img_perfil" value="{{$veterinarias->img_perfil}}">

<label for=""> Direccion:</label>
<input class="form-control" type="number" id="direccion" name="direccion" value="{{$veterinarias->direccion}}">

<label for=""> Servicio Asignado:</label>
<select class="form-control form-select" aria-label="Default select example" id="servicios_id" name="servicios_id" velue="{{$veterinarias->servicios_id}}">
<option selected>Eligue Servicio</option>
@foreach($servicios as $servicio)
<option value={{$servicio->id}}>{{$servicio->nombre_completo}}</option>
@endforeach
</select>
<div class="row">
<a class="btn btn-danger m-3" href="/veterinarias" >Cancelar</a>
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
 