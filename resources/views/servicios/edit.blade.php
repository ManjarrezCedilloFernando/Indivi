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
<h1 class="h3 mb-0 text-gray-800">Servicio Editar</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
             class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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

<form action="{{url('servicios/' .$servicios->id)}}" method="post">
{!! csrf_field() !!}

@method("PATCH")
<input class="form-control" type="text" value="{{$servicios->id}}" aria-label="Disabled input exemple" disabled>
<label for=""> Nombre del Animal:</label>
<input class="form-control" type="text" id="nombre_completo" name="nombre_completo" value="{{$servicios->nombre_completo}}">

<label for=""> Descripcion de Servicios que se hizo:</label>
<input class="form-control" type="text" id="descripcion" name="descripcion" value="{{$servicios->descripcion}}">

<label for=""> Tipo de Animal:</label>
<input class="form-control" type="text" id="tipo" name="tipo" value="{{$servicios->tipo}}">

<label for=""> Precio de Consulta:</label>
<input class="form-control" type="number" id="precio" name="precio" value="{{$servicios->precio}}">

<label for=""> Nombre del Usuario Asignado:</label>
<select class="form-control form-select" aria-label="Default select example" id="usuarios_id" name="usuarios_id" velue="{{$servicios->veterinarias_id}}">
<option selected>Eligue el servicio</option>
@foreach($usuarios as $usuario)
<option value={{$usuario->id}}>{{$usuario->nombre_completo}}</option>
@endforeach
</select>
<div class="row">
<a class="btn btn-danger m-3" href="/servicios" >Cancelar</a>
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

 



 