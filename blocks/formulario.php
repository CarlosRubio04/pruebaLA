<div class="Form">
	<form name="landing_competencias_ES" id="contacto" class="fomo_instant" novalidate>
		<input type="hidden" name="country" id="country" class="form-control">
		<input type="hidden" name="c_utmz" id="c_utmz">
		<input type="hidden" name="c_trf" id="c_trf">
		<div class="FormHeader">
			<h2>Agenda ahora una demostración con un experto</h2>		
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" maxlength="40" placeholder="Nombre" required/>
		</div>
		<div class="form-group">
			<label for="mail">Email corporativo</label>
			<input type="text" class="form-control" id="email" name="email" maxlength="40" placeholder="Email corporativo" required/>
		</div>
		<div class="form-group">
			<label for="phone">Teléfono</label>
			<input type="tel" class="form-control" name="phone" id="phone" maxlength="17" placeholder="Teléfono" required/>
			<span id="country-flag" class="country-flag"></span>
		</div>
		<div class="form-group">
			<label for="country">Empresa</label>
			<input type="text" name="company" id="company" class="form-control" maxlength="40" placeholder="Empresa">
		</div>
		<div class="form-group">
				<label for="company">Número de empleados</label>
				<select name="empleados" id="empleados" class="form-control">
					<option value="" selected="">Número de Empleados</option>
					<option value="1-10">1 - 10</option>
					<option value="11-30">11 - 30</option>
					<option value="31-50">31 - 50</option>
					<option value="51-100">51 - 100</option>
					<option value="101-250">101 - 250</option>
					<option value="251-500">251 - 500</option>
					<option value="+500">+500</option>
				</select>
		</div>
		<div class="form-group">
			<label for="job_title">Cargo</label>
			<select name="job_title" id="job_title" class="form-control wide">
				<option value="" selected="">Seleccione su cargo</option>
				<option value="Director / Gerente de RRHH">Director / Gerente de RRHH</option>
				<option value="Profesional / Asistente de RRHH">Profesional / Asistente de RRHH</option>
				<option value="Gerente General / CEO">Gerente General / CEO</option>
				<option value="Director de Otro Departamento">Director de Otro Departamento</option>
				<option value="Consultor de RRHH">Consultor de RRHH</option>
				<option value="Otro">Otro</option>
			</select>
		</div>
		<div class="FormSubmit">
			<button type="submit" class="btn btn-success">¡Solicitar demo!</button>
		</div>
	</form>

	<form name="landing_competencias_ES_paso2" id="contacto2" class="fomo_instant" novalidate>
		<div class="FormHeader">
			<h2>Cuéntanos más de ti y ayúdanos a preparar una mejor demostración</h2>
		</div>
		<input type="hidden" id="email2" name="email2">
		
	<div class="form-group">
		<label for="sector">Sector</label>
		<select name="sector" id="sector" class="form-control">
			<option value="" selected="">Seleccione</option>
			<option value="Agropecuarios">Agropecuarios</option>
			<option value="Comercio">Comercio</option>
			<option value="Comunicaciones">Comunicaciones</option>
			<option value="Construcción">Construcción</option>
			<option value="Educación">Educación</option>
			<option value="Financiero">Financiero</option>
			<option value="Industrial">Industrial</option>
			<option value="Minero y Energético">Minero y Energético</option>
			<option value="Salud">Salud</option>
			<option value="Servicios">Servicios</option>
			<option value="Solidario">Solidario</option>
			<option value="Transporte">Transporte</option>
			<option value="Otro">Otro</option>
		</select>
	</div>
	<input type="hidden" name="product" value="Competencias 360°">

	<!-- <div class="form-group">
		<label for="product">Producto</label>
		<select name="product" id="product" class="form-control">
			<option value="" selected="">Seleccione</option>
          <option value="Plataforma completa">Plataforma completa</option>
          <option value="Clima Laboral">Clima Laboral</option>
          <option value="Competencias 360°">Competencias 360°</option>
          <option value="Metas">Metas</option>
          <option value="PID">PID</option>
		</select>
	</div> -->
	<div class="form-group">
		<label for="dolor">¿Cuál es el mayor desafío que afronta tu área de RRHH?</label>
		<select name="dolor" id="dolor" class="form-control">
			<option value="" selected="">Seleccione</option>
        	<option value="Mantener alineada la estrategia">Mantener alineada la estrategia</option>
	  		<option value="Cubrir las vacantes con el mejor talento">Cubrir las vacantes con el mejor talento</option>
		  	<option value="Retener y fidelizar a los colaboradores">Retener y fidelizar a los colaboradores</option>
			<option value="Mejorar el estado del clima laboral">Mejorar el estado del clima laboral</option>
			<option value="Facilitar el seguimiento de las metas">Facilitar el seguimiento de las metas</option>
			<option value="Orientar el desarrollo y la formación">Orientar el desarrollo y la formación</option>
			<option value="Crear un plan de sucesión para líderes">Crear un plan de sucesión para líderes</option>
			<option value="Optimizar la asignación de bonos">Optimizar la asignación de bonos</option>
		</select>	
	</div>
	<div class="form-group">
		<label for="message">Mensaje</label>
		<textarea name="message" id="message" class="form-control" rows="5">
Tardo mucho tiempo creando reportes,
quiero mejorar el seguimiento de indicadores...</textarea>
	</div>
	<div class="FormSubmit">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
	</form>


	<div class="clients">
        <span>Ellos confian en Acsendo</span>
        <img src="img/tres_logos.jpg" alt="Clientes Acsendo" class="img-responsive" id="imgClients">
	</div>

</div>

<div id="loading-form" class="loading-form">
	<div class="loading-form-container">
		<!-- <div class="hollow-dots-spinner" :style="spinnerStyle">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div> -->
		<img src="img/acsendito.gif" alt="Acsendo">
	</div>
</div>