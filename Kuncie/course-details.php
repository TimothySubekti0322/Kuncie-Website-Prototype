<?php
  session_start();
  require '../../function.php';
  $email = $_SESSION['email'];
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Course Details - Mentor Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
  <form action = "" method = "post">
    <!-- ======= Header ======= -->
    <header id="header" class="site-header fixed-top sps header-dark sps--abv">
        <div class="container-fluid d-flex align-items-center">
            <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <div>
                <div class="d-flex">
                    <div class="align-self-center elumine-site-logo col-8 offset-2">
                        <a href="index.php" class="logo me-auto"><img src="assets/img/kuncie_logo.png"
                                alt="Responsive image" class="img-fluid" /></a>
                    </div>
                </div>
            </div>

            <div class="header-container navbar navbar-toggleable-md navbar navbar-inverse justify-content-between">
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li>
                <a id="beranda" class="active" href="index-login.php"><i class="bi bi-house-fill" style="font-size: 1em; padding: 5px"></i> Beranda</a>
              </li>

              <!-- Mulai Kategori -->
              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-tags-fill" style="font-size: 1em; padding: 5px"></i>Kategori</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <!-- Bisnis -->
                  <li class="dropdown">
                    <a href="#"><span>Bisnis</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Dasar Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Branding</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Finansial Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Pengembangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Dana Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Tantangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Relasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Finansial Bisnis</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Industri -->
                  <li class="dropdown">
                    <a href="#"><span>Industri</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Fashion</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Ideal Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Industri Kreatif</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Film & TV</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Fotografi</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Pembuatan Konten</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Penulisan</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Seni Dan Kerajinan</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Seni Rupa</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Makanan & Minuman</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Barista</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Pembuatan Konten</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Keterampilan -->
                  <li class="dropdown">
                    <a href="#"><span>Keterampilan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Keterampilan Khusus</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Barista</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Film & TV</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Finansial Bisnis</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Fotografi</span></a>
                          </li>
                          <li>
                            <a href="kelas-bisnis.php"><span>Microsoft Office</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Pembuatan Konten</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Pengembangan Aplikasi</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Penulisan</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Pengembangan Diri</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Presentasi</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Profesional -->
                  <li class="dropdown">
                    <a href="#"><span>Profesional</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Keahlian Dunia Kerja</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Microsoft Office</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Persiapan Karir</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Presentasi</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Media Sosial</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Digital Marketing</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Tech</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="course-details.php"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Pengembangan Aplikasi</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Persiapan Karir</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li>
                <a href="pricing.php"><i class="bi bi-briefcase-fill" style="font-size: 1em; padding: 5px"></i>Kuncie Bersama</a>
              </li>

              <!-- Mulai Produk -->
              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-bag-check-fill" style="font-size: 1em; padding: 5px"></i>Produk</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <!-- Mini MBA -->
                  <li class="dropdown">
                    <a href=""><span>Kuncie Executive</span><i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="courses.php">Mini MBA SBM ITB</a></li>
                      <li><a href="courses.php">Mini MBA Political Marketing</a></li>
                      <li><a href="courses.php">Live MBA Strategy</a></li>
                      <li><a href="courses.php">Live MBA Leadership</a></li>
                    </ul>
                  </li>

                  <!-- Kuncie Sukses -->
                  <li class="dropdown">
                    <a href="#"><span>Kuncie Sukses</span><i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="courses.php">Komplit Data Analytics</a></li>
                      <li><a href="courses.php">Komplit Product Management</a></li>
                      <li><a href="courses.php">Komplit Quality Assurance</a></li>
                    </ul>
                  </li>
                  <!--Kuncie Komplit-->
                  <li class="dropdown">
                    <a href="#"><span>Kuncie Komplit</span><i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="courses.php">Komplit Barista Kopi</a></li>
                      <li><a href="courses.php">Komplit Perpajakan</a></li>
                      <li><a href="courses.php">Komplit Graphic Design</a></li>
                      <li><a href="courses.php">Komplit Career Preparation</a></li>
                    </ul>
                  </li>

                  <!-- Kelas -->
                  <li class="dropdown">
                    <a href="#"><span>Kelas</span><i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="courses.php">Kelas Jago</a></li>
                      <li><a href="courses.php">Promo Paket Kelas Istimewa</a></li>
                      <li><a href="courses.php">Microsoft Certification Program</a></li>
                    </ul>
                  </li>

                  <!-- WEBINAR -->
                  <li>
                    <a href="events.php">Webinar</a>
                  </li>

                  <!-- Kelas Bersama -->
                  <!-- <li>
                    <a href="pricing.php">Kelas Bersama</a>
                  </li> -->
                </ul>
              </li>
              <!-- End Produk -->

              <!--Mentor-->
              <li>
                <a href="trainers.php"><i class="bi bi-person-fill" style="font-size: 1em; padding: 5px"></i>Mentor</a>
              </li>
              <!-- Challenge -->
              <li>
                <a href="kuncie_challenge.php"><i class="bi bi-rocket-fill" style="font-size: 1em; padding: 5px"></i>Challenge</a>
              </li>

              <!-- Kuncie Store -->
              <li>
                <a href="kuncie_store.php"><i class="bi bi-bag-check-fill" style="font-size: 1em; padding: 5px"></i>Kuncie Store</a>
              </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-person-circle" style = "font-size : 20px" ></i>
                            </a>
                            <ul id="profile-dropdown">
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="../../login.php" value = "logout" name = "logout">Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" id="welcome">Hi , <?php echo $row['username']?>!</a>
                        </li>

                        <li style="visibility: hidden">
                            <a href="events.php">Webinar</a>
                        </li>
                    </ul>

                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
            <!-- .navbar -->
            <!-- <a href="courses.php" class="get-started-btn">Masuk</a> -->
        </div>
    </header>
    <!-- End Header -->
              
              <!--Mentor-->
              <li>
                <a href="trainers.html"><i class="bi bi-person-fill" style="font-size: 1em; padding: 5px"></i>Mentor</a>
              </li>
              <!-- Challenge -->
              <li>
                <a href="events.html"><i class="bi bi-rocket-fill" style="font-size: 1em; padding: 5px"></i>Challenge</a>
              </li>

              <!-- <li>
                <a href="kuncie_store.html"><i class="bi bi-cart-check-fill" style="font-size: 1em; padding: 5px"></i>Kuncie Store</a>
              </li> -->
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
        <!-- .navbar -->

        <!-- <a href="#" class="get-started-btn" style="border-radius: 40px; font-size: 20px">Masuk</a> -->
    <!-- End Header -->

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs" style="margin-top: 100px" data-aos="fade-in">
        <div class="container">
          <h2>Course Details</h2>
          <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.</p>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Cource Details Section ======= -->
      <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-8">
              <img src="assets/img/course-details.jpg" class="img-fluid" alt="" />
              <h3>Et enim incidunt fuga tempora</h3>
              <p>
                Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta. Nostrum ducimus est iure minima totam doloribus nisi ullam
                deserunt. Corporis aut officiis sit nihil est. Labore aut sapiente aperiam. Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia voluptatem adipisci et iusto provident doloremque consequatur. Quia et
                porro est. Et qui corrupti laudantium ipsa. Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
              </p>
            </div>
            <div class="col-lg-4">
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Trainer</h5>
                <p><a href="#">Walter White</a></p>
              </div>

              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Course Fee</h5>
                <p>$165</p>
              </div>

              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Available Seats</h5>
                <p>30</p>
              </div>

              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Schedule</h5>
                <p>5.00 pm - 7.00 pm</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Cource Details Section -->

      <!-- ======= Cource Details Tabs Section ======= -->
      <section id="cource-details-tabs" class="cource-details-tabs">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Architecto ut aperiam autem id</h3>
                      <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                      <p>
                        Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem
                        quaerat quos qui similique accusamus nostrum rem vero
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Et blanditiis nemo veritatis excepturi</h3>
                      <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                      <p>
                        Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode
                        pakto madirna desera vafle de nideran pal
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                      <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                      <p>
                        Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit
                        ullam. Soluta et harum voluptatem optio quae
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                      <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                      <p>
                        Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis
                        aperiam quia a laborum inventore
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                      <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                      <p>
                        Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Cource Details Tabs Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-6 footer-contact">
              <img src="assets/img/kuncie_logo_white.png" class="img-fluid col-lg-6 mb-4" alt="kuncie-logo" />
              <h2 style="color: white; font-weight: bold; font-family: Poppins">Platform pembelajaran terbaik untuk para profesional di Indonesia</h2>
              <div class="d-grid gap-2 d-md-block mt-3">
                <a href="#" role="button" class="btn btn-primary btn-lg me-2" type="button" style="border-radius: 50px; background-color: #1aa294; width: 35%"><i class="bi bi-google-play me-3"></i>Download Android</a>
                <a href="#" role="button" class="btn btn-primary btn-lg ms-2" type="button" style="border-radius: 50px; background-color: #1aa294; width: 35%"><i class="bi bi-apple me-3"></i>Download IOS</a>
              </div>
              <p class="mt-4">
                Layanan Pengaduan Konsumen<br />
                PT. Kuncie Pintar Nusantara<br />
                Email: <a style="color: #f4c474">support@kuncie.com</a>
              </p>
              <p class="mt-4">
                Direktorat Jenderal Perlindungan Konsumen dan Tertib Niaga<br />
                Kementerian Perdagangan Republik Indonesia<br />
                Whatsapp Ditjen PKTN: <a style="color: #f4c474">0853 1111 1010</a>
              </p>
            </div>

            <div class="col-lg-4 col-md-6 footer-links d-flex justify-content-end">
              <div class="container mt-4">
                <div class="row row-cols-1">
                  <div class="col">
                    <h4 class="me-1" style="color: #f4c474"><a href="#">HELP</a> | <a href="#"> HALO!</a> | <a href="#"> FAQ</a></h4>
                  </div>
                  <div class="col">
                    <h4 class="me-1" style="color: #f4c474"><a href="#">KEBIJAKAN PRIVASI</a> | <a href="#">SYARAT & KETENTUAN</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul> -->

      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; 2023. <strong><span>Komisarees</span></strong>
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0" style="background-color: white">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>
    <!-- <footer>
      <div class ="d-flex row">
        <div class ="d-flex column"></div>
      </div>
    </footer> -->
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
