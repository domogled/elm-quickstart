<?php
var_dump($argv);
$skript = array_shift($argv);
$debug = in_array('--debug', $argv);
$typescript = in_array('--typescript', $argv);
// var_dump($argv);
?>

<html>
  <head>
    <script type="text/javascript" src="dist/bundle.js"></script>
  </head>
  <body>
    <div id="elm-app"></div>
  </body>
  <script src="./js/app.js"></script>
  <script type="text/javascript">
      var elmDiv = document.getElementById('elm-app');
      Elm.Main.embed(elmDiv);
  </script>

  <?php
    if ($typescript) {
      ?>
      
  <script src="./js/index.js"></script>
  <?php
  }
  ?>


  
  <?php
    if ($debug) {
      ?>
      
  <script src="http://localhost:8081/livereload.js?snipver=1"></script>
  <?php
  }
  ?>
</html>
