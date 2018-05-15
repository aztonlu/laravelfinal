@extends('admin.partials.advanceforms')
@section('title', 'Agregar Tour')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tour
                <small>New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{url('')}}/admin/tours">Tour</a></li>
                <li class="active">new</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <!-- form start 
                    {!! Form::open(['route' => 'tours.store','method' => 'POST', 'class'=>'form-horizontal', 'files' => TRUE]) !!}-->
                <form class="form-horizontal" action="{{ url('') }}/saveImageTour" method="POST"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-xs-12">
                        <!-- small box -->
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Images for Tour {{ $tour[0]->title }}</h3>
                            </div>
                            <div class="box-body">


                                <hr>

                                <input type="hidden" name="idTour" value="{{ $tour[0]->id }}">

                                <div class="form-group">
                                     {!! Form::label('imageLabel', 'Select an Image', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input id="journalImage" type="file"  class="form-control" name="journalImage" accept="image/png,image/gif,image/jpeg" required>
                                            <span id="spanImage"></span>
                                              <br>
                                              <h6 id="mensajeImagen" style="color: red"></h6>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                         <div class="box-footer">
                                <a href="{{route('tours.index')}}" class="btn btn-default pull-left">Cancelar</a>
                                
                                {!! Form::submit('Next Image', ['class' => 'btn btn-info pull-right']) !!}
                                <a href="{{url('')}}/saveJournalview/{{ $tour[0]->id }}" class="btn btn-info pull-right">Go to Journals</a>

                                
                            </div>
                    </div>  
                </form>


            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection