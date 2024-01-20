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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Multiple Themes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <?php
    include_once('style.php');
  ?>
<style type="text/css">
  .whatsapp1{
    position: fixed;
    right: 24px;
    bottom: 150px;
    z-index: 100;
    width: 40px;
    height: 40px;
  }
  .tele{
    position: fixed;
    right: 22px;
    bottom: 86px;
    z-index: 100;
    width: 40px;
    height: 40px;
  }
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <?php
    include_once('top.php');
  ?>
  <!-- ======= Header ======= -->
  <!-- End Header -->
  <?php
    include_once('nav.php');
  ?>
  
  <?php
    $this->load->view('home/' . $page_name);
  ?>
  
  <!-- Whats app -->
  <a href="tel:<?= $phoneNumber; ?>" target="_blank" class="whatsapp1 " ><img src=<?php echo base_url('assets/home/plugins/png/call.png') ?> alt="WhatsApp Chat" style="height: 45px;width: 45px;"></a>


    
         <a href="//api.whatsapp.com/send?phone=<?= $phoneNumber; ?>&amp;text=Hi%20there!" target="_blank" class="tele" ><img src=<?php echo base_url('assets/home/plugins/png/whatsapp.png') ?> alt="WhatsApp Chat" style="height: 45px;width: 45px;"></a>


  <!-- Whats app -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
    include_once('script.php');
  ?>

</body>

</html>