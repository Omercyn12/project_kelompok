<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/tuk_bimalukar.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="icon" href="./images/icon.png">
    <link rel="icon" href="./images/icon.png">
    <title>Destinasi | Tuk Bimalukar</title>
  </head>
  <body id="home">
    <header>
      <!-- navigation -->
      <section class="navigation">
        <div class="container">
          <div class="box-navigation animate__animated animate__fadeInDown">
            <div class="box">
                <h1 style="  text-decoration: overline underline; color:#fff; ">Visit to Dieng</h1>
            </div>
            <div class="box menu-navigation">
              <ul>
                <li>
                  <i class="ri-home-3-line"></i>
                  <a href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li>
                  <i class="ri-information-line"></i>
                  <a href="#about">Tentang</a>
                </li>
                <li>
                  <i class="ri-dashboard-line"></i>
                  <a href="#gallery">Galeri</a>
                </li>
                <select onchange="location = this.value;">
                    <option value="Destination">Destinasi Wisata</option>
                    <option value="Candi">Candi Arjuna</option>
                    <option value="Kawah_Sikidang">Kawah Sikidang</option>
                    <option value="Bukit_Scooter">Bukit Scooter</option>
                    <option value="Telaga_Warna">Telaga Warna</option>
                    <option value="Tuk_Bimalukar">Tuk Bimalukar</option>
                </select>
              </ul>
            </div>
            <div class="box menu-bar">
              <i class="ri-menu-3-fill" style="color: white"></i>
            </div>
          </div>
        </div>
      </section>
      <!-- navigation -->

      <!-- hero -->
      <section class="hero">
        <h1 class="animate__animated animate__pulse">Tuk Bimalukar</h1>
      </section>
      <!-- hero -->
    </header>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="box-about">
          <div class="box" data-aos="fade-right" data-aos-duration="1000" data-aos-iteration="1">
            <h1>Tuk Bimalukar</h1>
            <p>
                Tuk Bima Lukar adalah sebuah lokasi sumber mata air yang berada di sisi jalan
                 masuk menuju kawasan Dataran Tinggi Dieng dari arah Wonosobo. Tuk Bima Lukar merupakan hulu dari
                 sungai Serayu yang mempunyai daya tarik tersendiri dengan keunikan dan mitos-mitos yang berkembang di
                 masyarakat sekitar. Tuk Bima Lukar memiliki beberapa spot wisata seperti mandi air jernih, berswafoto
                 kece dan tempat persinggahan gratis. Lokasi Tuk Bima Lukar berada di kawasan Wisata Dieng Jawa Tengah.
                Tepatnya berada di Desa Kalilembu, Dieng, Kecamatan Kejajar, Kabupaten Wonosobo, Jawa Tengah.
            </p>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-iteration="1">
            <img src="./images/tb8.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!-- destianion -->
    <section class="destination" id="gallery">
        <div class="slider" x-data="{start: true, end: false}">
            <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
              <div class="slider__item">
                <img class="slider__image" src="./images/tb1.jpg" alt="Image">
                <div class="slider__info">
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb3.jpg" alt="Image">
                <div class="slider__info">
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb5.jpg" alt="Image">
                <div class="slider__info">
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb7.jpg" alt="Image">
                <div class="slider__info">
                </div>
              </div>
            </div>
            <div class="slider__nav">
              <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
              <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
            </div>
          </div>
    </section>
    <!-- destination -->

    <!-- Footer -->
    <section class="contact" id="footer">
        <footer>
            <div class="footer">
            <div class="row">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            </div>

            <div class="row">
            <ul>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
            </div>

            <div class="row">
           Copyright © 2023 kel_6 - All rights reserved
            </div>
            </div>
            </footer>
    <!-- Footer -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js'></script>
    <script src="./js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
