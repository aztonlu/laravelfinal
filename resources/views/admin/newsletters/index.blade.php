@extends('admin.partials.datatables')
@section('title', 'Boletines')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Boletines 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Boletines</li>
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
                            <a href="{{route('newsletters.create')}}" class="btn btn-info">Nuevo boletín &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($newsletters as $newsletter)
                                    <tr>
                                        <td>{{$newsletter->id}}</td>
                                        <td>{{$newsletter->titulo}}</td>
                                        <td>{{$newsletter->description}}</td>
                                        <td>{{$newsletter->date}}</td>
                                            <!-- enviar correo del boletin-->
                                            <td>&nbsp;&nbsp;&nbsp; <a href="#" onclick="return confirm('¿Estas seguro de querer enviar el boletín a todos los correos suscritos?')" style="color:#ff7677;"><span class="fa fa-envelope-o"></span></a></td>
                                            <td>&nbsp;&nbsp;&nbsp;<a href="{{route('newsletters.edit', $newsletter->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.newsletters.destroy', $newsletter->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar el boletín?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $newsletters->render() !!}
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