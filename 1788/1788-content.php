<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1788">
  <div class="container">
    <div class=" text-center">
     <div class="swiper-container">
          <div class="parallax-bg" style="background-image:url(./imges/1787-bg-red.jpg)" data-swiper-parallax="-23%"></div>
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white">We've got what you need!</h2>
                      <hr class="divider light my-4">
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                    </div>
                    <div class="text" data-swiper-parallax="-100">
                      <a href="#" class="btn btn-light btn-xl">Get Started</a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="title" data-swiper-parallax="-300">
                      <h2 class="text-white">We've got what you need!</h2>
                      <hr class="divider light my-4">
                    </div>
                    <div class="subtitle" data-swiper-parallax="-200">
                      <p class="text-white-50 mb-4">Choose the skill you want to practise today and improve your English at your own speed, whenever it's convenient for you</p>
                    </div>
                    <div class="text" data-swiper-parallax="-100">
                      <a href="#" class="btn btn-light btn-xl">Get Started</a>
                    </div>
                  </div>
              </div>
              <div class="swiper-pagination swiper-pagination-white"></div>
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white"></div>
        </div>
    </div>
  </div>
</div>

 