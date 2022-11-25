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
<h1 class="h3 mb-0 text-gray-800"> Editar Veterinarias</h1>

</div>

   

<!--Content Row -->


 

<!--Content Row -->
<div class="row">

<!-- Content Colum-->
<div class="col-1g-12 mb-4">

 

<!--  Project Card Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weignt-bold text-primary"> Veterinarias</h6>
</div>
<div class="card-body">
<h5 class="card-title"> Nombre Completo: {{ $veterinarias->nombre_completo }}</h5>
<h6 class="card-text">Telefono:{{ $veterinarias->telefono }}</h6>
<h6 class="card-text">Imagen del Perfil: {{ $veterinarias->img_perfil }}</h6>
<h6 class="card-text">Direccion: {{ $veterinarias->direccion }}</h6>
<h6 class="card-text">Veterinaria Asignado: {{ $veterinarias->servicios->nombre_completo }}</h6>
<a class="btn btn-outline-success” m-3" href="/veterinarias" ><i class="fa-solid fiarrow-left"></i></t>


</div>

 
</div>
</div>

</div>
<!-- /.container-fluid-->

 

</div>
<!-- End of Main Content-->

 