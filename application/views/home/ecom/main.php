<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php
    include_once('style.php');
  ?>
</head>

<body>

  <!-- ======= Top Bar ======= -->
   <!--  -->
  
  <!-- ======= Header ======= -->
  	<?php
    include_once('nav.php');
  ?>

  <?php
    $this->load->view('home/' . $page_name);
  ?>
  <!-- End Header -->

  
  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- scripts -->
<?php
    include_once('script.php');
  ?>

</body>

</html>