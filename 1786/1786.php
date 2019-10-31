<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1786.less', 'css/1786.css');
    
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>module 1786</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet"  />
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/1786.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/swiper.css">
        <script src="js/swiper.js"></script>
        <script src="js/jquery.min.js" ></script>
         <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1786.less', 'css/1786.css');
        ?>
    </head>
    <body>
         <?php  $dir_block.include'1786-content.php'; ?>
         <!-- javascrip swiper -->
         <script>
            var swiper = new Swiper('.swiper-container', {
              speed: 600,
              parallax: true,
              loop:true,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
			  autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          </script>
    </body>
</html>