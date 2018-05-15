@extends('admin.partials.datatables')
@section('title', 'Testimonials')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Testimonios 
                <small>Listado</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                <li class="active">Testimonios</li>
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
                            <a href="{{route('testimonials.create')}}" class="btn btn-info">Nuevo Testimonio &nbsp; <span class="fa fa-plus-circle"></span></a>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Fecha</th>
                                    <th>Nacionalidad</th>
                                    <th>Tetimonio</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Acción</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($testimonials as $testimonial)
                                    <tr>
                                        <td>{{$testimonial->id}}</td>
                                        <td>{{$testimonial->name}}</td>
                                        <td>{{$testimonial->email}}</td>
                                        <td>{{$testimonial->date}}</td>
                                        <td>{{$testimonial->nationality}}</td>
                                        <td>{{$testimonial->testimonial}}</td>
                                        <td>{{$testimonial->status}}</td>
                                        <td>{{$testimonial->created_at}}</td>
                                        <td>&nbsp;&nbsp;&nbsp;<a href="{{route('testimonials.approved', $testimonial->id)}}" onclick="return confirm('¿Estas seguro de querer cambiar el estado del testimonio?')" style="color:#2f99ff;">
                                            @if($testimonial->status == 'approved')
                                            <span class="ion-eye">
                                            @else
                                            <span class="ion-eye-disabled">
                                            @endif
                                            </span></a>&nbsp;&nbsp;&nbsp;<a href="{{route('testimonials.edit', $testimonial->id)}}" style="color:#2f99ff;"><span class="ion-edit"></span></a> &nbsp;&nbsp;&nbsp; <a href="{{route('admin.testimonials.destroy', $testimonial->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar el testimonio?')" style="color:#ff7677;"><span class="ion-close-circled"></span></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombres</th>
                                    <th>E-mail</th>
                                    <th>Fecha</th>
                                    <th>Nacionalidad</th>
                                    <th>Tetimonio</th>
                                    <th>Estado</th>
                                    <th>Creado</th>
                                    <th>Acción</th>
                                </tr>
                                </tfoot>
                            </table>
                            {!! $testimonials->render() !!}
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