<!-- Carousel Start -->
<div id="home" class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
                        echo '<a href="#" class="btn btn-primary py-md-3 px-md-5 me-3" style="margin-left: 250px;">Order</a>';
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

<!-- Carousel End -->    <!-- Carousel End -->


     <!-- Products Start -->
    <div class="container-fluid py-5" id="product">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Items</h6>
                <h1 class="display-5">Electronic products</h1>
            </div>
            
            <div class="owl-carousel product-carousel  product-carousel-2 px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/p1.jpg" alt="">
                        <h6 class="mb-3">Iphone</h6>
                        <h5 class="text-primary mb-0">25000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/l2.jpg" alt="">
                        <h6 class="mb-3">Acer Laptop</h6>
                        <h5 class="text-primary mb-0">35000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/t1.jpg" alt="" style="height: 190px; width: 550px;">
                        <h6 class="mb-3">TV</h6>
                        <h5 class="text-primary mb-0">55000 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/f1.png" alt="" style="height: 190px;">
                        <h6 class="mb-3">Fridge</h6>
                        <h5 class="text-primary mb-0">250 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="<?php echo base_url('assets/home/plugins');?>/img/eco/b1.jpg" alt="" style="height: 190px;">
                        <h6 class="mb-3">Bag</h6>
                        <h5 class="text-primary mb-0">5200 Rs</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

        <!-- Testimonial Start -->

   <div class="container-fluid bg-testimonial-gro py-5 my-5">
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

   
    <!-- Banner Start -->


    <!-- About Start -->
      <?php
if (isset($_GET['id'])) {
    $clientID = $_GET['id'];
    $clientName = $_GET['first_name'];
    $clientEmail = $_GET['image'];

    $clientData = $this->crud_model->get_content_by_about($clientID);

    // Display client details
    echo '<div class="container-fluid about pt-5" id="about">';
    echo '<div class="container">';
    echo '<div class="row gx-5">';
    echo '<div class="col-lg-5 mb-5 mb-lg-0">';
    echo '<div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">';

    // Display the client image
    $imageFilename = $clientData ? $clientData->image : ''; // Get the image filename from the fetched data
    $imagePath = $imageFilename ? base_url('uploads/about/') . $imageFilename  : ''; // Construct the full image path

    echo '<img class="img-fluid mt-auto mx-auto" src="' . $imagePath . '" style="height: 1000px;">';

    echo '</div>';
    echo '</div>';
    echo '<div class="col-lg-7 pb-5">';
    echo '<div class="mb-3 pb-2">';

    // Display the client description
    $description = $clientData ? $clientData->description : 'No description available';
    echo $description;

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
    <!-- About End -->
    
    <!-- About End -->


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
    
    <div class="container-fluid bg-testimonial-2 py-5 my-5" id="services">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h1 class="display-5">TEAM</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel p-5">
                    <?php
                    if (isset($_GET['id'])) {
                        $clientID = $_GET['id'];
                        $faqs = $this->crud_model->get_content_by_team($clientID);

                        if ($faqs) {
                            
                            foreach ($faqs as $faq) {
                                echo '<div class="testimonial-item text-center text-white">';
                                $image_path = base_url('uploads/team2/') . $faq->id . '.jpg';
                                echo '<img class="img-fluid mx-auto p-2 border border-5 rounded-circle mb-4" src="' . $image_path . '" alt="">';

                                echo '<p class="fs-5">' . $faq->first_name . '</p>';
                                echo '<hr class="mx-auto w-25">';
                                echo '<h4 class="text-white mb-0">' . $faq->review . '</h4>';
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

    <!-- Team End -->
   
        <!-- Dynamic FAQ -->
<div class="page">
    <div class="content">
        <aside>
            <h1>FAQ</h1>
            <p>We understand that you may have questions about our baked goods, so we've compiled a list of frequently asked questions to help you find the information you need.</p>
            <img src="<?php echo base_url('assets/home/plugins'); ?>/img/food/pizza.png">
        </aside>
        <main>
            <h2>Product Information</h2>

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
    </div>
</div>



    <!-- Dynamic FAQ -->



    <!-- Dynamic FAQ -->