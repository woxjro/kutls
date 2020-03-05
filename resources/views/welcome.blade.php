<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KUTLS</title>
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <!-- Get minor updates and patch fixes within a major version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />



  </head>
  <body>

    <header>
      <div class="container">

        <nav class="global-nav">
          <ul class="global-nav__list">
            <li class="global-nav__item"><a id="nav-link1" ontouchstart="" data-scroll href="#ABOUT">ABOUT</a></li>
            <li class="global-nav__item"><a id="nav-link2" ontouchstart="" data-scroll href="#WORKS">WORKS</a></li>
            <li class="global-nav__item"><a id="nav-link3" ontouchstart="" data-scroll href="#ACTIVITY">ACTIVITY</a></li>
            <li class="global-nav__item"><a id="nav-link4" ontouchstart="" data-scroll href="#CONTACT">CONTACT</a></li>
            <li class="global-nav__item"><a id="nav-link5" ontouchstart="" data-scroll href="#SCHEDULE">SCHEDULE</a></li>
            @if (Route::has('login'))
                @auth

                    <li class="global-nav__item"><a id="nav-link6" ontouchstart="" data-scroll href="{{ url('/home') }}">HOME</a></li>
                @else
                    <li class="global-nav__item"><a id="nav-link7" ontouchstart="" data-scroll href="{{ route('login') }}">LOGIN</a></li>
                @endauth
            @endif
          </ul>
        </nav>

        <div class="hamburger" id="js-hamburger">
          <span class="hamburger__line hamburger__line--1"></span>
          <span class="hamburger__line hamburger__line--2"></span>
          <span class="hamburger__line hamburger__line--3"></span>
        </div>

        <div class="black-bg" id="js-black-bg"></div>



        <div class="header-left">
          <p class="logo"><a ontouchstart="" data-scroll href="#TOP">.<span>KUTLS</span></a></p>
        </div>

        <div class="header-list">
          <ul>
            <li><a ontouchstart="" data-scroll href="#ABOUT">ABOUT</a></li>
            <li><a ontouchstart="" data-scroll href="#WORKS">WORKS</a></li>
            <li><a ontouchstart="" data-scroll href="#ACTIVITY">ACTIVITY</a></li>
            <li><a ontouchstart="" data-scroll href="#CONTACT">CONTACT</a></li>
            <li><a ontouchstart="" data-scroll href="#SCHEDULE">SCHEDULE</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a ontouchstart="" data-scroll href="{{ url('/home') }}">HOME</a></li>
                @else
                    <li><a ontouchstart="" data-scroll href="{{ route('login') }}">LOGIN</a></li>
                @endauth
            @endif
          </ul>
        </div>


      </div>

    </header>



    <div id="TOP"class="top-wrapper">
      <div class="container">
        <h1 ontouchstart="">.<span>KUTLS</span></h1>
        <!--
        <p ontouchstart=""><span>-</span>京<span>都</span>大<span>学</span>硬<span>式</span>庭<span>球同好会-</span></p>
      -->

      </div>
    </div>
    <a id="ABOUT" class="anchor"></a>
    <div id="ABOUT"class="contents-wrapper ABOUT">
      <div class="container">
        <h1>ABOUT</h1>
      </div>
    </div>

    <div class="middle-wrapper"></div>
    <a id="WORKS" class="anchor"></a>
    <div class="contents-wrapper WORKS">
      <div class="container">
        <h1>WORKS</h1>
      </div>
    </div>

    <div class="activity-wrapper"></div>
    <a id="ACTIVITY" class="anchor"></a>
    <div class="contents-wrapper ACTIVITY">
      <div class="container">
        <h1>ACTIVITY</h1>
        <div class="map-container">
          <div class="tennis-court-info">
            <p>西院テニスコート</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1378.7800237553784!2d135.7216873787844!3d35.00159440997739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600107adb00ac5e9%3A0xf5b049a2e353b5da!2z5Lqs6YO95biCIOilv-mZouWFrOWckg!5e0!3m2!1sja!2sjp!4v1582625874390!5m2!1sja!2sjp" width="540" height="405" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <a href="https://goo.gl/maps/pxduUGzMfuDhqhL66" target=”_blank”><i class="fas fa-external-link-square-alt"></i>&nbsp;Google Mapで開く</a>
          </div>
          <div class="tennis-court-info">
            <p>中書島テニスコート</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.266651919905!2d135.7549464151827!3d34.92484887868805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010ff36732d703%3A0x3d778fdeae47126e!2z5LyP6KaL5riv5YWs5ZyS44OG44OL44K544Kz44O844OI!5e0!3m2!1sja!2sjp!4v1582623369189!5m2!1sja!2sjp" width="540" height="405" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <a href="https://goo.gl/maps/88iZBkeW5mfD2um2A" target=”_blank”><i class="fas fa-external-link-square-alt"></i>&nbsp;Google Mapで開く</a>
          </div>

        </div>

      </div>
    </div>



    <div class="contact-wrapper"></div>
    <a id="CONTACT" class="anchor"></a>
    <div class="contents-wrapper CONTACT">
      <div class="container">
        <h1>CONTACT</h1>
        <div class="row">
          <div class="cell">
            <a href="https://instagram.com/kutls_2020?r=nametag" target=”_blank”><img src="../img/instagram.jpg" style="height:550px;" alt="" class="blinking"></a>
          </div>
          <div class="cell twitterTimeLine">
            <a class="twitter-timeline" data-width="330" data-height="550" data-theme="dark" href="https://twitter.com/KUTLS_official?ref_src=twsrc%5Etfw">Tweets by KUTLS_official</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="cell twitterTimeLine">
            <a class="twitter-timeline" data-width="330" data-height="550" data-theme="dark" href="https://twitter.com/Kutls2020?ref_src=twsrc%5Etfw">Tweets by Kutls2020</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

        </div>


      </div>
    </div>


    <div class="bottom-wrapper"></div>
    <a id="SCHEDULE" class="anchor"></a>
    <div class="contents-wrapper SCHEDULE">
      <div class="container">
        <h1>SCHEDULE</h1>
        <div id='calendar-container'>
          <div id='calendar'></div>
        </div>
        <!--
        <div class="calendar">
          <iframe src="https://calendar.google.com/calendar/embed?src=t6jvctv85v223lcopdlh60982k%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
        </div>
        -->
      </div>
    </div>


    <div class="message-wrapper"></div>

    <script>
      var scroll = new SmoothScroll('a[href*="#"]', {
        // Function. Custom easing pattern
        // If this is set to anything other than null, will override the easing option above
        customEasing: function (time) {

          // return <your formulate with time as a multiplier>

          // Example: easeInOut Quad
          return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

        }
      });


      function toggleNav() {
        var body = document.body;
        var hamburger = document.getElementById('js-hamburger');
        var blackBg = document.getElementById('js-black-bg');
        var navLink1 = document.getElementById('nav-link1');
        var navLink2 = document.getElementById('nav-link2');
        var navLink3 = document.getElementById('nav-link3');
        var navLink4 = document.getElementById('nav-link4');
        var navLink5 = document.getElementById('nav-link5');
        var navLink6 = document.getElementById('nav-link6');
        var navLink7 = document.getElementById('nav-link7');


        hamburger.addEventListener('click', function() {
          body.classList.toggle('nav-open');
        });
        blackBg.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink1.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink2.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink3.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink4.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink5.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink6.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
        navLink7.addEventListener('click', function() {
          body.classList.remove('nav-open');
        });
      }
      toggleNav();

    </script>

    <footer>
      <div class="container">
        <div class="footer-left">
          <p class="logo">©<span>1967-2020&nbsp;</span>.<span>KUTLS</span></p>
        </div>
        <div class="madeby">
          <p><a ontouchstart="" href="https://twitter.com/woxjro" target=”_blank”><span>made by&nbsp;</span>@woxjro</a></p>
        </div>
      </div>
    </footer>
  </body>



</html>
