<div class="container">
	<div class="row">
		<CENTER><h1>CUESTIONARIO DE APTITUDES</h1></CENTER>
		<div class="col-md-6">
		<p>
			<h4>
				Alumno: <?php echo $this->session->userdata('nombre'); ?>&nbsp;<?php echo $this->session->userdata('paterno'); ?>&nbsp;<?php echo $this->session->userdata('materno'); ?><br>
				Escuela procedencia: <?php echo $this->session->userdata('escuela'); ?>
			</h4>
		</p>
		<p>
			Enseguida se presenta una lista de actividades en las cuales quizá hayas tenido alguna experencia laboral.
			La finalidad es que nos haga saber, que tan apto te consideras para cada una de ellas. Para indicarlo, procederas de la siguiente manera: leerás ncada pregunta y notaras un 1, 2, 3, 4 frente a ella, guiándote por las explicaciones que siguen:
		</p>	
		<p>
			a) Un 1 si te consideras incompetente para esa actividad.<br>
			b) Un 2 si te consideras medianamente apto.<br>
			c) Un 3  si te consideras bastante apto.<br>
			d) Un 4 si te consideras muy apto.<br>
		</p>
		<p>
			Antes de escribir cada número, procura recordar o imaginar en que consiste la respectiva actividad. Observa que no se te preguntaban las actividades citadas, sino si te consideras apto, y en que grado, para aprenderlas o desempeñarlas. Es necesario que seas imparcial y sincero en tus apreciaciones, ya que se desea obtener informes precisos sobre ti mismo, a fin de ayudarte en tu problema de orientación.
		</p>
		<form action="<?php echo base_url(); ?>private/aptitudes_resultado" method="post">
		<hr>
		<p>		
			<h3>SECCION A</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para expresarte con facilidad en clases o al conversar con tus amigos? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="A1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="A1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A1" value="4">4
				</label><br>
			2. Para redactar composiciones o articulos periodisticos? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="A2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="A2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A2" value="4">4
				</label><br>
			3. Para componer versos serios o jocosos? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="A3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="A3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A3" value="4">4
				</label><br>
			4. Para escribir cuentos, narraciones o historietas? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="A4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="A4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A4" value="4">4
				</label><br>
			5. Para saber distinguir y apreciar la buena literatura? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="A5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="A5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="A5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION B</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para ejecutar con exactitud y rapidez operaxiones aritmeticas? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="B1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="B1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B1" value="4">4
				</label><br>
			2. Para hacer calculos mentales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="B2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="B2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B2" value="4">4
				</label><br>
			3. Para calcular costos en una fiesta? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="B3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="B3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B3" value="4">4
				</label><br>
			4. Para comprender formulas matematicas? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="B4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="B4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B4" value="4">4
				</label><br>
			5. Distribuir el dinero de la escuela en varias actividades? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="B5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="B5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="B5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION C</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para asimilar el contenido de texto sobre radio TV u otros similares? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="C1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="C1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C1" value="4">4
				</label><br>
			2. Para hacer trabajos como instrumentos de medicion precisa, tales como balanzas, compases, pinzas especiales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="C2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="C2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C2" value="4">4
				</label><br>
			3. Para entender el funcionamiento de algun aparato mediante la simple observacion o con explicaciones ligeras? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="C3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="C3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C3" value="4">4
				</label><br>
			4. Para armar y desarmar juguetes mecanicos, o instrumentos algo complicados? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="C4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="C4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C4" value="4">4
				</label><br>
			5. Para localizar desperfectos y realizar arreglos en equipos o instrumentos domesticos como planchas, licuadoras, o circuitos electricos? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="C5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="C5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="C5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION D</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para cantar bailar o declamar? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="D1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="D1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D1" value="4">4
				</label><br>
			2. Para conocer la calidad de una pintura, de una pieza musical o de un poema? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="D2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="D2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D2" value="4">4
				</label><br>
			3. Para realizar pinturas, dibujos, grabados, modelado en barro o platilina? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="D3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="D3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D3" value="4">4
				</label><br>
			4. Para efectuar modificaciones en tu voz, tu figura, o tus movimientos, mediante indicaciones de una persona conocedora del arte escenico? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="D4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="D4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D4" value="4">4
				</label><br>
			5. Para ejecutar algun instrumento, componer versos, melodias, realizar escenografia o decoraciones? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="D5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="D5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="D5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION E</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para cantar en grupo coral? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="E1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="E1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E1" value="4">4
				</label><br>
			2. Para aprender a tocar instrumento musical? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="E2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="E2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E2" value="4">4
				</label><br>
			3. Para distinguir cuando se desentona en las canciones o piezas musicales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="E3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="E3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E3" value="4">4
				</label><br>
			4. Para aprender a entonar correctamente las canciones de moda? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="E4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="E4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E4" value="4">4
				</label><br>
			5. Para saber distinguir y apreciar la buena musica? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="E5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="E5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="E5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION F</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para entender principios y experimentos de biologia? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="F1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="F1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F1" value="4">4
				</label><br>
			2. Para entender principios y experimentos de fisica? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="F2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="F2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F2" value="4">4
				</label><br>
			3. Para entender principios y experimentos de quimica? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="F3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="F3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F3" value="4">4
				</label><br>
			4. Para entender principios y hechos economicos y sociales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="F4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="F4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F4" value="4">4
				</label><br>
			5. Para entender als causas que determinan los acontecimientos sociales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="F5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="F5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="F5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION G</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para tratar y hablar con tacto a las personas? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="G1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="G1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G1" value="4">4
				</label><br>
			2. Para ser miembro activo y util en club o sociedad? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="G2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="G2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G2" value="4">4
				</label><br>
			3. Para colaborar con otros para bien de  ellos y de ti mismo? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="G3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="G3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G3" value="4">4
				</label><br>
			4. Para saber escuchar a otros con pacencia y comprender sus puntos de vista? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="G4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="G4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G4" value="4">4
				</label><br>
			5. Para conversar en las reuniones y fiestas, con acierto y naturalidad? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="G5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="G5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="G5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION H</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para actividades que requieren destreza manual como cortar, tejer, coser? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="H1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="H1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H1" value="4">4
				</label><br>
			2. Para manejar con habilidad herramientas de carpinteria como cepillo, martillo, serrucho, berbiqui, etc.? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="H2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="H2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H2" value="4">4
				</label><br>
			3. Para manejar con facilidad herramientas mecanicas como pinzas, llaves de tuerca, destornilladores, etc.? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="H3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="H3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H3" value="4">4
				</label><br>
			4. Para manejar con habilidad pequeñas pinzas y hheramientas como agujas, manecillas, joyas, piezas de relojeria, etc.? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="H4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="H4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H4" value="4">4
				</label><br>
			5. Para diseñar con facilidad trazos geometricos con la ayuda de las escuadras, reglas y el compas? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="H5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="H5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="H5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION I</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para participar en actividades que requieren valor, audacio, decision, como trepar, dar saltos arriesgados, tomar parte en juegos peligrosos, etc.? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="I1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="I1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I1" value="4">4
				</label><br>
			2. Para dominarte en situaciones peligrosas o comprometidas, sin perder la serenidad ni el control de la situacion? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="I2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="I2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I2" value="4">4
				</label><br>
			3. Para dominar tus nervios y continuar con lo que estes haciendo en un momento en qeu, por algun peligro, todos quieren huir? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="I3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="I3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I3" value="4">4
				</label><br>
			4. Para recuperar pronto la tranquilidad y presencia de animo despues de un susto? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="I4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="I4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I4" value="4">4
				</label><br>
			5. Para no contagiarte del miedo o panico de los demas, e infundirles animos con tu ejemplo? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="I5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="I5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="I5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION J</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para ser jefe competente de un grupo, equipo o sociedad de muchachos? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="J1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="J1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J1" value="4">4
				</label><br>
			2. Para organizar y dirigir festivales, encuentros deportivos, excursiones o compañias sociales? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="J2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="J2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J2" value="4">4
				</label><br>
			3. Para convencer a otros a que hagan lo que crees que deben de hacer? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="J3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="J3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J3" value="4">4
				</label><br>
			4. Para dar ordenes a otros, con seguridad y naturalidad? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="J4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="J4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J4" value="4">4
				</label><br>
			5. Para dirigir un grupo o equipo en situaciones dificiles o peligrosas? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="J5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="J5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="J5" value="4">4
				</label><br>
		</p>

		<hr>
		<p>		
			<h3>SECCION K</h3>
			¿Que tan apto te consideras?<br><br>
			1. Para llevar en forma correcta y ordenar los apuntes de las clases? <br>
				<label class="checkbox-inline"> 
					<input type="radio" name="K1" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K1" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="K1" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K1" value="4">4
				</label><br>
			2. Para ordenar y clasificar debidamente documentos y correspondencia de una oficina? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="K2" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K2" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="K2" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K2" value="4">4
				</label><br>
			3. Para aprender a contestar y redactar correctamente cartas y oficios? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="K3" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K3" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="K3" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K3" value="4">4
				</label><br>
			4. Para anotar y manejar con exactitud nombres, numeros y otros datos de oficina? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="K4" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K4" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="K4" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K4" value="4">4
				</label><br>
			5. Para encargarse de recibir, anotar y dar recados, sin olvidar los detalles? <br>
			<label class="checkbox-inline"> 
					<input type="radio" name="K5" value="1" checked>1
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K5" value="2">2 
				</label>
				<label class="checkbox-inline"> 
					<input type="radio" name="K5" value="3">3
				</label> 
				<label class="checkbox-inline"> 
					<input type="radio" name="K5" value="4">4
				</label><br>
		</p> <br>		
			<center><button type="submit" class="btn btn-primary">Evaluar</button></center>
		</form>
		</div>
	</div>
</div>