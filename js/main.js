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
   
   // Replace the 'ytplayer' element with an <iframe> and
   // YouTube player after the API code downloads.
   var player;
   function onYouTubePlayerAPIReady() {
     player = new YT.Player('ytplayer', {
        height: '315',
        width: '560',
        videoId: 'b8n6XHcjshw',
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

// Cookie
function read_cookie(a){
  var b=a+"=";
  var c=document.cookie.split(";");
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

function findCountry() {
  $.getJSON('https://api.ipdata.co/?api-key=7836a4acdb465320d4436d3ce4bfdd37f004278fd8a2aabb0c6cce9d', function(result) {
    console.log(result)
    $('#country').val(result.country_name);
    $('#phone').val(`(${result.calling_code}) `);
    $('#country-flag').html(result.emoji_flag);

    // MX, CO, BR, CONOSUR

    const CO_ADRESS = "Carrera 12 # 96-49 Bogotá, Colombia.";
    const MX_ADRESS = "Varsovia 36 · Col Juarez. Ciudad de México, México";
    const CL_ADRESS = "Avenida Apoquindo 5950, Las Condes, Santiago Chile";

    switch (result.country_code) {
      case 'CO':
        $('#imgClients').attr('src','img/tres_logos.jpg');
        $('#address').text(CO_ADRESS);
      break;
      case 'MX':
        $('#imgClients').attr('src','img/tres_logos.jpg');
        $('#address').text(MX_ADRESS);
      break;
      case 'CL':
        $('#imgClients').attr('src','img/tres_logos.jpg');
        $('#address').text(CL_ADRESS);
      break;
      default:
        $('#imgClients').attr('src','img/tres_logos.jpg');
        $('#address').text(CO_ADRESS);      
    }
  });
}
let webmail = null;
function verifyEmail(email) {
  $.getJSON(`https://api.hunter.io/v2/email-verifier?email=${email}&api_key=0040ce09749c6875421b1026a971c4a49f30eab7`, function(res) {
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
  $('#VideoTestimonial').hide();
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
      minlength: 7
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
      minlength: "Escribe un E-mail valido"
    },
    company: {
      required: "Por favor selecciona un opsión",
    },
    empleados: {
      required: "Por favor selecciona un opsión",
    },
    job_title: {
      required: "Por favor completa este campo",
    }
  },
  submitHandler: function(form) {
    //cargar();
    const MAIN_EMAIL = $('#email').val(); 
    $('#loading-form').fadeIn();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      $('#init').fadeOut(400);
      $('#contacto').hide();
      //descargar();
      $('#loading-form').fadeOut(400);
      $('#email2').val(MAIN_EMAIL);
      $('#contacto2').fadeIn(400);
      $('#step_2').fadeIn(400);
      const res = JSON.parse(data);
      console.log(res);
      sendMixPannel1();


      var params = parsedUrl.param();
      console.log(params);
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
      required: "Por favor completa este campo",
    },
    sector: {
      required: true
    },
    dolor: {
      required: true
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
      console.log(res);
      sendMixPannel2();
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
