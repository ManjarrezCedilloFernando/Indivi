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
<h1 class="h3 mb-0 text-gray-800"> Editar Servicio</h1>

</div>

   

<!--Content Row -->


 

<!--Content Row -->
<div class="row">

<!-- Content Colum-->
<div class="col-1g-12 mb-4">

 

<!--  Project Card Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weignt-bold text-primary"> Servicio</h6>
</div>
<div class="card-body">
<h5 class="card-title"> Nombre Completo: {{ $servicios->nombre_completo }}</h5>
<h6 class="card-text">Descripción:{{ $servicios->descripcion }}</h6>
<h6 class="card-text">Tipo: {{ $servicios->tipo }}</h6>
<h6 class="card-text">Precio: {{ $servicios->precio }}</h6>
<h6 class="card-text">Clave: {{ $servicios->clave }}</h6>
<h6 class="card-text">Servicio Asignado: {{ $servicios->usuarios->nombre_completo }}</h6>
<a class="btn btn-outline-success” m-3" href="/servicios" ><i class="fa-solid fiarrow-left"></i></t>


</div>

 
</div>
</div>

</div>
<!-- /.container-fluid-->

 

</div>
<!-- End of Main Content-->

 
