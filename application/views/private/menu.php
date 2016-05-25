<nav class="navbar navbar-default" role="navigation"> 
	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse"> 
			<span class="sr-only">Toggle navigation</span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</button> 
		<a class="navbar-brand active" href="<?php echo base_url(); ?>test_private">Inicio</a>
	</div> 
	<div class="collapse navbar-collapse" id="example-navbar-collapse"> 
		<ul class="nav navbar-nav nav-center">
			<li>
				<a href="<?php echo base_url(); ?>test_private/aptitudes">Test aptitudes</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>test_private/intereses">Test intereses</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>test_private/ingresar">Cerrar sesión <?php echo $this->session->userdata('nombre'); ?></a>
			</li>
		 
			<!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Java 
			<b class="caret"></b> </a> 
				<ul class="dropdown-menu"> 
					<li><a href="#">jmeter</a></li> 
					<li><a href="#">EJB</a></li> 
					<li><a href="#">Jasper Report</a></li> 
					<li class="divider"></li> 
					<li><a href="#">Separated link</a></li> 
					<li class="divider"></li> 
					<li><a href="#">One more separated link</a></li> 
				</ul> 
			</li> --> 
		</ul> 
	</div> 
</nav>