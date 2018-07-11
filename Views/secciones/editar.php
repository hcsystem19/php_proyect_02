<div class="box-principal">
<h3 class="titulo">Editar Secciones</h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="pull-left">
				<h3 class="panel-title">Editar seccion <?php echo $datos['nombre']; ?></h3>
			</div>
			<div class="pull-right">
				<a href="<?php echo URL;?>/secciones/" aria-hidden="true">&times;</a>
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="form-horizontal" action="" method="POST" >
						<div class="form-group">
							<label for="inputEmail" class="control-label">Nombre</label>
							<input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required>
						</div>
						<input value="<?php echo $datos['id']; ?>" name="id" type="hidden" required>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>