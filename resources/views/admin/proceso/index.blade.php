@extends('admin.partials.datatables')
@section('title', 'Proceso')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Proceso
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Ingresar datos</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    @include('flash::message')
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="{{route('proceso.create')}}" class="btn btn-info">Nuevo Proceso &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Dni</th>
                                    <th>Boleto</th>
                                    <th>Acción</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($proceso as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->dni}}</td>
                                        <td>{{$user->boleto}}</td>

                                        <td>&nbsp;&nbsp;&nbsp;<a href="{{route('buses.edit', $user->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.buses.destroy', $user->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar conductor?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Id</th>
                                  <th>Dni</th>
                                  <th>Boleto</th>
                                  <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $proceso->render() !!}
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
