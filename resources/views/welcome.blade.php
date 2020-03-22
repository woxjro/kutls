<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="京大硬庭 KUTLS の公式ホームページ。200名を超える関西最大級のテニスサークルである京大硬庭は、週５回各４時間京都市内のコートでテニスをしています。">
    <meta property="og:description" content="京大硬庭 KUTLS の公式ホームページ。200名を超える関西最大級のテニスサークルである京大硬庭は、週５回各４時間京都市内のコートでテニスをしています。">
    <meta name="keywords" content="KUTLS,京大硬庭,テニサー,京都,テニス,京大,サークル,関西">
    <meta property="og:title" content="KUTLS 京大硬庭 : 関西最大級のテニスサークル">
    <meta property="og:type" content="website">
    <title>KUTLS 京大硬庭 : 関西最大級のテニスサークル</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/background_nonIOS.css') }}" rel="stylesheet" id="nonIOSCSS">
    <link href="{{ asset('css/background_IOS.css') }}" rel="stylesheet" id="IOSCSS">

    <link href="{{ asset('js/packages/core/main.css')}}" rel='stylesheet' />
    <link href="{{ asset('js/packages/daygrid/main.css')}}" rel='stylesheet' />
    <link href="{{ asset('js/packages/timegrid/main.css')}}" rel='stylesheet' />
    <link href="{{ asset('js/packages/list/main.css')}}" rel='stylesheet' />
    <script src="{{ asset('js/packages/core/main.js')}}"></script>
    <script src="{{ asset('js/packages/interaction/main.js')}}"></script>
    <script src="{{ asset('js/packages/daygrid/main.js')}}"></script>
    <script src="{{ asset('js/packages/timegrid/main.js')}}"></script>
    <script src="{{ asset('js/packages/list/main.js')}}"></script>
    <script>
      var date = new Date();
      var year  = date.getFullYear();
      var month = date.getMonth() + 1;
      var day = date.getDay();
      if(month<10) month = "0"+String(month);
      if(day<10) day = "0"+String(day);

      var ymd = String(year) + "-" + String(month) + "-" + String(day);

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
          height: 500,

          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridDay,listWeek'
          },
          defaultView: 'dayGridMonth',
          defaultDate: ymd,
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events

          events: [
            {
              title: 'All Day Event',
              start: ymd,
            },
            {
              title: 'Long Event',
              start: '2019-08-07',
              end: '2019-08-10'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2019-08-09T16:00:00'
            },
            {
              groupId: 999,
              title: 'Repeating Event',
              start: '2019-08-16T16:00:00'
            },
            {
              title: 'Conference',
              start: '2019-08-11',
              end: '2019-08-13'
            },
            {
              title: 'Meeting',
              start: '2019-08-12T10:30:00',
              end: '2019-08-12T12:30:00'
            },
            {
              title: 'Lunch',
              start: '2019-08-12T12:00:00'
            },
            {
              title: 'Meeting',
              start: '2019-08-12T14:30:00'
            },
            {
              title: 'Happy Hour',
              start: '2019-08-12T17:30:00'
            },
            {
              title: 'Dinner',
              start: '2019-08-12T20:00:00'
            },
            {
              title: 'Birthday Party',
              start: '2019-08-13T07:00:00'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2019-08-28'
            }
          ]

        });

        calendar.render();
      });

    </script>


    <script>
        const isIOS = /[ \(]iP/.test(navigator.userAgent);
        function switchStyleSheet(){
            console.log(isIOS);
            if (isIOS) {
                document.getElementById('nonIOSCSS').disabled = true;
                document.getElementById('IOSCSS').disabled = false;
            }else{
                document.getElementById('nonIOSCSS').disabled = false;
                document.getElementById('IOSCSS').disabled = true;
            }
        }
        switchStyleSheet();


    </script>

    <!-- Get minor updates and patch fixes within a major version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha256-UzFD2WYH2U1dQpKDjjZK72VtPeWP50NoJjd26rnAdUI=" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
      <div id="loader-bg" class="is-hide">
          <div id="loader" class="is-hide">
              <p>
                  <img src="{{ asset('img/loading.gif')}}"><br>
              </p>
          </div>
      </div>
      <script>
          function sleep(msec) {
             return new Promise(function(resolve) {
                setTimeout(function() {resolve()}, msec);
             })
          }
          async function stopload2() {
              //await sleep(2000);
              await bg.classList.add('fadeout-bg');
              await loader.classList.add('fadeout-loader');
          }



          var bg = document.getElementById('loader-bg'),
              loader = document.getElementById('loader');
          /* ロード画面の非表示を解除 */
          bg.classList.remove('is-hide');
          loader.classList.remove('is-hide');

          /* 読み込み完了 */
          window.addEventListener('load', stopload2);

          /* 10秒経ったら強制的にロード画面を非表示にする */
          setTimeout('stopload2()',8000);

          /* ロード画面を非表示にする処理 */
          function stopload(){
              stop();
              bg.classList.add('fadeout-bg');
              loader.classList.add('fadeout-loader');
          }
      </script>
    <header>
      <div class="container">

        <nav class="global-nav">
          <ul class="global-nav__list">
            <li class="global-nav__item"><div><a id="nav-link1" ontouchstart="" data-scroll href="#ABOUT">ABOUT</a></div></li>
            <li class="global-nav__item"><div><a id="nav-link2" ontouchstart="" data-scroll href="#WORKS">WORKS</a></div></li>
            <li class="global-nav__item"><div><a id="nav-link3" ontouchstart="" data-scroll href="#ACTIVITY">ACTIVITY</a></div></li>
            <li class="global-nav__item"><div><a id="nav-link4" ontouchstart="" data-scroll href="#CONTACT">CONTACT</a></div></li>
            <li class="global-nav__item"><div><a id="nav-link5" ontouchstart="" data-scroll href="#SCHEDULE">SCHEDULE</a></div></li>
            @if (Route::has('login'))
                @auth
                    <li class="global-nav__item"><div><a id="nav-link6" ontouchstart="" data-scroll href="{{ url('/home') }}">HOME</a></div></li>
                @else
                    <li class="global-nav__item"><div><a id="nav-link7" ontouchstart="" data-scroll href="{{ route('login') }}">LOGIN</a></div></li>
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
        <p>&emsp;京大硬庭(KUTLS)は今年で<span style="color:#d81b60;">55年目</span>を迎える<span style="color:#d81b60;">関西最大規模</span>のテニスサークルです。</p>
        <p>&emsp;構成人数は、男子150人・女子100人。京大・同志社・京都女子大・同志社女子大など様々な大学から構成されています。</p>
        <p>&emsp;<span style="color:#d81b60;">平日毎日4時間</span>練習が行われており、好きなタイミングで練習に参加することができます。</p>
        <p>&emsp;また、セレクション・男女比制限・入会締め切り等の<span style="color:#d81b60">制限は設けていません</span>。</p>
        <p>&emsp;テニスの実力も<a href="#WORKS" style="color:#d81b60;">トップクラス</a>のサークルですが、様々な趣味を持った会員がいるため、テニス以外での結びつきが強いのも特徴です。</p>
        <p id="lastP">&emsp;新歓期は、各種イベント・アフター無料なので、ぜひ気軽にご参加ください。その際は<a href="#CONTACT">CONTACT</a>から事前に連絡していただくようお願いします。</p>
        <div class="swiper-container" id="swiperContainer">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950460.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950462.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950463.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950464.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950465.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950467.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14950468.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958786.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958788.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958789.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958790.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958791.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958792.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958793.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958794.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958795.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958796.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958797.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958799.jpg')}})"></div>
              <div class="swiper-slide" style="background-image:url({{ asset('img/slideShow/S__14958801.jpg')}})"></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>





      </div>
    </div>


    <div id="MIDDLE"class="middle-wrapper"></div>
    <a id="WORKS" class="anchor"></a>
    <div class="contents-wrapper WORKS">
      <div class="container">
        <h1>WORKS</h1>
        <p style="font-size:18px;">
            京大ALL&nbsp<span style="color:#d81b60">7</span>名 <span style="color:#d81b60">オールウェスト</span>在籍
        </p>
        <div class="works-group">
            <div class="works-detail">
                <h2>木下杯</h2>
                <table>
                    <tr>
                        <td>男子シングルス</td>
                        <td>オープン</td>
                        <td>優勝</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>フレッシュ</td>
                        <td>準優勝</td>
                    </tr>
                    <tr>
                        <td>女子シングルス</td>
                        <td>オープン</td>
                        <td>優勝</td>
                    </tr>
                </table>
            </div>
            <div class="works-detail">
                <h2>K4 クラブチャンピオンシップ</h2>
                <table>
                    <tr>
                        <td>男子</td>
                        <td>ベスト8</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>女子</td>
                        <td>優勝</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                </table>

            </div>
        </div>

        <div class="works-group">
            <div class="works-detail">
                <h2>FKU団体戦・個人戦</h2>
                <table>
                    <tr>
                        <td>男子</td>
                        <td>ダブルス</td>
                        <td>準優勝</td>
                    </tr>
                    <tr>
                        <td>女子</td>
                        <td>シングルス</td>
                        <td>準優勝</td>
                    </tr>
                    <tr>
                        <td>総合</td>
                        <td>&nbsp</td>
                        <td>準優勝</td>
                    </tr>
                </table>
            </div>
            <div class="works-detail">
                <h2>K4 ミックスクラブチャンピオンシップ</h2>
                <table>
                    <tr>
                        <td>準優勝</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="works-group">
            <div class="works-detail">
                <h2>KTA CUP 個人戦・団体戦</h2>
                <table>
                    <tr>
                        <td>準優勝</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>
                    <tr>
                        <td>ベスト4</td>
                        <td>ベスト8</td>
                        <td>&nbsp</td>
                    </tr>

                </table>
            </div>
            <div class="works-detail">
                <h2>K4 フレッシュクラブチャンピオンシップ</h2>
                <table>
                    <tr>
                        <td>準優勝</td>
                        <td>&nbsp</td>
                        <td>&nbsp</td>
                    </tr>

                </table>
            </div>
        </div>


      </div>
    </div>


    <div id="ACTIVITY-IMG" class="activity-wrapper"></div>
    <a id="ACTIVITY" class="anchor"></a>
    <div class="contents-wrapper ACTIVITY">
      <div class="container">
        <h1>ACTIVITY</h1>
        <p class="discription">&emsp;平日毎日4時間、西院テニスコート・中書島テニスコート・(小畑川テニスコート)で練習を行っています。</p>
        <p class="discription">自分の生活に合わせて練習に参加する事ができます。</p>
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


    <div id="CONTACT-IMG"class="contact-wrapper"></div>
    <a id="CONTACT" class="anchor"></a>
    <div class="contents-wrapper CONTACT">
      <div class="container">
        <h1>CONTACT</h1>
        <p>公式Twitterでは、毎日の練習日程、練習状況をアナウンスしています。</p>
        <p>新歓SNSでは、練習風景や新歓イベントなどの情報を流しています。</p>
        <p>新歓イベント参加・練習体験を希望される方は、どのSNSでも構いませんのでDMでご一報ください。</p>
        <div class="row">
            <div class="cell">
                <p>新歓用instagram</p>
               <a href="https://instagram.com/kutls_2020?r=nametag" target=”_blank”><img src="../img/instagram.jpg" style="width:310px;" alt="" class="blinking"></a>
            </div>

            <div class="cell twitterTimeLine">
                <p>公式twitter</p>
               <a class="twitter-timeline" data-width="310" data-height="530" data-theme="dark" href="https://twitter.com/KUTLS_official?ref_src=twsrc%5Etfw">Tweets by KUTLS_official</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

            <div class="cell twitterTimeLine">
                <p>新歓用twitter</p>
               <a class="twitter-timeline" data-width="310" data-height="530" data-theme="dark" href="https://twitter.com/Kutls2020?ref_src=twsrc%5Etfw">Tweets by Kutls2020</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>




      </div>
    </div>


    <div id="BOTTOM" class="bottom-wrapper"></div>
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

  <script>
    var $ABOUT_last_p = document.getElementById('lastP');
    var $swiperContainer = document.getElementById('swiperContainer');
    const rectP = $ABOUT_last_p.getBoundingClientRect();
    var ABOUT_last_p_top = rectP.top + (window.pageYOffset || document.documentElement.scrollTop);
    console.log("lastP:"+String(ABOUT_last_p_top));
    if(window.screen.width <= 500){
        $swiperContainer.style.top　=  (ABOUT_last_p_top+300)+ 'px';
    }


    if (isIOS) {
      var $backIMG1 = document.getElementById('TOP');
      var $backIMG2 = document.getElementById('MIDDLE');
      var $backIMG3 = document.getElementById('ACTIVITY-IMG');
      var $backIMG4 = document.getElementById('CONTACT-IMG');
      var $backIMG5 = document.getElementById('BOTTOM');

      const rect1 = $backIMG1.getBoundingClientRect();
      const rect2 = $backIMG2.getBoundingClientRect();
      const rect3 = $backIMG3.getBoundingClientRect();
      const rect4 = $backIMG4.getBoundingClientRect();
      const rect5 = $backIMG5.getBoundingClientRect();

      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      var backIMG1_top = rect1.top + scrollTop;
      var backIMG2_top = rect2.top + scrollTop;
      var backIMG3_top = rect3.top + scrollTop;
      var backIMG4_top = rect4.top + scrollTop;
      var backIMG5_top = rect5.top + scrollTop;

      var windowH = window.screen.height;

      scrollYStart1 = backIMG1_top - windowH;
      scrollYStart2 = backIMG2_top - windowH;
      scrollYStart3 = backIMG3_top - windowH;
      scrollYStart4 = backIMG4_top - windowH;
      scrollYStart5 = backIMG5_top - windowH;
      window.addEventListener('scroll',function(event){
        var scrollY = window.scrollY;
        if(scrollY > scrollYStart1){
          $backIMG1.style.backgroundPositionY　=  (scrollY - backIMG1_top)*0.4+ 'px';
        }else{
          $backIMG1.style.backgroundPosition　=  'center top';
        }

        if(scrollY > scrollYStart2){
          $backIMG2.style.backgroundPositionY　=  (scrollY - backIMG2_top)*0.4+ 'px';
        }else{
          $backIMG2.style.backgroundPosition　=  'center top';
        }

        if(scrollY > scrollYStart3){
          $backIMG3.style.backgroundPositionY　=  (scrollY - backIMG3_top)*0.4+ 'px';
        }else{
          $backIMG3.style.backgroundPosition　=  'center top';
        }

        if(scrollY > scrollYStart4){
          $backIMG4.style.backgroundPositionY　=  (scrollY - backIMG4_top)*0.4+ 'px';
        }else{
          $backIMG4.style.backgroundPosition　=  'center top';
        }

        if(scrollY > scrollYStart5){
          $backIMG5.style.backgroundPositionY　=  (scrollY - backIMG5_top)*0.4+ 'px';
        }else{
          $backIMG5.style.backgroundPosition　=  'center top';
        }
      })
    }
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
  <script src="https://unpkg.com/swiper/js/swiper.js"></script>
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script>
      if(window.innerWidth>500){
          var swiper = new Swiper('.swiper-container', {
          effect: 'coverflow',
          loop: true,
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: 'auto',
          coverflowEffect: {
            rotate: 38,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
    }else{
        var swiper = new Swiper('.swiper-container', {
          effect: 'cube',
          grabCursor: true,
          loop: true,
          cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
          },
          pagination: {
            el: '.swiper-pagination',
          },
        });
    }

    console.log(window.innerWidth);
  </script>

</html>
