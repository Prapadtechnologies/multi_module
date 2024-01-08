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

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <?php
    include_once('script.php');
    ?>
    <!-- JavaScript Libraries -->
    $(document).ready(function() {
    if (window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top
        }, 1000);
    }
});
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

    updateActiveNavLink(); // Initial check on page load
});
</script>

</body>

</html>
