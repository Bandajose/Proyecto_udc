
<?php
				if(isset($info))
				echo $info;
			?>

<style type="text/css">
	#titulo_color{
		background:#3D7236;
		color: white;
	}
	#contenido{
		background: #407A38;
	}
	body{
		background: #E4EBE4;
	}

</style>				

 <div class="container col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
 	<form class="form" action="login" method="POST">
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <div class="panel panel-default">
                <div id="titulo_color" class="panel-heading" align="center">
                    <h3>Ingreso Sistema de Proyectos</h3>
                </div>
                <div id="contenido" class="panel-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user" style="width: auto"></i>
                            </span>
                            <input type="text" class="form-control" name="correo" placeholder="Correo" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock" style="width: auto"></i>
                            </span>
                            <input class="form-control" type="password" name="password" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <input class="btn btn-left btn-block" type="submit" value="Ingresar">
                </div>
            </div>
    </form>
 </div>
