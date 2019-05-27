<div class="Form">
	<form name="contacto" id="contacto" class="fomo_instant" novalidate>
		<input type="hidden" name="country" id="country" class="form-control">
		<input type="hidden" name="c_utmz" id="c_utmz">
		<div class="FormHeader">
			<h2>Ingresa tus datos y participa en una demostración gratuita donde te mostraremos cómo puedes realizar la evaluación de competencias con Acsendo Flex.</h2>
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required/>
		</div>
		<div class="form-group">
			<label for="mail">Email</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required/>
		</div>
		<div class="form-group">
			<label for="phone">Teléfono</label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" required/>
			<span id="country-flag" class="country-flag"></span>
		</div>
		<div class="form-group">
			<label for="country">Empresa</label>
			<input type="text" name="company" id="company" class="form-control" placeholder="Empresa">
		</div>
		<div class="form-group">
				<label for="company">Número de empleados</label>
				<select name="empleados" id="empleados" class="form-control">
				<option value="" selected="">Número de Empleados*</option>
						<option value="1-30">1 - 10</option>
						<option value="30-50">11 - 50</option>
						<option value="51-100">51 - 100</option>
						<option value="101-150">101 - 150</option>
						<option value="151-250">151 - 250</option>
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

	<form name="contacto2" id="contacto2" class="fomo_instant" novalidate>
		<div class="FormHeader">
			<h2>Nuevo CTA</h2>
		</div>
		<input type="hidden" id="email2" name="email2">
		
	<div class="form-group">
		<label for="sector">Sector</label>
		<select name="sector" id="sector" class="form-control">
			<option value="" selected="">Seleccione</option>        
			<option value="Alimentación y bebidas">Alimentación y bebidas</option>            
			<option value="Educación">Educación</option>            
			<option value="Energía y medio ambiente">Energía y medio ambiente</option>            
			<option value="Gobierno">Gobierno</option>            
			<option value="Sanidad y farmaceútica">Sanidad y farmaceútica</option>          
			<option value="Industria, Producción, Construcción">Industria, Producción, Construcción</option>            
			<option value="Retail">Retail</option>            
			<option value="Deporte y ocio">Deporte y ocio</option>            
			<option value="Tecnología">Tecnología</option>            
			<option value="Telecomunicaciones">Telecomunicaciones</option>            
			<option value="Medios de comunicación y Marketing">Medios de comunicación y Marketing</option>            
			<option value="Servicios">Servicios</option>            
			<option value="Hoteleria y Turismo">Hoteleria y Turismo</option>  
		</select>
	</div>
	<div class="form-group">
		<label for="product">Producto</label>
		<select name="product" id="product" class="form-control">
			<option value="" selected="">Seleccione</option>
          <option value="Plataforma completa">Plataforma completa</option>
          <option value="Clima Laboral">Clima Laboral</option>
          <option value="Competencias 360°">Competencias 360°</option>
          <option value="Metas">Metas</option>
          <option value="PID">PID</option>
		</select>
	</div>
	<div class="form-group">
		<label for="dolor">Dolor</label>
		<select name="dolor" id="dolor" class="form-control">
					<option value="" selected="">Seleccione</option>
          <option value="Opt 1">Opt 1</option>
          <option value="Opt 2">Opt 2</option>
		</select>
	</div>
	<div class="form-group">
		<label for="message">Mensaje</label>
		<textarea name="message" id="message" class="form-control">Encabezado del mensaje</textarea>
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
	<div class="orbit-spinner">
      <div class="orbit"></div>
      <div class="orbit"></div>
      <div class="orbit"></div>
    </div>
	</div>
</div>