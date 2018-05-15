@extends('admin.partials.advanceforms')
@section('title', 'Agregar Tour')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tour
                <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('')}}/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{url('')}}/admin/tours">Tour</a></li>
                <li><a href="{{url('')}}/admin/tours">Edit</a></li>
                <li class="active">Edit Organization</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xs-12">
                    @include('flash::message')
                </div>
                
                {{-- Validamos el formulario si cumple con el request de usuario --}}
                @include('admin.partials.errors')

                <!-- form start -->
                    
                <form action="{{url('')}}/updateOrganization" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-xs-12">
                        @foreach($organizations as $orga)
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="hidden" name="idTour" value="{{ $orga->tour_id }}">
                                        <input type="hidden" name="idOrganization" id="idOrganization" value="{{ $orga->id }}">
                                        {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('name', $orga-> name, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('description', $orga->description, ['class' => 'form-control', 'rows'=>'10', 'placeholder' => '', 'required']) !!}
                                        </div>
                                    </div>
                                   
                                    
                                   {!! Form::submit('Save Organization', ['class' => 'btn btn-info pull-right']) !!}
                                    
                                </div>
                                
                            </div>
                        @endforeach 
                    </div>
                </form>


            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection