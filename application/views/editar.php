<body>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<form class="form col-md-4" method="post" action="http://localhost/Estudio/modificar/">
			<h3>Editar Peliculas</h3>
				<div class="form-group">
				<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="form-control" value="<?php echo $edicion->Nombre;?>">
				</div>
				<div class="form-group">
				<label for="Genero">Genero</label>
				<input type="text" name="Genero" class="form-control" value="<?php echo $edicion->Genero;?>">
				</div>
				<div class="form-group">
				<label for="Sucursal">Sucursal</label>
				<input type="text" name="Sucursal" class="form-control" value="<?php echo $edicion->Sucursal;?>">	
				</div>
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $edicion->id;?>">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="aceptar" value="aceptar">
				</div>
			</form>	
		<div class="col-md-4"></div>
	</div>	
</div>