
<div class="container  col-lg-12" style='margin-top:60px' >
	

	<div class="panel panel-default col-lg-8">
	
			<form action='<?=base_url().$action ?>' method="POST">
				<div id="titulo_color" class="panel-heading" align="center">
					<h1>Registro de Investigadores</h1>
					<h3>llenar todos los campos</h3>
				</div>


				<div class="form-group col-lg- " >
					<input class="form-control"  type="text" name="nombre" placeholder="Nombre"/>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="correo" placeholder="Correo"/>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="password" placeholder="Contraseña"/>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="telefono" placeholder="Telefono"/>
				</div>

				<div class="form-group">
					<input class="form-control" type="text" name="dependencia" placeholder="Dependencia"/>
				</div>

				<input type="submit" value="Registrar" class="btn btn-left"/>
				<input type="submit" value="Cancelar" class="btn btn-left" />

		</form>
	</div>
</div>