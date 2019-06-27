<section class="Main">
    <div class="ContainerLeft">
        <div id="init">
            <?php require_once('blocks/init.php'); ?>
            <div class="Testimonial">
                <div class="TestimonialContainer">
                    <div class="TestimonialContent">
                        <p>
                            <span>“</span>
                            El software de Acsendo nos permite mover competencias y comportamientos y nos ayuda a generar objetividad en la evaluación. 
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
            <div class="CloseForm" id="CloseForm">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <?php require_once('blocks/formulario.php'); ?>
        </div>
    </div>
</section>

<?php require_once('blocks/footer.php'); ?>