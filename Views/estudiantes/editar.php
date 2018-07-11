<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="box-principal">
<h3 class="titulo">Editar Estudiante <?php echo $datos['nombre'];?></h3>
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
							<img src="<?php echo URL;?>Views/template/imagenes/avatars/<?php echo $datos['imagen'];?>" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputEmail" class="control-label">Nombre</label>
							<input class="form-control" value="<?php echo $datos['nombre'];?>" name="nombre" type="text" required>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Edad</label>
							<input class="form-control" value="<?php echo $datos['edad'];?>" name="edad" type="number" required>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Promedio</label>
							<input class="form-control" value="<?php echo $datos['promedio'];?>" name="promedio" type="number" required>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Seccion</label>
							
							<select name="id_seccion" class="form-control">
								<?php while($row = mysqli_fetch_array($secciones)){ ?>
									<option value="<?php echo $row['id']; ?>" <?php if($datos['id_seccion'] == $row['id']){ echo " selected";} ?>><?php echo $row['nombre']; ?></option>
								<?php } ?>
							</select>
						</div>
						<input value="<?php echo $datos['id'];?>" name="id" type="hidden" required>
						<div class="form-group"> 
							<button type="submit" class="btn btn-success">Editar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>