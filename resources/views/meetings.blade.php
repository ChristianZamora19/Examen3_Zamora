<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

   

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Las mejores obras <em>de Teatro</em> en esta pagina web</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                      Zamora Web
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                      <li> <a href="{{route('index')}}" >Home</a></li>
                          <li><a href="{{route('meetings')}}" class="active">Obras</a></li>
                          <li><a href="{{route('meeting-details')}}">Teatros</a></li>
                          <li><a href="{{route('Api')}}">API DOG</a></li>
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Bienvenido al catalogo de Obras Teatrales</h6>
          <h2>Cual te interesa?</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">Todas las Obras</li>
                </ul>
              </div>
            </div>

            <?php
             $conn= mysqli_connect("wb39lt71kvkgdmw0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","n8cdvrjbtumpgcmb","qe7jxydkwih3kvvi","ypl4bjzai07vx2qv");
            ?>

         <?php
            $sql = "SELECT * FROM obras";
            $result = mysqli_query($conn, $sql);
            while($mostrar=mysqli_fetch_array($result)){
               ?>

          <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="price">
                    <span>$14.00</span>
                  </div>
                  <div class="date">
                    <h6>Nov <span>12</span></h6>
                  </div>
                  <a href=""><img src="/images/single-meeting.jpg" alt=""></a>
                </div>
                <div class="down-content">
                  <a href=""><h4><?php echo $mostrar['Nombre']?></h4></a>
                  <p>Director:<?php echo $mostrar['Director']?></p>
                  <p>Descripcion:<?php echo $mostrar['Descripcion']?></p>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="hours">
                        <h5>Horarios</h5>
                        <p>Lunes -  viernes: 07:00 AM - 13:00 PM<br>Sabado- Domingo: 09:00 AM - 15:00 PM</p>
                      </div>
                    </div>
    
                    <div class="col-lg-12">
                      <div class="share">
                        <h5>Share:</h5>
                        <ul>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Linkedin</a>,</li>
                          <li><a href="#">Behance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
            
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                  <li class="active"><a href="#">1</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a></p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/js/isotope.min.js"></script>
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/lightbox.js"></script>
    <script src="/js/tabs.js"></script>
    <script src="/js/isotope.js"></script>
    <script src="/js/video.js"></script>
    <script src="/js/slick-slider.js"></script>
    <script src="/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
