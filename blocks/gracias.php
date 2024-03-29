<section class="Gracias">
    <div class="GraciasContainer">
        <div class="logo">
            <img src="img/logo-negro.svg" alt="Acsendo">
        </div>

        <div class="GraciasContent">
            <div class="title">
                <h3>
                    ¡Gracias por tu interés! 
                </h3>
            </div>
            <div class="content">
                <p>
                    Pero quizá no estés preparado para una demostración gratuita de Acsendo Flex. Escribe aquí abajo por qué estás interesado en nuestro sistema.
                </p>
                <p>
                    Sin embargo, te invitamos a ver cómo facilitamos el desarrollo de los colaboradores y a conocer nuestro Blog de Talento Humano para conocer todas las novedades de RRHH. 
                </p>
            </div>
            <div class="form">
                <form id="formGracias">
                    <div class="form-group">
                        <label for="mensaje">Cuéntanos cual es el motivo por el que nos contactas</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control"></textarea>
                        <input type="hidden" name="emailSend" id="email" class="form-control">
                    </div>
                    <div class="form-group submit">
                        <button type="submit" class="btn btn-warning">Enviar</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="GraciasOptions">
            <div class="item video">
                <div class="content">
                    <p>Conoce más de las funcionalidades de nuestra plataforma en el siguiente video</p>
                </div>
                <div class="submit">
                    <a href="https://www.youtube.com/watch?v=Y-QSXDhxF-w&t=5s" target="_blank">VER VIDEO</a>
                </div>
            </div>

            <div class="item blog">
                <div class="content">
                    <p>Visita nuestro Blog de Talento Humano para estar enterado de las novedades de RR.HH. </p>
                </div>
                <div class="submit">
                    <a href="https://blog.acsendo.com" target="_blank">IR AL BLOG</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    const EMAIL = localStorage.getItem('email');
    const EMAIL_INP = document.getElementById('email');
    EMAIL_INP.value = EMAIL;
    console.log(EMAIL_INP);
</script>