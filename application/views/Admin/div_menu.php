

<!--
<div class="navbar navbar-default  ">
	<div class="">
		<ul class="nav navbar-nav">
			<li class="active"><a href="">Investigadores</a></li>
			<li><a href="">Operadores</a></li>
			<li><a href="">Mensajes</a></li>
			<li><a href="<?=base_url()?>login/logout">Cerrar Sesión</a></li>
			<li><a href=""><?= $nombre  ?> </a></li>			
		</ul>
	</div>	
</div>

<div>
	<div>
		<ul>
			<li><a href='<?=base_url().$menu1?>'>Registrar</a></li>
			<li><a href='<?=base_url().$menu2?>'>Investigadores</a></li>
			<li><a href='<?=base_url().$menu3?>'>Proyectos</a></li>
				
		</ul>
	</div>
<div>
-->

<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="">
               <!-- 
               	<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Home</a>
                </div>
                -->
                <div id="navbar" class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav">

                        <li class=" dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Investigadores <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="<?=base_url().$menu1?>">Registrar</a></li>
                                <li><a href="<?=base_url().$menu2?>">Investigadores</a></li>
                                <li><a href="<?=base_url().$menu3?>">Proyectos</a></li>

                            </ul>
                        </li>

                        <li class=" dropdown"><a href="" class="dropdown-toggle " data-toggle="dropdown">Operadores <span class="caret"></span></a>

                            <ul class="dropdown-menu">

                                <li><a href="">Registrar</a></li>
                                <li><a href="">Operadores</a></li>

                            </ul>
                        </li>

                        <li class=" dropdown"><a href="" class="dropdown-toggle " data-toggle="dropdown">Administradores <span class="caret"></span></a>

                            <ul class="dropdown-menu">

                                <li><a href="">Registrar</a></li>
                                <li><a href="">Administradores</a></li>
                                                            
                            </ul>
                        </li>

                        <li><a href="#" class="">Mensajes</a></li>

                        
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="" class="dropdown-toggle active" data-toggle="dropdown"> <?= $nombre  ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Cambiar datos</a></li>
                            </ul>
                        </li>
                        <li ><a href="<?=base_url()?>login/logout">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
