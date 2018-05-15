@extends('admin.partials.datatables')
@section('title', 'Tours')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tours 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Tours</li>
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
                            <a href="{{route('tours.create')}}" class="btn btn-info">Nuevo tours &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Titulo</th>
                                    <th>Estado</th>
                                    <th>Dias</th>
                                    <th>Precio</th>
                                    <th>Personas</th>
                                    <th>Oferta</th>
                                    <th>Sumario</th>
                                    <!--<th>Mapa</th>
                                    <th>Portada</th>
                                    <th>pdf</th>-->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tours as $tour)
                                    <tr>
                                        <td>{{$tour->id}}</td>
                                        <td>{{$tour->code}}</td>
                                        <td>{{$tour->title}}</td>
                                        <td>{{$tour->state}}</td>
                                        <td>{{$tour->days}}</td>
                                        <td>{{$tour->price}}</td>
                                        <td>{{$tour->peoples}}</td>
                                        <td>{{$tour->offer}}</td>
                                        <td>{{$tour->summary}}</td>
                                        <!--<td>{{$tour->map}}</td>
                                        <td>{{$tour->coverpage}}</td>
                                        <td>{{$tour->pdf}}</td>-->
                        
                                            <td>&nbsp;&nbsp;&nbsp;<a href="{{route('tours.edit', $tour->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.tours.destroy', $tour->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar el tour?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Codigo</th>
                                    <th>Titulo</th>
                                    <th>Estado</th>
                                    <th>Dias</th>
                                    <th>Precio</th>
                                    <th>Personas</th>
                                    <th>Oferta</th>
                                    <th>Sumario</th>
                                    <!--<th>Mapa</th>
                                    <th>Portada</th>
                                  <th>pdf</th>-->                 
                                </tr>
                                </tfoot>
                            </table>
                            {{ $tours->links() }}
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