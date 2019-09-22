<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1786">
  <div class="container text-center about-section">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
          <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
          <a href="#">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
          <img src="img/ipad.png" class="img-fluid" alt="image">
      </div>
    </div>
  </div>
</div>