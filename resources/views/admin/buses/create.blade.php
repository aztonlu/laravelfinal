@extends('admin.partials.main')
@section('title', 'Registrar Bus')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Buses
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Buses</a></li>
                <li class="active">Nuevo</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <div class="col-lg-8 col-xs-12">
                    <!-- small box -->
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Agregar Bus</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'buses.store','method' => 'POST', 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('placa', 'Placa', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('placa', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Placa del bus', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('modelo', 'Modelo', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('modelo', null, ['class' => 'form-control', 'placeholder' => 'Modelo', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('tipo', 'Tipo', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('tipo', null, ['class' => 'form-control', 'placeholder' => 'Tipo de bus']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('nroasientos', 'Numero de asientos', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('nroasientos', null, ['class' => 'form-control', 'placeholder' => 'Numero de asientos']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('empresa', 'Empresa', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('empresa', null, ['class' => 'form-control', 'placeholder' => 'Empresa']) !!}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('buses.index')}}" class="btn btn-default pull-left">Cancelar</a>
                            {!! Form::submit('Registrar', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>

                </div>
                <!-- /.row -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
