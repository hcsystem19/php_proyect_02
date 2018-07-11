<div class="box-principal">
<h3 class="titulo">Estudiante <?php echo $datos['nombre'];?></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="pull-left">
				<h3 class="panel-title">Editar estudiante <?php echo $datos['nombre'];?></h3>
			</div>
			<div class="pull-right">
				<a href="<?php echo URL;?>" aria-hidden="true">&times;</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="<?php echo URL;?>Views/template/imagenes/avatars/<?php echo $datos['imagen'];?>" alt="" class="img-thumbnail">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<ul class="list-group">
						<li class="list-group-item">
							<b>Nombre:</b><?php echo $datos['nombre'];?>
						</li>
						<li class="list-group-item">
							<b>Edad:</b><?php echo $datos['edad'];?>
						</li>
						<li class="list-group-item">
							<b>Promedio:</b><?php echo $datos['promedio'];?>
						</li>
						<li class="list-group-item">
							<b>Seccion:</b><?php echo $datos['nombre_seccion'];?>
						</li>
						<li class="list-group-item">
							<b>Fecha de registro:</b><?php echo $datos['fecha'];?>
						</li>
					</ul>

					
				</div>
			</div>
		</div>
	</div>
</div>