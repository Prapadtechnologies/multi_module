<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <?php
                if (isset($_GET['id'])) {
                    $clientID = $_GET['id'];

                    $banners = $this->crud_model->get_content_by_banner($clientID);

                    if ($banners) {
                        foreach ($banners as $index => $banner) {
                            $activeClass = ($index === 0) ? 'active' : '';
                            $imagePath = base_url('uploads/wrapper/') . $banner['id'] . '.jpg';

                            echo '<div class="carousel-item ' . $activeClass . '" style="background-image: url(' . $imagePath . ');">';
                            echo '<div class="carousel-container">';
                            echo '<div class="carousel-content">';
                            echo '<h2 class="animate__animated animate__fadeInDown"><span>' . $banner['title'] . '</span></h2>';
                            echo '<p class="animate__animated animate__fadeInUp">' . $banner['text'] . '</p>';
                           /* echo '<div>';
                            echo '<a href="' . $banner['menu_link'] . '" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>';
                            echo '<a href="' . $banner['table_link'] . '" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>';
                            echo '</div>';*/
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No banners found for the specified ID.</p>';
                    }
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>

<!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php
if (isset($_GET['id'])) {
    $clientID = $_GET['id'];

    
    $clientData = $this->crud_model->get_content_by_about($clientID);

    if ($clientData) {
        ?>
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                                        <?php
                    $imageFilename = $clientData ? $clientData->image : ''; 
                    $imagePath = $imageFilename ? base_url('uploads/about/') . $imageFilename : ''; 

                    // Check if the image path is not empty before rendering the div with background image
                    if (!empty($imagePath)) {
                        echo '<div class="col-lg-5 align-items-stretch " style="background-image: url(\'' . $imagePath . '\'); background-repeat: no-repeat;">';

                        echo '</div>';
                    } else {
                        echo '<p>No image available</p>';
                    }
                    ?>


                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
                        <div class="content">
                            <h3><?php echo $clientData->title; ?></h3>
                            <p><?php echo $clientData->description; ?></p>
                            <p class="fst-italic"><?php echo $clientData->paragraph2; ?></p>
                            <!-- <ul>
                                <li><i class="bx bx-check-double"></i> <?php echo $clientData->list_item1; ?></li>
                                <li><i class="bx bx-check-double"></i> <?php echo $clientData->list_item2; ?></li>
                                <li><i class="bx bx-check-double"></i> <?php echo $clientData->list_item3; ?></li>
                            </ul> -->
                            <p><?php echo $clientData->paragraph3; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
}
?>
<!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="services" class="why-us">
    <div class="container">

        <div class="section-title">
            <h2>Our <span>Services</span></h2>
            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">

            <?php
            // Check if 'id' parameter is set in the URL
            if (isset($_GET['id'])) {
                $clientID = $_GET['id'];
                $clientName = $_GET['first_name'];
                $clientEmail = $_GET['image'];

                // Assuming $this->crud_model->get_content_by_services() retrieves services for the given clientID
                $services = $this->crud_model->get_content_by_services($clientID);
                $i=1;
                // Loop through each service and display it
                foreach ($services as $service) {
                    ?>
                    <div class="col-lg-4">
                        <div class="box">
                            <span><?= $i++ ?></span>
                            <h4><?= $service->items ?></h4>
                            <p><?= $service->review ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>

    </div>
</section>
<!-- End Whu Us Section -->

    
    <!-- ======= Specials Section ======= -->
    <section id="faqs" class="specials">
    <div class="container py-5 mb-5">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked <span>Questions</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <?php
                        if (isset($_GET['id'])) {
                            $clientID = $_GET['id'];

                            $faqs = $this->crud_model->get_content_by_faq($clientID);

                            if ($faqs) {
                                foreach ($faqs as $index => $faq) {
                                    echo '<li class="nav-item">';
                                    echo '<a class="nav-link' . ($index == 0 ? ' active show' : '') . '" data-bs-toggle="tab" href="#tab-' . ($index + 1) . '">' . $faq->question . '</a>';
                                    echo '</li>';
                                }
                            } else {
                                echo '<p>No FAQs found for the specified ID.</p>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <?php
                        if ($faqs) {
                            foreach ($faqs as $index => $faq) {
                                echo '<div class="tab-pane' . ($index == 0 ? ' active show' : '') . '" id="tab-' . ($index + 1) . '">';
                                echo '<div class="row">';
                                echo '<div class="col-lg-12 details order-2 order-lg-1">';
                                /*echo '<h3>' . $faq->question . '</h3>';*/
                                echo '<p class="fst-italic">' . $faq->answer . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Specials Section -->

    
    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
    <div class="container">

        <div class="section-title">
            <h2>Our Professional <span>Team</span></h2>
            <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">

                <?php
    if (isset($_GET['id'])) {
        $clientID = $_GET['id'];
        $teams = $this->crud_model->get_content_by_team($clientID);

        if ($teams) {
            foreach ($teams as $team) {
              /*print_r($team);
              die();*/
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic">
                          <?php 
                             $image_path = base_url('uploads/team2/') . $team->id . '.jpg';
                           ?>
                            <img height="400px" width="350px" src="<?php echo $image_path; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?php echo $team->name; ?></h4>
                            <span><?php echo $team->role; ?></span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            }
        } else {
            echo '<p>No team members found for the specified ID.</p>';
        }
    }
    ?>

        </div>

    </div>
</section>
<!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="team" class="testimonials">
    <div class="container position-relative">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <?php
                if (isset($_GET['id'])) {
                    $clientID = $_GET['id'];
                    $teamMembers = $this->crud_model->get_content_by_testomonial($clientID);

                    if ($teamMembers) {
                        foreach ($teamMembers as $member) {
                            echo '<div class="swiper-slide">';
                            echo '<div class="testimonial-item">';
                            $imagePath = base_url('uploads/testomonial/') . $member['id'] . '.jpg';
                            echo '<img src="' . $imagePath . '" class="testimonial-img" alt="">';
                            echo '<h3>' . $member['name'] . '</h3>';
                            echo '<h4>' . $member->role . '</h4>';
                            echo '<div class="stars">';
                            for ($i = 0; $i < 5; $i++) {
                                echo '<i class="bi bi-star-fill"></i>';
                            }
                            echo '</div>';
                            echo '<p>';
                            echo '<i class="bx bxs-quote-alt-left quote-icon-left"></i>';
                            echo $member['review'] ;
                            echo '<i class="bx bxs-quote-alt-right quote-icon-right"></i>';
                            echo '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No team members found for the specified ID.</p>';
                    }
                }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>If you require any further information, feel free to contact me.</p>
        </div>
      </div>
              <?php
        if (isset($_GET['id'])) {
            $clientID = $_GET['id'];
            $clients = $this->crud_model->get_client_info();

            foreach ($clients as $client) {
                if ($client['id'] == $clientID) {
                    // Retrieve and use client information
                    $email = $client['email'];
                    $phoneNumber = $client['mobile'];
                    $address = $client['address'];
                }
            }
        }
        ?>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo $address; ?> <!-- <br>New York, NY 535022 --></p>
            </div>

            <!-- <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div> -->

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo $email; ?><!-- <br>contact@example.com --></p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo $phoneNumber; ?><!-- <br>+1 5589 22475 14 --></p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!-- <h3>Delicious</h3> -->
      <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><a href="https://www.prapadtechnologies.com/">Prapad Technologies</a></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
