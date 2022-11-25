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
    <h1 class="h3 mb-0 text-gray-800">Grupos Altas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Grupo</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('servicios') }}" method="post">
            {!! csrf_field() !!}
                <label > Nombre Completo:</label>
                <input class="form-control" type="text" id="nombre_completo" name="nombre_completo">
                <label for=""> Descripción:</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion">
                <label for=""> Tipo:</label>
                <input class="form-control" type="text" id="tipo" name="tipo">
                <label for=""> Precio:</label>
                <input class="form-control" type="number" id="precio" name="precio">
                <label for=""> Clave:</label>
                <input class="form-control" type="text" id="clave" name="clave">
                <div class="form-group">
                <label for=""> Usuario Asignado:</label>
                    <select class="form-control form-select" aria-label="Default select example" name="usuarios_id">
                    <option selected>Elige el nombre del usuario</option>
                        @foreach($usuarios as $usuario)   
                    <option value={{$usuario->id}}>{{$usuario->nombre_completo}}</option>
                       @endforeach
                    </select>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3" value="save">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

 

</div>
<!-- End of Main Content-->

 

