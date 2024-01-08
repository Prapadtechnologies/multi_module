<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/home/plugins');?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url('assets/home/plugins');?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/home/plugins');?>/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url('assets/home/plugins');?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/home/plugins');?>/js/main.js"></script>
    <!-- Add this in your HTML, before your custom script -->

<!--  <script>
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
 -->