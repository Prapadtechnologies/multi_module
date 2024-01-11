<!-- nav.php -->

<nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
    <!-- ... (existing code) ... -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="#home" class="nav-item nav-link">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#services" class="nav-item nav-link">Service</a>
            <a href="#product" class="nav-item nav-link">Product</a>
            <a href="#contact" class="nav-item nav-link">Contact</a>
        </div>
        
        <!-- Display the user image and details in the navbar -->
  





  <?php
      
        if (isset($_GET['id']) && isset($_GET['first_name']) && isset($_GET['email'])) {
            $clientID = $_GET['id'];
            $clientName = $_GET['first_name'];
            $clientEmail = $_GET['email'];

            // Display client details
            echo '<img src="' . base_url('uploads/team2/') . $clientID . '.jpg" alt="User Image" class="rounded-circle" width="40" height="40">';
            /*echo '<h4 class="text-white mb-0">Name: ' . $clientName . '</h4>';
            echo '<h4 class="text-white mb-0">Email: ' . $clientEmail . '</h4>';*/

        } /*else {
            // Display team member details based on u_id
            $teams = $this->crud_model->get_team_info_with_clients();
            
            foreach ($teams as $row) {
                // Check if u_id is set and not empty
                if (isset($row['id']) && !empty($row['u_id'])) {
                    $image_path = base_url('uploads/team2/') . $row['id'] . '.jpg';
                    echo '<img src="' . $image_path . '" alt="User Image" class="rounded-circle" width="40" height="40">';
                    echo '<h4 class="text-white mb-0">User ID: ' . $row['u_id'] . '</h4>';
                    // Add other details you want to display
                }
            }
        }*/
        ?>

      
    </div>
</nav>
