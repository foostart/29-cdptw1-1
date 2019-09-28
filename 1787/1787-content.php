 <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1787">
    <div class="container ">
      <div class="mx-auto text-center">
        <div class="swiper-container">
            <div class="parallax-bg about" style="background-image:linear-gradient(to bottom,rgba(22,22,22,.3) 0,rgba(22,22,22,.7) 75%,#161616 100%),url(./img/bg-type-1787.jpg)" data-swiper-parallax="-23%"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="title" data-swiper-parallax="-300"><h1 class="mx-auto text-uppercase">Grayscale</h1>
                        </div>
                        <div class="subtitle" data-swiper-parallax="-200">
                        <h2 class="text-white-50 mx-auto">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
                        </div>
                        <div class="text" data-swiper-parallax="-100">
                          <a href="#" class="btn btn-primary ">Get Started</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title" data-swiper-parallax="-300"><h1 class="mx-auto text-uppercase">Graysdcdsdddcale</h1>
                        </div>
                        <div class="subtitle" data-swiper-parallax="-200">
                        <h2 class="text-white-50 mx-auto">áiohffffffffffffffsdfdsdsddđ</h2>
                        </div>
                        <div class="text" data-swiper-parallax="-100">
                          <a href="#" class="btn btn-primary">Get Started</a>
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