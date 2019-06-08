<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>
  <!-- Google Tag Manager (noscript) -->
   
   
  <!-- End Google Tag Manager (noscript) -->

  <div class="loader" id="loader">
    <div class="orbit-spinner">
      <div class="orbit"></div>
      <div class="orbit"></div>
      <div class="orbit"></div>
    </div>
  </div>
    <?php require_once('blocks/header.php'); ?>
    <?php if(!isset($_REQUEST['content'])){
      require_once('blocks/home.php');
    }elseif($_REQUEST['content']=='features'){
      require_once('blocks/features.php');
    }else{
      require_once('blocks/404.php');
    }
    ?>
    <?php require_once('blocks/footer.php'); ?>
  <!-- All js -->

  <!-- <div id="fomo_feed"></div> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
  <script src="js/main.js"></script>

  <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1fbacbf7-dd4f-4deb-ba34-63a6ded66864-loader.js" ></script>
</body>
</html>
