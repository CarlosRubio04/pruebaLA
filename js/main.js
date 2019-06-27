// Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut(1000);
}

// Open modal
function OpenModal() {
  $('#Modal').fadeIn();
}
$('.openModal').on('click', function() {
  $('#Modal').fadeIn();
});
// Open modal
function CloseModal() {
  $('#Modal').fadeOut();
}
// Animation

$(window).on('scroll', function() {
  $(".willFade").each(function() {
    if (isScrolledIntoView($(this))) {
      $(this).addClass("fadeIn");
    }
  });

  $(".willFadeUp").each(function() {
    if (isScrolledIntoView($(this))) {
      $(this).addClass("fadeInUp");
    }
  });


  $(".willFadeLeft").each(function() {
    if (isScrolledIntoView($(this))) {
      $(this).addClass("fadeInLeft");
    }
  });
  
});

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



function OpenVideo() {
  $('#VideoTestimonial').fadeIn(400);
  ga('send', 'event', 'Video', 'play', 'Video Testimonial');
   // Replace the 'ytplayer' element with an <iframe> and
   // YouTube player after the API code downloads.
   var player;
   function onYouTubePlayerAPIReady() {
     player = new YT.Player('ytplayer', {
        height: '315',
        width: '100%',
        videoId: 'b8n6XHcjshw',
        playerVars: {
          'rel': 0, 
          'showinfo': 0
        },
        events: {
          'onReady': onPlayerReady
        }
     });
   }


   // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.playVideo();
    }
    function stopVideo() {
      player.stopVideo();
    }


  onYouTubePlayerAPIReady();

  $('#CloseVideo').click(function() {
    stopVideo();
    $('#VideoTestimonial').fadeOut(400);
  });

}


function OpenVideoStep() {
  $('#thumnail').fadeOut(400);
  $('#videoSergio').fadeIn(400);
  ga('send', 'event', 'Video Sergio', 'play', 'Video Sergio');
   // Replace the 'ytplayer' element with an <iframe> and
   // YouTube player after the API code downloads.
   var playerSec;
   function onYouTubePlayerAPIReady() {
     playerSec = new YT.Player('videoSergio', {
        height: '378',
        width: '100%',
        videoId: 'qapsUK4qimg',
        playerVars: {
          rel: 0, 
          showinfo: 0
        },
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
     });
   }


   // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.playVideo();
    }
    
    function onPlayerStateChange(event) {
      if (event.data == 0) {
        $('#videoSergio').fadeOut(400);
        $('#thumnail').fadeIn(400);
      }
    }


  onYouTubePlayerAPIReady();
}

// Cookie
function read_cookie(a){
  var b=a+"=";
  var c=document.cookie.split(";");
  console.log(c);
  for(var d=0;d<c.length;d++){
      var e=c[d];
      while(e.charAt(0)==" ")
          e=e.substring(1,e.length);
      if(e.indexOf(b)==0){
          return e.substring(b.length,e.length);
      }
  }return null
}
const utmz = read_cookie('__utmz');
console.log(utmz);
$('#c_utmz').val(utmz);

function get_TRF() {
  let trf = read_cookie('__trf.src');
  let ctrf = trf ? trf.replace('encoded_', '') : null;
  console.log(ctrf);
  $('#c_trf').val(ctrf);
}
get_TRF();

function findCountry() {
  $.getJSON('https://api.ipdata.co/?api-key=7836a4acdb465320d4436d3ce4bfdd37f004278fd8a2aabb0c6cce9d', function(result) {
    console.log(result);
    $('#country').val(result.country_name);
    $('#phone').val(`(${result.calling_code}) `);
    $('#country-flag').html(result.emoji_flag);
    document.title = `Evaluación de Competencias Desempeño Laboral | ${result.country_name} - Acsendo`

    // MX, CO, BR, CONOSUR

    const NAME_CONT = $('#Name');

    const CO_ADRESS = "Carrera 12 # 96-49 Bogotá, Colombia.";
    const MX_ADRESS = "Varsovia 36 · Col Juarez. Ciudad de México, México";
    const CL_ADRESS = "Avenida Apoquindo 5950, Las Condes, Santiago Chile";

    const JULIANA = `<img src="img/juliana.png" alt="Juliana">`;
    const EDUARDO = `<img src="img/eduardo.png" alt="Eduardo">`;
    const DANIEL = `<img src="img/daniel.png" alt="Daniel">`;
    const SEBASTIAN = `<img src="img/sebastian.png" alt="Sebastian">`;
    const ALEJANDRO = `<img src="img/alejandro.png" alt="Alejandro">`;

    switch (result.country_code) {
      case 'CO':
        $('#imgClients').attr('src','img/logos-colombia.jpg');
        $('#address').text(CO_ADRESS);
        $('#sdr').html(DANIEL);
        NAME_CONT.text('¡Hola, soy Daniel!');
      break;
      case 'MX':
        $('#imgClients').attr('src','img/logos-mexico.jpg');
        $('#address').text(MX_ADRESS);
        $('#sdr').html([EDUARDO,ALEJANDRO]);
        NAME_CONT.text('¡Hola!');
      break;
      case 'CL':
      case 'AR':
      case 'UY':
      case 'PY':
      case 'BO':
        $('#imgClients').attr('src','img/logos-cono.jpg');
        $('#address').text(CL_ADRESS);
        $('#sdr').html(SEBASTIAN);
        NAME_CONT.text('¡Hola, soy Sebastian!');
      break;
      case 'PE':
      case 'EC':
      case 'PA':
      case 'CR':
      case 'SV':
      case 'DO':
        $('#imgClients').attr('src','img/logos-centro.jpg');
        $('#address').text(CO_ADRESS);
        $('#sdr').html(JULIANA);
        NAME_CONT.text('¡Hola, soy Juliana!');
      break;
      default:
        $('#imgClients').attr('src','img/logos-colombia.jpg');
        $('#address').text(CO_ADRESS);
        $('#sdr').html(DANIEL);   
        NAME_CONT.text('¡Hola, soy Daniel!');
    }
  });
}
let webmail = null;
function verifyEmail(email) {
  $.getJSON(`https://api.hunter.io/v2/email-verifier?email=${email}&api_key=f4606747f1c3bbfe28b879bbe953ba1fa1fc72e8`, function(res) {
    webmail = res.data
    console.log(webmail)
  })
}


// carga asincronica de las imagenes
var bLazy = new Blazy({
  selector: '.lazyImg' // all images
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
        $(".header").addClass("fixed-header");
    } else {
        $(".header").removeClass("fixed-header");
    }
});


$(document).ready(function(){
  findCountry();
  $('#contacto2').hide();
  $('#loading-form').hide();
  $('#step_2').hide();
  $('#videoSergio').hide();
  $('#VideoTestimonial').hide();
  $('.btn-movil').on('click', function() {
    $('.ContainerRight').addClass('form-active');
    $('#CloseForm').show();
  });

  $('#CloseForm').on('click', function() {
    $('.ContainerRight').removeClass('form-active');
    $('#CloseForm').hide();
  });

  descargar();
});

jQuery.validator.addMethod("webmail",  function(value, element) {
  verifyEmail(value);
  if($('#job_title').val() == 'Consultor de RRHH') {
    webmail.webmail = false;
  } 
  if (!webmail.webmail && webmail.smtp_check && webmail.smtp_server) {
    return true
  } else {
    return false
  }

}, 'Por favor usa una cuenta de correo corporativo');

// Validacion del formulario 1
$('#contacto').validate(  {
  rules: {
    name: {
      required: true,
      minlength: 5
    },
    phone: {
      required: true,
      minlength: 9
    },
    email: {
      required: true,
      email: true,
      webmail: true
    },
    company: {
      required: true
    },
    empleados: {
      required: true
    },
    job_title: {
      required: true
    },
  },
  messages: {
    name: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    phone: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    email: {
      required: "Por favor escribe tu E-mail",
      email: "Escribe un E-mail valido"
    },
    company: {
      required: "Por favor escribe el nombre de tu empresa",
    },
    empleados: {
      required: "Por favor seleccione una opción",
    },
    job_title: {
      required: "Por favor seleccione una opción",
    }
  },
  submitHandler: function(form) {
    //cargar();
    const MAIN_EMAIL = $('#email').val(); 
    const JOB_TITLE = $('#job_title').val();
    const EMPLOYS = $('#empleados').val();
    $('#loading-form').fadeIn();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      window.localStorage.setItem('email', MAIN_EMAIL);
      const res = JSON.parse(data);
      ga('send', 'event', 'Convertion', 'Submit Form', 'Submit 1st Form');
      // console.log(res);
      
      if (JOB_TITLE == 'Otro') {
        sendMixPannel1();
        window.location.href = "?content=Gracias-por-contactarnos";
      } else if (EMPLOYS == '1-10' || EMPLOYS == '11-30') {
        if (JOB_TITLE == 'Consultor') {
          $('#init').fadeOut(400);
          $('#contacto').hide();
          $('#loading-form').fadeOut(400);
          $('#email2').val(MAIN_EMAIL);
          $('#contacto2').fadeIn(400);
          $('#step_2').fadeIn(400);
          sendMixPannel1();
        } else {
          sendMixPannel1();
          window.location.href = "?content=Gracias-por-tu-interes";
        }
      } else {
        $('#init').fadeOut(400);
        $('#contacto').hide();
        $('#loading-form').fadeOut(400);
        $('#email2').val(MAIN_EMAIL);
        $('#contacto2').fadeIn(400);
        $('#step_2').fadeIn(400);
        sendMixPannel1();
      }
 
      // var params = parsedUrl.param();
      // console.log(params);
    })
  }
});

function sendMixPannel1() {
    const MAIN_EMAIL = $('#email').val();
    const NOMBRE = $('#name').val();
    const CARGO = $('#job_title').val();
    const EMPRESA = $('#company').val();
    const EMPLEADOS = $('#empleados').val();
    const TELEFONO = $('#phone').val();

    mixpanel.alias(MAIN_EMAIL);

    mixpanel.people.set({
      '$email': MAIN_EMAIL,
      '$name': NOMBRE,
      'Cargo': CARGO,
      'Empresa': EMPRESA,
      'Telefono': TELEFONO,
      'Numero de empleados': EMPLEADOS,
      'Fecha de registro': new Date()
    });

    mixpanel.track('Registro Landing Flex Uno',
      {
        'Nombre' : NOMBRE,
        'Email' : MAIN_EMAIL,
        'Cargo': CARGO,
        'Empresa': EMPRESA,
        'Telefono': TELEFONO,
        'Numero de empleados': EMPLEADOS,
        'Fecha de registro' : new Date()
    });
}


// Validacion del formulario
$('#contacto2').validate(  {
  rules: {
    product: {
      required: true
    },
    sector: {
      required: true
    },
    dolor: {
      required: true
    },
    message: {
      required: true
    }
  },
  messages: {
    product: {
      required: "Por favor completa este campo"
    },
    sector: {
      required: "Por favor selecciona un sector"
    },
    dolor: {
      required: "Por favor selecciona una opción"
    },
    message: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form) {
    cargar();
    $.post('includes/validation_2.php',$('#contacto2').serialize())
    .done(function(data){
      // $('.form-control').val('');
      const res = JSON.parse(data);
      descargar();
      // $('#contacto2').slideDown();
      //console.log(res);
      ga('send', 'event', 'Convertion', 'Submit Form 2', 'Submit 2nd Form');
      sendMixPannel2();
      window.location.href = "?content=Nos-contactaremos-pronto";
    })
  }
});

function sendMixPannel2() {
    const MAIN_EMAIL = $('#email2').val();
    const SECTOR = $('#sector').val();
    const PRODUCTO = $('#product').val();
    const DOLOR = $('#dolor').val();
    const MENSAJE = $('#message').val();

    mixpanel.alias(MAIN_EMAIL);

    mixpanel.people.set({
      'Sector': SECTOR,
      'Producto de interes': PRODUCTO,
      'Dolor': DOLOR,
      'Mensaje': MENSAJE,
      'Fecha de registro': `${new Date()}`
    });

    mixpanel.track('Registro Landing Flex Dos',
    {
      'Sector': SECTOR,
      'Producto de interes': PRODUCTO,
      'Dolor': DOLOR,
      'Mensaje': MENSAJE,
      'Fecha de registro' : `${new Date()}`
    });
}


// Validacion del formulario
$('#formGracias').validate(  {
  rules: {
    mensaje: {
      required: true
    }
  },
  messages: {
    mensaje: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form) {
    cargar();
    $.post('includes/send_mail.php',$('#formGracias').serialize())
    .done(function(data){
      // $('.form-control').val('');
      const res = data;
      descargar();
      console.log(res);
    })
  }
});


window.onbeforeunload = closingCode;
function closingCode(){
   // do something...
   const LOCATION = window.location.pathname;
   if(LOCATION == '/demos/Evaluacion-de-desempeno-competencias-laborales/') {
    ga('send', 'event', 'Close Page', `${LOCATION}`, 'Page Close');
   }
   return null;
}

