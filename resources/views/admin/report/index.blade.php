@extends('admin.partials.datatables')
@section('title', 'Reportes')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Reservas
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
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Tele&eacute;fono</th>
                                    <th>DNI</th>
                                    <th>Nacionalidad</th>
                                    <th>Hora</th>
                                    <th>Cantidad pasajes</th>
                                    <!--<th>Estado</th>-->
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->names}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>{{$comment->phone}}</td>
                                        <td>{{$comment->skype}}</td>
                                        <td>{{$comment->nationality}}</td>
                                        <td>{{$comment->checkin}}</td>
                                        <td>{{$comment->adults}}</td>
                                        
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Tele&eacute;fono</th>
                                    <th>DNI</th>
                                    <th>Nacionalidad</th>
                                    <th>Hora</th>
                                    <th>Cantidad pasajes</th>
                                    <!--<th>Estado</th>-->
                                </tr>
                                </tfoot>
                            </table>

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
