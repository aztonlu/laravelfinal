@extends('admin.partials.main')
@section('title', 'Agregar país')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Paises
                <small>Nuevo</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Escritorio</a></li>
                <li><a href="{{url('')}}/admin/countries">Paises</a></li>
                <li class="active">Nuevo</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <div class="col-lg-10 col-xs-12">
                    <!-- Chat box -->
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Agregar país</h3>
                        </div>
                        <!-- form start -->
                        {!! Form::open(['route' => 'countries.store','method' => 'POST', 'class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('País', 'País', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'País', 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('countries.index')}}" class="btn btn-default pull-left">Cancelar</a>
                            {!! Form::submit('Agregar', ['class' => 'btn btn-success pull-right']) !!}
                        </div>
                        <!-- /.box-footer -->
                        {!! Form::close() !!}
                    </div>
                    <!-- /.box (chat box) -->
                </div>
                <!-- /.row -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection