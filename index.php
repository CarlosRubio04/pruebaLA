<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDDNRW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="loader" id="loader">
    <!-- <div class="hollow-dots-spinner" :style="spinnerStyle">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>  -->
    <img src="img/acsendito.gif" alt="Acsendo">
  </div>

    <?php require_once('blocks/header.php'); ?>
    <?php if(!isset($_REQUEST['content'])){
      require_once('blocks/home.php');
    }elseif($_REQUEST['content']=='Gracias-por-contactarnos'){
      require_once('blocks/gracias.php');
    }elseif($_REQUEST['content']=='Nos-contactaremos-pronto'){
      require_once('blocks/success.php');
    }elseif($_REQUEST['content']=='Gracias-por-tu-interes'){
      require_once('blocks/confirm.php');
    }else{
      require_once('blocks/404.php');
    }
    ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" async>
<link href="css/font-awesome.min.css" rel="stylesheet" async>
<link rel="stylesheet" href="css/font-awesome.min.css" rel="stylesheet" async>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" async>
<link href="css/styles.min.css" rel="stylesheet" async>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- All js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
  <script src="js/main.js"></script>
  <!-- <script src="js/main.min.js"></script> -->

  <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1fbacbf7-dd4f-4deb-ba34-63a6ded66864-loader.js" ></script>
</body>
</html>
