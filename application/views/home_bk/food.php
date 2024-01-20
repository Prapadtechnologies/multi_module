
<!-- Carousel Start -->

    <div id="home" class="container-fluid p-0">
        <!-- <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                    <?php
                        if (isset($_GET['id'])) {
                        $clientID = $_GET['id'];

                        $banners = $this->crud_model->get_content_by_banner($clientID);

                        if ($banners) {
                            $i = 0;
                            foreach ($banners as $banner) {
                                $image_path = base_url('uploads/wrapper/') . $banner['id'] . '.jpg';
                                $active_class = ($i == 0) ? 'active' : ''; 

                                echo '<div class="carousel-item ' . $active_class . '">';
                                        echo '<img class="w-100" src="' . $image_path . '" alt="">';
                                        echo '<div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">';
                                             echo '<div class="text-start p-5" style="max-width: 900px;">';
                                                /*echo '<a href="#" class="btn btn-primary py-md-3 px-md-5 me-3" style="margin-left: 250px;">Order</a>';*/
                                            echo '</div>';
                                        echo '</div>';
                                echo '</div>';
                                $i++;
                            }
                        } else {
                            echo '<p>No banners found for the specified ID.</p>';
                        }
                    }
                    ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- Carousel End -->


<!-- About start -->
    <?php
    if (isset($_GET['id'])) {
        $clientID = $_GET['id'];
        $clientName = $_GET['first_name'];
        $clientEmail = $_GET['image'];

        $clientData = $this->crud_model->get_content_by_about($clientID);
        ?>

        <div data-aos="fade-right" class="container-fluid about pt-5 mt-5" id="about">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="d-flex h-90 border border-5 border-primary border-bottom-2 pt-2">
                            <?php 
                            // Display the client image
                            $imageFilename = $clientData ? $clientData->image : ''; 
                            $imagePath = $imageFilename ? base_url('uploads/about/') . $imageFilename  : ''; 
                            echo '<img  class="img-fluid mt-auto mx-auto" src="' . $imagePath . '" style="height: 500px;">';
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-7 pb-5">
                        <div class="mb-3 pb-2">
                            <h4 class="text-primary text-uppercase">About Us</h4>
                            <?php 

                            $description = $clientData ? $clientData->description : 'No description available';
                            echo $description;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

<!-- About End -->

<!-- Services -->
    <div data-aos="zoom-out" id="services" class="container">
        <div class="page">
            <h1 class="text-center mt-5 mb-3 py-2">Services</h1>
        </div>

        <div class="card__container">
            <?php
            if (isset($_GET['id'])) {
                $clientID = $_GET['id'];
                $clientName = $_GET['first_name'];
                $clientEmail = $_GET['image'];

                $services = $this->crud_model->get_content_by_services($clientID);

                foreach ($services as $service) {
                    ?>
                    <div class="card__bx" style="--clr: #3498db;"> <!-- Set your desired color here -->
                        <div class="card__data">
                            <div class="card__icon">
                                <i class="fa-brands fa-searchengin"></i>
                            </div>
                            <div class="card__content">
                                <h3><?= $service->items ?></h3>
                                <p><?= $service->review ?></p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>


<!-- Services -->

<!-- Facts Start -->
    <div class="container-fluid bg-primary facts py-5 mb-5">
        <div class="container py-5">
            <div class="row gx-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-star fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Our Experience</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Orders</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-check fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Complete Project</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-mug-hot fs-4 text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white">Happy Clients</h5>
                            <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->




<!-- Team Start -->
    
    <div class="container-fluid " id="team">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h1 class="display-5">TEAM</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel p-2">
                        <?php
                        if (isset($_GET['id'])) {
                            $clientID = $_GET['id'];
                            $faqs = $this->crud_model->get_content_by_team($clientID);

                            if ($faqs) {

                                foreach ($faqs as $faq) {
                                    echo '<div class="testimonial-item text-center text-white">';
                                    $image_path = base_url('uploads/team2/') . $faq->id . '.jpg';
                                    echo '<img class="img-fluid mx-auto p-2 border border-5 rounded-circle mb-4" style="height: 300px; width: 300px;" src="' . $image_path . '" alt="">';

                                    echo '<p class="fs-5 orange">' . $faq->first_name . '</p>';
                                    echo '<hr class="mx-auto orange-hr w-25">';
                                    echo '<h4 class="text-dark mb-0">' . $faq->review . '</h4>';
                                    echo '</div>';
                                }
                            } else {
                                echo '<p>No team members found for the specified ID.</p>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ! Teams End -->



    <!-- Products Start -->
    <div data-aos="zoom-in" id="product" class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Items</h6>
                <?php
                if (isset($_GET['id'])) {
                    $clientID = $_GET['id'];
                    $product = $this->crud_model->get_content_by_product($clientID);
                /*print_r($product);
                die();*/

                if ($product) {
                    foreach ($product as $row) {
                        echo '<h1 class="display-5">' . $row['heading'] . '</h1>';
                    }
                } else {
                    echo '<p>No products found for the specified ID.</p>';
                }
            }
            ?>
        </div>
        <div class="owl-carousel product-carousel bg-secondary px-5">
            <?php
            if (isset($_GET['id']) && $product) {
                foreach ($product as $row) {
                    echo '<div class="pb-5">';
                    echo '<div class="product-item position-relative bg-white d-flex flex-column text-center">';
                    $image_path = base_url('uploads/product/') . $row['image'];
                    echo '<img class="img-fluid mb-4" src="' . $image_path . '" alt="' . $row->name . '">';
                    echo '<h6 class="mb-3">' . $row['name'] . '</h6>';
                    echo '<h5 class="text-primary mb-0">' . $row['product_rs'] . ' Rs</h5>';

                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Products End -->


<!-- Dynamic FAQ -->
<div data-aos="fade-right" id="faqs" class="container-fluid py-5 mb-5">
    <div class="container">

        <aside>
            <h1 class="text-center mb-5">Frequently Asked Questions </h1>
            
            <main>


                <?php
                if (isset($_GET['id'])) {
                    $clientID = $_GET['id'];


                    $faqs = $this->crud_model->get_content_by_faq($clientID);

                    if ($faqs) {
                    // Loop through each FAQ and display it
                        foreach ($faqs as $faq) {
                            echo '<details>';
                            echo '<summary>' . $faq->question . '</summary>';
                            echo '<p>' . $faq->answer . '</p>';
                            echo '</details>';
                        }
                    } else {
                        echo '<p>No FAQs found for the specified ID.</p>';
                    }
                }
                ?>
            </main>
        </aside>
    </div>
</div>



<!-- Testimonial Start -->
    <div data-aos="fade-right" class="container-fluid bg-testimonial-gro ">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel p-5">
                    <?php
                    if (isset($_GET['id'])) {
                        $clientID = $_GET['id'];
                        
                        $faqs = $this->crud_model->get_content_by_testomonial($clientID);

                        if ($faqs) {
                            foreach ($faqs as $faq) {
                                echo '<div class="testimonial-item text-center text-white">';
                                $image_path = base_url('uploads/testomonial/') . $faq['id'] . '.jpg';
                                echo '<img class="img-fluid mx-auto p-2 border border-5 rounded-circle mb-4" src="' . $image_path . '" alt="">';

                                echo '<p class="fs-5">' . $faq['name'] . '</p>';
                                echo '<hr class="mx-auto w-25">';
                                echo '<h4 class="text-white mb-0">' . $faq['review'] . '</h4>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>No team members found for the specified ID.</p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Testimonial End -->



<!-- Services -->

<!-- <div id="services" class="container">
    <div class="page">
        <h1 class="text-center mt-5 mb-3 py-2">Services</h1>
        
    </div>
  <div class="card__container">
    <div class="card__bx" style="--clr: #89ec5b">
      <div class="card__data">
        <div class="card__icon">
          <i class="fa-solid fa-paintbrush"></i>
        </div>
        <div class="card__content">
          <h3>Food</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="card__bx" style="--clr: #eb5ae5">
      <div class="card__data">
        <div class="card__icon">
          <i class="fa-solid fa-code"></i>
        </div>
        <div class="card__content">
          <h3>Free Delivey</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
    <div class="card__bx" style="--clr: #5b98eb">
      <div class="card__data">
        <div class="card__icon">
          <i class="fa-brands fa-searchengin"></i>
        </div>
        <div class="card__content">
          <h3>Explore Business solution</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>

</div> 
Services -->

