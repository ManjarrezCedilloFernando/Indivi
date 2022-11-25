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
<h1 class="h3 mb-0 text-gray-800">Usuario Editar</h1>
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
<h6 class="m-0 font-weignt-bold text-primary"> Usuarios</h6>
</div>
<div class="card-body">
<h5 class="card-title">Nombre Completo:{{ $usuarios->nombre_completo }}</n5>
<h6 class="card-text">Correo:{{ $usuarios->correo }}</h6>
<h6 class="card-text">Contraseña: {{ $usuarios->contraseña }}</n6>
<h6 class="card-text">Telefono: {{ $usuarios->telefono }}</n6>
<h6 class="card-text">Imagen del Perfil: {{ $usuarios->img_perfil }}</n6>
<a class="btn btn-outline-success” m-3" href="/usuarios" ><i class="fa-solid fiarrow-left"></i></a>


</div>

 
</div>
</div>

</div>
<!-- /.container-fluid-->

 

</div>
<!-- End of Main Content-->

 
