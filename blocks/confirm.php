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
                    Sin embargo, la experiencia nos ha enseñado que el sistema de Acsendo Flex logra mejores resultados en empresas de más de 30 colaboradores.
                </p>
                <p>
                    Pero si crees que podemos ayudarte, puedes dejarnos un mensaje contándonos lo que buscas y nosotros nos pondremos en contacto contigo.  
                </p>
            </div>
            <div class="form">
                <form id="formGracias">
                    <div class="form-group">
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