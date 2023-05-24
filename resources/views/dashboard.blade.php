<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/app.css" />
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
    <title>Visit to Dieng</title>
  </head>
  <body id="home">
    <header>
      <!-- navigation -->
      <section class="navigation">
        <div class="container">
          <div class="box-navigation animate__animated animate__fadeInDown">
            <div class="box-logo">
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
                  <a href="#news">Berita</a>
                </li>
                    <select onchange="location = this.value;">
                        <option value="Destination">Destinasi Wisata</option>
                        <option value="Museum">Museum Kailasa</option>
                        <option value="Candi">Candi Arjuna</option>
                        <option value="Kawah_Sikidang">Kawah Sikidang</option>
                        <option value="Bukit_Scooter">Bukit Scooter</option>
                        <option value="Telaga_Warna">Telaga Warna</option>
                        <option value="Tuk_Bimalukar">Tuk Bimalukar</option>
                    </select>
                    <li>
                    <i class="ri-dashboard-line"></i>
                    <a href="">Unggah</a>
                    </li>
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
        <div class="box-wm">
            <h1 class="animate__animated animate__pulse">Dataran Tinggi Dieng</h1>
        </div>
      </section>
      <!-- hero -->
    </header>

    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="box-about">
          <div class="box" data-aos="fade-right" data-aos-duration="1000" data-aos-iteration="1">
            <h1>Dataran Tinggi Dieng</h1>
            <p>
                Dataran Tinggi Dieng adalah sebuah wilayah di pusat Jawa
                Tengah. Meskipun cukup terpencil, dataran tinggi Dieng telah lama menjadi kawasan pemukiman.
                Sejumlah bangunan peninggalan abad ke-8 masih dapat ditemukan, baik dalam keadaan masih berdiri
                ataupun telah menjadi reruntuhan.
            </p>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-iteration="1">
            <img src="./images/bs1.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- about -->

    <!-- destianion -->
    <section class="destination" id="destination">
        <div class="slider" x-data="{start: true, end: false}">
            <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
              <div class="slider__item">
                <img class="slider__image" src="./images/candi1.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Candi Dwarawati</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/candi2.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Candi Arjuna</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb8.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Tuk Bimalukar</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb7.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Papan Nama Tuk Bimalukar</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb9.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Taman Tuk Bimalukar</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/tb4.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Menara Pandang Tuk Bimalukar</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/ks.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Kawah Sikidang</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/Museum.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Museum Kailasa</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/telaga-warna.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Telaga Warna</h2>
                </div>
              </div>
              <div class="slider__item">
                <img class="slider__image" src="./images/bs.jpg" alt="Image">
                <div class="slider__info">
                  <h2>Bukit Scooter</h2>
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

    <!-- gallery -->
    <section class="gallery">
        <div class="container">
            <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-aos-iteration="1">
                <video id="video" autoplay muted loop>
                    <source src="./videos/Get Lost - Dieng Plateau.mp4" type="video/mp4">
                </video>
            </div>
         </div>
    </section>
    <!-- gallery -->

    <!-- news -->
    <section class="news" id="news">
      <div class="container">
        <div class="box-news">
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" data-aos-iteration="1">
            <img src="./images/candi-news.jpg" alt="" />
            <h1>5 Wisata Dieng yang Menawan, Cakep Buat Feed Instagram</h1>
            <p>Traveler yang hobi fotografi harus berkundjung ke Dataran Tinggi Dieng. Banyak spot menarik
                di wisata Dieng yang cakep buat dipajang di feed
                instagram kalian.</p>
            <button class="btn">Baca Selengkapnya</button>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" data-aos-iteration="1">
            <img src="./images/sikidang-news.jpg" alt="" />
            <h1>Terpikat Kemolekan Kawah Sikidang</h1>
            <p>Kawah Sikidang di kab Banjarnegara, Jawa Tengah menjadi primadona traveler di akhir pekan.
                Walau hujan tidak menghalangi pelancong datang.
            </p>
            <button class="btn">Baca Selngkapnya</button>
          </div>
          <div class="box" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" data-aos-iteration="1">
            <img src="./images/jembatan-khayangan.jpg" alt="" />
            <h1>Spot baru Kawah Sikidang, ada Jembatan Khayangan sepanjang 1 km</h1>
            <p>Ada yang berbeda di Objek wisata Kawah Sikidang di tahun 2023. Tidak hanya menyuguhkan
                 pemandangan kawah. namun juga jembatan kayu sepanjang 1 kelimoter</p>
            <button class="btn">Baca Selengkapnya</button>
          </div>
        </div>
      </div>
    </section>
    <!-- news -->


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
