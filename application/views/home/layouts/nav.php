<!-- nav.php -->

<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
    <!-- ... (existing code) ... -->
    <!-- <a href="<?= base_url(); ?>" class="navbar-brand">
        <img src="assets/images/logo.png" alt="Logo" width="120" height="40">
    </a> -->
     <?php
      
        if (isset($_GET['id'])) {
            $clientID = $_GET['id'];
            $clientName = $_GET['first_name'];
            $clientEmail = $_GET['email'];

            // Display client details
            echo '<img src="' . base_url('uploads/logo/') . $clientID . '.png" alt="User Image" class="rounded-circle" width="100" height="100">';
            /*echo '<h4 class="text-white mb-0">Name: ' . $clientName . '</h4>';
            echo '<h4 class="text-white mb-0">Email: ' . $clientEmail . '</h4>';*/

        } 
        ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- ... (existing code) ... -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="#home" class="nav-item nav-link">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#services" class="nav-item nav-link">Service</a>
            <a href="#product" class="nav-item nav-link">Product</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>

  <?php
      
        if (isset($_GET['id'])) {
            $clientID = $_GET['id'];
            $clientName = $_GET['first_name'];
            $clientEmail = $_GET['email'];

            // Display client details
            echo '<img src="' . base_url('uploads/client/') . $clientID . '.jpg" alt="User Image" class="rounded-circle" width="40" height="40">';
            /*echo '<h4 class="text-white mb-0">Name: ' . $clientName . '</h4>';
            echo '<h4 class="text-white mb-0">Email: ' . $clientEmail . '</h4>';*/

        } 
        ?>

    </div>
</nav>
