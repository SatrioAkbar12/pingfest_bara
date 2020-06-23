<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('head_atribut')

  </head>

  <body class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top trn" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/">
         <img src="{{asset('img/pingfest-transparent.png')}}" class="d-inline-block align-top" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item @yield('home_active')">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @yield('itv_active')">
              <a class="nav-link" href="/it-venture">IT-Venture</a>
            </li>

            <li class="nav-item @yield('seminar_active')">
              <a class="nav-link" href="/seminar">Seminar</a>
            </li>

            @yield('login_daftar-logout')

          </ul>
        </div>
      </div>
    </nav>

    @yield('isi')

    <footer id="footer">
        <div class="footer-top bg-dark">
          <div class="container footer ">
            <div class="row">
              <div class="col-lg-4 col-md-6 footer-contact">
                <h4>Hubungi Kami</h4>
                <p class="contact-with-links">
                  Gedung A FMIPA UNS,<br>
                  Kecamatan Jebres,<br>
                  Kota Surakarta,<br>
                  Jawa Tengah 57126 <br>
                  <strong>Telepon</strong>: <a href="tel:+6281233814343">+62 812-3381-4343</a> (Ical)<br>
                  <span style="visibility:hidden;"><strong>Telepon</strong>: </span><a href="tel:+6282393667266">+62 823-9366-7266</a> (Ela)<br>
                  <strong>Surel</strong>: <a href="mailto:pingfest2019@gmail.com">pingfest2019@gmail.com</a><br>
                  <a href="https://twitter.com/pingfest" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="https://facebook.com/pg/pingfest2019" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.instagram.com/pingfest" class="instagram"><i class="fa fa-instagram"></i></a>

                </p>


              </div>
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Peta</h4>
                 <div class="embed-responsive embed-responsive-21by9">
                  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000!2d110.85813372914988!3d-7.558964770208452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1703aead1c11%3A0x8952c6ad35b2ccba!2sGedung+A+FMIPA+UNS!5e0!3m2!1sid!2sid!4v1566205773139!5m2!1sid!2sid"></iframe>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 footer-links ">
                <h4>Quicklink</h4>
                <ul>
                  <li><a href="/">Beranda</a></li>
                  <li><a href="/it-venture">IT-Venture</a></li>
                  <li><a href="/seminar">Seminar Nasional</a></li>
                  <li><a href="/donasi">Donasi</a></li>
                  <li><a href="/kontak">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>P!NGFEST UNS &copy; 2020</p>
        </div>
      </footer>

      <!-- Optional JavaScript -->
        <!-- jQuery first, the
  n Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>
      <script>$(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
          $(this).ekkoLightbox();
      });</script>

    </body>
  </html>
