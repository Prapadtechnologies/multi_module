<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Styles -->
    <?php
    include_once('style.php');
    ?>
    <!-- Styles -->
    <style> body { font-family: Arial, sans-serif; } .contact-section { background-color: #f2f2f2; padding: 20px; } .contact-method { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; } .contact-method img { width: 40px; height: 40px; } .scroller { position: sticky; top: 0; background-color: #ffffff; padding: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); } </style>
</head>

<body>

    <!-- Navbar Start -->
    <?php
    include_once('nav.php');
    ?>
    <!-- Navbar End -->

    <!-- content pages -->
    <?php
    $this->load->view('home/' . $page_name);
    ?>
    <!-- content pages -->

    <!-- Contact us -->
    <?php
    include_once('contactus.php');
    ?>

    <!-- Footer Start -->
    <?php
    include_once('footer.php');
    ?>
    <!-- Footer End -->
    <?php
$whatsappNumber = $this->db->get_where('settings', array('setting_type' => 'whatsapp_number'))->row()->description;
?>

         <a href="tel:<?= $whatsappNumber; ?>" target="_blank" class="whatsapp1 " style=" position: fixed;
    right: 38px;
    bottom: 150px;
    z-index: 100;
    width: 40px;
    height: 40px;"><img src=<?php echo base_url('assets/home/plugins/png/call.png') ?> alt="WhatsApp Chat" style="height: 45px;width: 45px;"></a>


    
         <a href="//api.whatsapp.com/send?phone=<?= $whatsappNumber; ?>&amp;text=Hi%20there!" target="_blank" class="whatsapp1 " style=" position: fixed;
    right: 38px;
    bottom: 86px;
    z-index: 100;
    width: 40px;
    height: 40px;"><img src=<?php echo base_url('assets/home/plugins/png/whatsapp.png') ?> alt="WhatsApp Chat" style="height: 45px;width: 45px;"></a>


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- <a href="" class="back-to-top"><img src="<?php echo base_url('assets/home/plugins/png/whatsapp.png') ?>"></a>
 -->
    <!-- JavaScript Libraries -->
    <?php
    include_once('script.php');
    ?>
    <!-- JavaScript Libraries -->
    
  <script>
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.navbar-nav a');

    function updateActiveNavLink() {
        const scrollPosition = window.scrollY + 1;

        navLinks.forEach(link => {
            const targetId = link.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                const sectionTop = targetSection.offsetTop;
                const sectionHeight = targetSection.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });
    }

    function handleNavLinkClick(event) {
        event.preventDefault();

        const targetId = event.currentTarget.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const scrollTo = targetSection.offsetTop - navbarHeight;

            window.scrollTo({
                top: scrollTo,
                behavior: 'smooth'
            });
        }
    }

    window.addEventListener('scroll', updateActiveNavLink);
    navLinks.forEach(link => link.addEventListener('click', handleNavLinkClick));

    updateActiveNavLink(); 
});
</script>

</body>

</html>
