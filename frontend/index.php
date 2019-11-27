<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    ?>

    <title>Teste<?php if ($url!='' && $url!='home') echo ' - ' . ucwords($url);?></title>
    <link href="<?php echo INCLUDE_PATH; ?>estilo/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text:300,400,700|Quicksand:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="illis, tarefas">
    <meta name="description" content="Fala pro cliente que a normalização da data causou o bug na interpolação dinâmica de strings.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon"/>
</head>
<body>
  <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home';
      $url = explode('/', $url);

      if(file_exists('pages/'.$url[0].'.php'))
          include('pages/'.$url[0].'.php');
      else{
          $paginaCenter = true;
          include('pages/404.php');
      }
  ?>
  <script src="<?php echo INCLUDE_PATH; ?>js/lib/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</body>
</html>