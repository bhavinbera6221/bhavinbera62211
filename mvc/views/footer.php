
 <!-- footers 20 -->
 <section class="w3l-footers-20">
  <div class="footers20">
    <div class="container">
      <div class="footers20-content">
        <div class="d-grid grid-col-4 grids-content">
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-comments"></span></a>
            <a href="#url" class="title-small">Free consultation</a>
            <h4>Schedule a free consultation with our specialist.</h4>
            <a href="#buytheme" class="btn btn-style btn-primary"> Schedule now
              <span class="fa fa-long-arrow-right ml-2"></span> </a>
          </div>
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-phone"></span></a>
            <a href="#url" class="title-small">help desk</a>
            <h4>Do you have questions or want more infomation? Call Now</h4>
            <a href="tel:+1-2345-678-11">
              <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> +1-2345-678-11
              </p>
            </a>
          </div>
          <div class="column mt-lg-0 mt-md-5">
            <h4 class="mb-1">Signup for newsletter</h4>
            <p>and get latest news and updates</p>
            <form action="#" class="subscribe-form mt-4" method="post">
              <div class="form-group">
                <input type="email" name="subscribe" placeholder="Enter your email" required="">
                <button class="btn btn-style btn-primary">Subscribe</button>
              </div>
            </form>
            <ul class="footers-17_social">
              <h4 class="d-inline mr-4">Follow us</h4>
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="d-grid grid-col-3 grids-content1 bottom-border">
          <div class="columns copyright-grid align-self">
            <p class="copy-footer-29">© 2020 Estate sale. All rights reserved | Designed by <a
                href="https://w3layouts.com">W3layouts</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>