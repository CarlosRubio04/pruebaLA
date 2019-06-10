<section class="Main">
    <div class="ContainerLeft">
        <div id="init">
            <?php require_once('blocks/init.php'); ?>
            <div class="Testimonial">
                <div class="TestimonialContainer">
                    <div class="TestimonialContent">
                        <p>
                            <span>“</span>
                            El software de Acsendo nos permite mover competencias, mover comportamientos y nos permite generar objetividad en la evaluación
                        </p>
                        <div class="PlayButton" id="PlayButton" onclick="OpenVideo()">
                            <div class="icon">
                                <img src="img/play-icon.svg" alt="Caso de exito subacol acsendo">
                            </div>
                            <div class="label">
                                Ver testimonio completo
                            </div>
                        </div>
                    </div>
                    <div class="TestimonialAuthor">
                        <img src="img/Oscar.png" alt="Author">
                        <p author="Óscar Castaño, Subocol" class="author">
                            Óscar Castaño
                        </p>
                        <p class="job">
                            Director de Gestión Humana
                        </p>
                        <p class="company">
                            Subocol
                        </p>
                    </div>
                </div>
            </div>


            <!-- Video -->

            <div class="VideoTestimonial" id="VideoTestimonial">
                <div class="videoContainer">
                    <div class="CloseVideo" id="CloseVideo">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                    <div id="ytplayer"></div>
                </div>
            </div>

        </div>
        <div id="step_2">
            <?php require_once('blocks/step_2.php'); ?>
        </div>
    </div> 
    <div class="ContainerRight">
        <div class="FormContainer">
            <?php require_once('blocks/formulario.php'); ?>
        </div>
    </div>
</section>