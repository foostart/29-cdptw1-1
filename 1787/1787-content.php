<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1787">
    <div class="container">
      <div class="mx-auto text-center">
        <h1 class="mx-auto text-uppercase">Grayscale</h1>
        <h2 class="text-white-50 mx-auto">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
        <a href="#" class="btn btn-primary">Get Started</a>
      </div>
    </div>
</div>