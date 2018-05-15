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
                <li class="{{url('')}}/admin/tours">Edit</li>
                <li class="active">Edit Gallery</li>
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
                    
                <form action="{{url('')}}/updateGallery" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-xs-12">
                        @foreach($galleries as $gallery)
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="hidden" name="idTour" value="{{ $gallery->tour_id }}">
                                        <input type="hidden" name="idGallery" id="idGallery" value="{{ $gallery->id }}">
                                        {!! Form::label('name', 'Name', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('name', $gallery-> name, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('description', $gallery->description, ['class' => 'form-control', 'rows'=>'10', 'placeholder' => '']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('etapes', 'Etapes', ['class'=>'col-sm-2 control-label']) !!}
                                        @foreach($etapes as $etape)
                                        <div class="col-sm-2">
                                            <label><input type="checkbox" value="{{ $etape }}" id="{{ $etape }}"  name="{{ $etape }}" checked onclick="validateEtape(this.value);">{{ $etape }}</label>
                                        </div>

                                        @endforeach
                                        @foreach($tags as $tag)
                                        <div class="col-sm-2">
                                            <label><input type="checkbox" value="{{ $tag }}" name="{{ $tag }}" id="{{ $tag }}" onclick="validateEtape(this.value);">{{ $tag }}</label>
                                        </div>
                                        @endforeach
                                        <span id="messageEtape" style="color: green"></span>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('image', 'Image', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            <input id="coverpage" type="file"  class="form-control" name="journalImage"" accept="image/png,image/gif,image/jpeg">

                                            <center><img src="{{url('')}}/{{ $gallery->routeImage}}" width="200" height="200"></center>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('stay', 'Accomodation', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('stay', $gallery->stay, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('transport', 'Transport', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('transport', $gallery-> transport, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
                                        </div>
                                    </div>
                                   {!! Form::submit('Save Gallery', ['class' => 'btn btn-info pull-right']) !!}
                                    
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