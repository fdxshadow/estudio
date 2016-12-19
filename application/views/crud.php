<body>
	<h1>Bienvenido a tu primer crud</h1>

		<div class="container-fluid">
				<div id="lista">
				<table class="table table-bordered">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Genero</th>
								<th>Sucursal</th>
								<th>Acciones</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($peliculas as $pelicula) {?>
								<tr>
									<td> <?php echo $pelicula->Nombre; ?> </td>
									<td><?php echo $pelicula->Genero; ?></td>
									<td><?php echo $pelicula->Sucursal; ?></td>
									<td>
									<a href="cargarid/<?php echo $pelicula->id;?>" class="btn btn-primary">editar</a>
									<a href="eliminar/<?php echo $pelicula->id;?>" class="btn btn-danger">eliminar</a>
									</td>
								</tr>
							<?php } ?>

						</tbody>
				</table>
				</div>
		</div>


