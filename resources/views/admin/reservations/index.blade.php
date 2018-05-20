@extends('admin.partials.datatables')
@section('title', 'Reservas')

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
                <li class="active">Reservas</li>
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

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>DNI</th>
                                    <th>Horario</th>
                                    <th>Cantidad pasajes</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Reservation as $reservation)
                                    <tr>
                                        <td>{{$reservation->id}}</td>
                                        <td>{{$reservation->names}}</td>
                                        <td>{{$reservation->email}}</td>
                                        <td>{{$reservation->phone}}</td>
                                        <td>{{$reservation->skype}}</td>
                                        <td>{{$reservation->checkin}}</td>
                                        <td>{{$reservation->message}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>DNI</th>
                                    <th>Horario</th>
                                    <th>Cantidad pasajes</th>
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