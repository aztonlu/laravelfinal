<html lang="en">
<head>
	<title>Informes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informes ruta tesis</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Descargar Excel xls</button></a>
		<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Descargar Excel xlsx</button></a>
		<a href="{{ URL::to('downloadExcelcomentarios/xlsx') }}"><button class="btn btn-success">Descargar Excel Comentarios</button></a>
		<a href="{{ URL::to('downloadExcelarticulos/xlsx') }}"><button class="btn btn-success">Descargar Excel Articulos</button></a>


		<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Descargar CSV</button></a>

		<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="file" name="import_file" />
			<button class="btn btn-primary">Importar archivo</button>
		</form>
	</div>
</body>
</html>
