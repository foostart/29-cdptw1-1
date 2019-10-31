<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1786">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
          <div class="swiper-container">
          <div class="parallax-bg" style="background: linear-gradient(#5d4b4b 0,rgba(22,22,22,0) 75%,rgba(58,58,58,0.6) 100%);" data-swiper-parallax="-23%"></div>
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                      <a href="#">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                    </div>                    
                  </div>
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white">We need!</h2>
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                      <a href="#">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
                    </div> 
                  </div>
                   
              </div>
              <img src="img/1786-ipad.png" class="img-fluid" alt="image">
              <div class="swiper-pagination swiper-pagination-white"></div>
             <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
        </div>     
      </div>
    </div>
  </div>
</div>