@extends('admin.partials.main')
@section('title', 'Registrar Conductor')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Conductores
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#">Conductores</a></li>
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
                            <h3 class="box-title">Agregar Conductor</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'conductores.store','method' => 'POST', 'class'=>'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('dni', 'Dni', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Dni', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombres', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('apepat', 'Apellido Paterno', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('apepat', null, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('apemat', 'Apellido Materno', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('apemat', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                {!! Form::label('nrolicencia', 'Numero de licencia', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('nrolicencia', null, ['class' => 'form-control', 'placeholder' => 'Numero de licencia']) !!}
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('conductores.index')}}" class="btn btn-default pull-left">Cancelar</a>
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
