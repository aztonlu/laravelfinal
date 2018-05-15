@extends('admin.partials.main')
@section('title', 'Registrar usuario')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tag
                <small>New</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="{{route('tags.index')}}">Tags</a></li>
                <li class="active">New</li>
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
                            <h3 class="box-title">Agregar usuario</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['route' => 'tags.store','method' => 'POST', 'class'=>'form-horizontal']) !!}
                        <div class="box-body">
                            <div class="form-group">
                                {!! Form::label('name', 'Site name', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Write a site name', 'required']) !!}
                                </div>
                            </div>
                            <div id="mapCanvas123" style="width: 100%; height: 350px"></div>
                            <div id="markerStatus" style="color: #000"><i>Drag the red marker.....</i></div>
                            
                            
                            <div class="form-group">
                                {!! Form::label('latitude', 'Latitude', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="google-latitud" type="text" name="latitud" class="form-control" placeholder="Drag the Marker" required >
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('longitude', 'Longitude', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="google-longitud" type="text" name="longitud" class="form-control" placeholder="Drag the Marker" required="" >
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('users.index')}}" class="btn btn-default pull-left">Cancel</a>
                            {!! Form::submit('Register', ['class' => 'btn btn-success pull-right']) !!}
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
    <script type="text/javascript">
        var geocoder = new google.maps.Geocoder();

          function geocodePosition(pos) {
          geocoder.geocode({
          latLng: pos
          }, function(responses) {
          if (responses && responses.length > 0) {
            updateMarkerAddress(responses[0].formatted_address);
          } else {
            updateMarkerAddress('Cannot determine address at this location.');
          }
          });
          }

          function updateMarkerStatus(str) {
          document.getElementById('markerStatus').innerHTML = str;
          }

          function updateMarkerPosition(latLng) {
          document.getElementById('google-latitud').value = latLng.lat();
          document.getElementById('google-longitud').value = latLng.lng();
          }

          
          var latLng = new google.maps.LatLng(-13.52038877380788, -71.97660765405277);
          var map = new google.maps.Map(document.getElementById('mapCanvas123'), {
                          zoom:14,
                          center: myCenter,
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        });

                       var myCenter=new google.maps.LatLng(-13.52038877380788, -71.97660765405277);
                       var marker=new google.maps.Marker({
              position:myCenter,
              draggable: true
          });

           setTimeout( function(){
            google.maps.event.trigger(map, "resize");
           map.setCenter(myCenter);
            marker.setMap(map);
 updateMarkerPosition(latLng);
              geocodePosition(latLng);
               google.maps.event.addListener(marker, 'dragstart', function() {
              updateMarkerAddress('Dragging...');
              });
              google.maps.event.addListener(marker, 'drag', function() {
              updateMarkerStatus('Dragging...');
              updateMarkerPosition(marker.getPosition());
              });
              google.maps.event.addListener(marker, 'dragend', function() {
              updateMarkerStatus('Drag ended');
              geocodePosition(marker.getPosition());
              });
            } , 400);
      </script>
@endsection