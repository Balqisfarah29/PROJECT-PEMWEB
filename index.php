<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ruang Rasa</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Ruang</h1>
        <span> Rasa</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#bestseller">Best Seller</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.php#book-a-table">Book a Table</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Mari Menikmati Sejuta Rasa <br>Di Kedai Kami</h1>
            <p data-aos="fade-up" data-aos-delay="100"></p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="#book-a-table" class="btn-get-started">Book a Table</a>
              <a href="https://youtu.be/Wce0LdKKKIk?si=4dbKPiqA2xBriV_z" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/kopi-removebg-preview.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><br></h2>
        <p><span>Tentang</span> <span class="description-title">Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/2024-03-05.jpg" class="img-fluid mb-4" alt="">
            <div class="book-a-table">
              <h3>Contact Us</h3>
              <p>+628571624174</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">

              <ul>
              <p>
              Selamat datang di Cafe Ruang Rasa!
              Tempat di mana rasa, suasana, dan kenangan bersatu menjadi pengalaman yang tak terlupakan. Kami hadir dengan semangat menciptakan ruang santai yang nyaman untuk menikmati setiap momen bersama keluarga dan teman.

              </p>
              <p class="fst-italic">
              Kenapa memilih Kedai kami?
              </p>
                <li><i class="bi bi-check-circle-fill"></i> <span>Menu inovatif yang menggabungkan citarasa tradisional dan modern.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Tempat yang nyaman dengan desain yang hangat dan estetik.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pelayanan ramah dan profesional yang membuat Anda merasa di rumah.</span></li>
              </ul>
          

              <div class="position-relative mt-4">
                <img src="assets/img/2024-08-09.jpg" class="img-fluid" alt="">
                <a href="https://youtu.be/Wce0LdKKKIk?si=4dbKPiqA2xBriV_z" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p><span>Best</span> <span class="description-title">Seller<br></span></p>
      </div><!-- End Section Title -->

    <!-- Best Seller Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/bestseller1.jpg)">
              <h3></h3>
              <div class="price align-self-start">Burger</div>
              <p class="description">
              Daging sapi yang juicy, roti lembut, dan pilihan topping segar seperti sayuran crispy serta saus spesial menciptakan sensasi lezat yang menggugah selera. Setiap gigitan memberikan pengalaman makan yang memuaskan, menjadikannya pilihan favorit di antara pelanggan kami.            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/bestseller2.jpg)">
              <h3></h3>
              <div class="price align-self-start">Nasi Goreng</div>
              <p class="description">
              Dipadukan dengan bahan-bahan segar dan pilihan topping seperti ayam, telur, atau seafood, nasi goreng ini menawarkan sensasi rasa yang menggugah selera.              </p>
            </div><!-- End Best Seller item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/bestseller3.jpg)">
              <h3></h3>
              <div class="price align-self-start">Ice Latte dan Croissant</div>
              <p class="description">
              Berkat kombinasi sempurna antara kopi berkualitas dan pastry yang lezat. Iced latte dengan rasa kopi yang kuat dan creamy memberikan sensasi segar yang pas untuk dinikmati kapan saja.               </p>
            </div><!-- End Best Seller item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/bestseller4.jpg)">
              <h3></h3>
              <div class="price align-self-start">Pizza</div>
              <p class="description">
              Dengan adonan yang tipis dan renyah, disertai saus tomat yang kaya rasa dan keju leleh yang melimpah, pizza ini menawarkan pengalaman makan yang memuaskan.              </p>
            </div><!-- End Best Seller item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Best Seller Section -->



    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Ruang Rasa Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Main Course</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Coffe</Menu></h4>
            </a><!-- End tab nav item -->

          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Non Coffe</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Dessert</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Main Course</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu (1).png" class="menu-img img-fluid" alt=""></a>
                <h4>Pizza</h4>
                <p class="ingredients">
                Adonan pizza renyah dengan topping keju mozzarella leleh, saus tomat spesial, dan pilihan topping seperti pepperoni, ayam, atau sayuran.</p>
                <p class="price">
                  IDR 95K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu (5).png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Goreng</h4>
                <p class="ingredients">
                Hidangan nasi goreng khas dengan bumbu rempah yang gurih, dilengkapi dengan telur, ayam, dan sayuran segar. Cocok untuk pecinta cita rasa Indonesia.</p>
                <p class="price">
                  IDR 45K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu (3).png" class="menu-img img-fluid" alt=""></a>
                <h4>Salad</h4>
                <p class="ingredients">
                Kombinasi sayuran segar seperti selada, tomat, mentimun, dan wortel, disajikan dengan dressing pilihan untuk kesegaran sehat setiap saat.</p>
                <p class="price">
                  IDR 75K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu (4).png" class="menu-img img-fluid" alt=""></a>
                <h4>Sandwich</h4>
                <p class="ingredients">
                Hidangan praktis dengan roti lapis isi daging, keju, sayuran segar, dan saus pilihan, cocok untuk dinikmati kapan saja.</p>
                <p class="price">
                  IDR 25K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu (2).png" class="menu-img img-fluid" alt=""></a>
                <h4>Burger</h4>
                <p class="ingredients">
                Hidangan praktis dengan roti lapis isi daging, keju, sayuran segar, dan saus pilihan, cocok untuk dinikmati kapan saja.</p>
                <p class="price">
                  IDR 75K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu (6).png" class="menu-img img-fluid" alt=""></a>
                <h4>Spagetti</h4>
                <p class="ingredients">
                Pasta Italia klasik yang lembut, disajikan dengan saus pilihan seperti bolognese yang kaya daging                </p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Coffe</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/Esspreso.png" class="menu-img img-fluid" alt=""></a>
                <h4>Esspreso</h4>
                <p class="ingredients">
                Kopi hitam murni yang kaya rasa dan aroma, diseduh dengan tekanan tinggi untuk menghasilkan cita rasa kuat dan autentik.</p>
                <p class="price">
                  IDR 30K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/Americano.png" class="menu-img img-fluid" alt=""></a>
                <h4>Americano</h4>
                <p class="ingredients">
                Perpaduan espresso dengan air panas, menciptakan rasa kopi yang lebih ringan namun tetap penuh karakter.</p>
                <p class="price">
                  IDR 25K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/Latte.png" class="menu-img img-fluid" alt=""></a>
                <h4>Latte</h4>
                <p class="ingredients">
                Kombinasi espresso dengan susu steamed yang lembut, menghasilkan rasa creamy dan seimbang, sempurna untuk pecinta kopi dengan sentuhan ringan.</p>
                <p class="price">
                  IDR 30K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/Iced_Caramel_Macchiato.png" class="menu-img img-fluid" alt=""></a>
                <h4>Caramel Machiato</h4>
                <p class="ingredients">
                Perpaduan sempurna espresso, susu steamed yang creamy, dan sirup karamel manis, ditambah topping karamel drizzle yang menggoda</p>
                <p class="price">
                  IDR 45K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/mocha.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mocha</h4>
                <p class="ingredients">
                Campuran espresso, cokelat, dan susu steamed yang creamy, menciptakan minuman kopi yang manis dengan sentuhan rasa cokelat hangat.</p>
                <p class="price">
                  IDR 40K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/Dalgona Coffee.png" class="menu-img img-fluid" alt=""></a>
                <h4>Dalgona Coffee</h4>
                <p class="ingredients">
                Tren kopi modern dengan lapisan busa kopi yang lembut dan manis di atas susu dingin, memberikan pengalaman rasa yang unik dan menyenangkan.</p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Non Coffe</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/iced_tea-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Iced Tea</h4>
                <p class="ingredients">
                Teh dingin klasik yang menyegarkan, disajikan dengan es batu untuk menemani hari Anda dengan kesegaran sempurna.
                </p>
                <p class="price">
                  IDR 20K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/mineral_water-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Mineral Water</h4>
                <p class="ingredients">
                Air mineral premium dengan rasa murni dan bersih, berasal dari sumber alami di kepulauan Fiji.</p>
                <p class="price">
                  IDR 30K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/thai_tea-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Thai Tea</h4>
                <p class="ingredients">
                Minuman khas Thailand yang kaya rasa, terbuat dari teh hitam aromatik, susu kental manis, dan sentuhan rempah, disajikan dingin untuk kenikmatan otentik.</p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/lemon_tea-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Lemon Tea</h4>
                <p class="ingredients">
                Perpaduan sempurna teh segar dengan perasan lemon alami, memberikan rasa asam dan manis yang menyegarkan.</p>
                <p class="price">
                  25K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/Blackcurrant_Mojito-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Blackcurrant_Mojito</h4>
                <p class="ingredients">
                Minuman unik dengan rasa blackcurrant manis dan asam, dipadukan dengan daun mint segar dan soda untuk kesegaran ekstra.</p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/cookies___cream-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cookies and Cream</h4>
                <p class="ingredients">
                Minuman creamy dengan campuran biskuit renyah dan krim lembut, menciptakan rasa manis dan lezat yang memanjakan lidah.</p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dessert</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/dessert 1..png" class="menu-img img-fluid" alt=""></a>
                <h4>Croissants</h4>
                <p class="ingredients">
                Pastry berlapis asal Prancis dengan tekstur renyah di luar dan lembut di dalam. Memiliki rasa mentega yang kaya dan sempurna dinikmati dengan kopi atau teh.</p>
                <p class="price">
                  IDR 75K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/dessert 2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Soft Cookies</h4>
                <p class="ingredients">
                Dengan rasa yang lembut dan chewy dengan tekstur yang meleleh di mulut. Tersedia dengan berbagai isian cokelat chip dan kacang almond.</p>
                <p class="price">
                  $14.95
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/dessert 3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Croffle</h4>
                <p class="ingredients">
                Perpaduan unik antara croissant dan waffle. Akan disajikan dengan topping manis seperti sirup maple, madu, atau es krim.                </p>
                <p class="price">
                  IDR 35K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/dessert 4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Macaron</h4>
                <p class="ingredients">
                Tersedia dalam berbagai rasa dan warna, dari cokelat, vanila, hingga rasa buah-buahan.                </p>
                <p class="price">
                  IDR 25K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/dessert 5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Cromboloni</h4>
                <p class="ingredients">
                Donat ala Italia dengan tekstur lembut, diisi dengan berbagai rasa dengan taburan gula halus di atasnya menambah cita rasa manis yang nikmat.                </p>
                <p class="price">
                  IDR 55K
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/dessert 6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Crepe Cake</h4>
                <p class="ingredients">
                Kue lapis tipis berbahan dasar crepe dengan tekstur ringan dan lembut. Dilapisi krim lembut di antara lapisan, menciptakan harmoni rasa yang sempurna.                </p>
                <p class="price">
                  IDR 30K
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TESTIMONIALS</h2>
        <p>What Are They <span class="description-title">Saying About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>"Pengalaman saya di cafe ini luar biasa! Makanan dan minumannya selalu lezat, terutama burger dan iced latte yang jadi favorit saya. Porsinya pas dan rasanya selalu konsisten. Suasana cafe juga nyaman, cocok untuk bersantai atau berkumpul dengan teman. Pelayanan yang ramah membuat saya selalu ingin kembali lagi. Cafe ini benar-benar jadi pilihan utama saya!"
                        </span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Tanboy Kun</h3>
                      <h4>Food Vloger </h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/tamboykun.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>"Untuk rasa dan pengalaman yang didapat, harganya bener-bener worth it! Nggak rugi sering-sering nongkrong di sini."</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ria SW</h3>
                      <h4>Food Vloger</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/Ria_SW.jpeg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>"Dekorasinya estetik banget, bikin nggak tahan buat foto-foto. Setiap sudut kafenya cantik, jadi banyak foto bagus buat di-post di Instagram!"</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Nashya</h3>
                      <h4>TikTokers</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/nashya.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>"Datang ke cafe ini rasanya seperti menemukan tempat pelarian sempurna. Interiornya cozy, musiknya santai, dan staffnya ramah banget. Cocok banget buat santai atau kerja!"</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ayman Alatas</h3>
                      <h4>Dokter</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/dokter.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p><span>Our</span> <span class="description-title">Team<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/balqis.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Balqis Farah Kamilah Muhadi</h4>
                <span>0110124147</span>
                <p></p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/nadya.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nadya Nurus Sakinah</h4>
                <span>0110124196</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/Enan.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Enan</h4>
                <span>0110124242</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/putra.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhammad Putra Pratama</h4>
                <span>0110124131</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/chefs/azar.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Azhar Maulana Achmad</h4>
                <span>0110124210</span>
                <p></p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Teams Section -->

    <!-- Book A Table Section -->
<section id="book-a-table" class="book-a-table section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Book A Table</h2>
    <p><span>Book Your</span> <span class="description-title">Stay With Us<br></span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row g-0" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/Reservasi.jpg);"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
        <!-- FORM -->
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          </div>
          <div class="text-center mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            <button type="submit">Book a Table</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

    </section><!-- /Book A Table Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022/p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+6285716243174</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@exagmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Senin-Sabtu:</strong> 11AM - 23PM; <strong>Minggu:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>Jl. Cipete Dalam No.33, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan.</p>
            <p>Daerah Khusus Ibukota Jakarta, 12410</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+6285716243174</span><br>
              <strong>Email:</strong> <span>info@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Senin-Sabtu:</strong> <span>11AM - 23PM</span><br>
              <strong>Minggu</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Ruang Rasa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>