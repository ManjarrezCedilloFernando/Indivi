@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection

@section('menu')
@endsection

@yield('container')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Veterinaria</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="veterinarias/create"><i class="fa-solid fa-layer-group"></i></a>
                            </div>
                        </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Telefono</th>
                                                    <th>Foto del animal</th>
                                                    <th>Dirrección</th>
                                                    <th>Servicio que se realizo</th>
                                                    <th>Operaciónes</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Telefono</th>
                                                    <th>Foto del animal</th>
                                                    <th>Dirrección</th>
                                                    <th>Servicio que se realizo</th>
                                                    <th>Operaciónes</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($veterinaria as $veterinarias)
                                                <tr>
                                                    <td>{{$veterinarias->id}}</td>
                                                    <td>{{$veterinarias->nombre_completo}}</td>
                                                    <td>{{$veterinarias->telefono}}</td>
                                                    <td>{{$veterinarias->img_perfil}}</td>
                                                    <td>{{$veterinarias->direccion}}</td>
                                                    <td>{{$veterinarias->servicios->descripcion}}</td>
                                                    <td>
                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                        <a class="btn btn-success m-3" href="veterinarias/{{$veterinarias->id}}" ><i class="fa-regular fa-eye"></i></a>
                                                        <a class="btn btn-warning m-3" href="veterinarias/{{$veterinarias->id}}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <form action="veterinarias/{{$veterinarias->id}}" method="POST">
                                                    {!! csrf_field() !!}
                                                    @method("delete")

                                                    <button class="btn btn-danger m-3" type="submit"><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                    </div>
                                                    </td>
                                                    </tr>
                                                                                                       
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                     

                        </div>

                    
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

