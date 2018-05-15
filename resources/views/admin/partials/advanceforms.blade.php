<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Casa Habitante') | Terandes</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('')}}/panel/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Admi LTE -->
    <link rel="stylesheet" href="{{url('')}}/panel/dist/css/AdminLTE.css">
    <!-- Summernote css js -->
    <link rel="stylesheet" href="{{url('')}}/panel/dist/summernote/summernote.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('')}}/panel/dist/css/skins/_all-skins.min.css">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/iCheck/flat/blue.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('')}}/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="https://file.myfontastic.com/SLzQsLcd7FmmzjBYTcyVW3/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('')}}/panel/dist/css/fileuploader.css">
    <script src="{{url('')}}/panel/dist/js/FileUploader.js"></script>

</head>
<body class="hold-transition skin-green fixed sidebar-mini">

@include('admin.partials.header')
@include('admin.partials.nav')

@yield('content')

@include('admin.partials.footer')

<!-- Inicializar summernote -->
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300,
            minHeight: 200,
            maxHeight: 700,
            focus: true				// Fije el foco al área editable después de inicializar el summernote
        });
    });
    function getItinerario()
    {
        var num = document.getElementById('numberJornal').value;
        document.getElementById('numJournals').value = num;
        if(num == "")
        {
            alert("Please insert a number");    
        }
        else
        {
            var num = document.getElementById('numberJornal').value;
            $.ajax({
              url: "{{url('')}}/getTags",
              type: "GET",
              dataType: 'text',
              data: {'count1': num },
              
              success: function(data){  
                  $('#jornalSection').html(data);
              },
              error: function(data){
                 
              }
          });           
            
        }
        
    }
    function getOrganization()
    {
        var num = document.getElementById('numberOrganization').value;
        document.getElementById('numOrganization').value = num;
        if(num == "")
        {
            alert("Please insert a number");    
        }
        else
        {
            var num = document.getElementById('numberOrganization').value;
            $.ajax({
              url: "{{url('')}}/getOrganization",
              type: "GET",
              dataType: 'text',
              data: {'count1': num },
              
              success: function(data){  
                  $('#organizationSection').html(data);
              },
              error: function(data){
                 
              }
          });           
            
        }
    }
    function validateEtape(ciudad)
    {
      var estado = "";
      var idGallery = document.getElementById('idGallery').value;
      if(document.getElementById(ciudad).checked){
         
          estado = "inputCheck";
      }
      else{
        
         estado = "outputCheck";
      }

      $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
      $.ajax({
              url: "{{url('')}}/editEtape",
              type: "POST",
              dataType: 'text',
              data: {'city': ciudad, 'estado': estado, 'idGallery': idGallery},
              
              success: function(data){  
                  var spanEtape = document.getElementById('messageEtape');
                  if(estado == "inputCheck")
                  {
                    document.getElementById("messageEtape").innerHTML="inserted correctly";
                    
                  }
                  else
                  {
                    document.getElementById("messageEtape").innerHTML="successfully deleted";
                    
                  }
              },
              error: function(data){
                document.getElementById("messageEtape").innerHTML="Error: please refresh the page";
                
              }
          });
    }
</script>

<!-- jQuery 2.2.3 -->
<script src="{{url('')}}/panel/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('')}}/panel/bootstrap/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="{{url('')}}/panel/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('')}}/panel/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{url('')}}/panel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('')}}/panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{url('')}}/panel/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{url('')}}/panel/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{url('')}}/panel/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('')}}/panel/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('')}}/panel/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="{{url('')}}/panel/dist/summernote/summernote.js"></script>
<script type="text/javascript">
    new FileUploader('.uploader');
</script>
</body>
</html>
