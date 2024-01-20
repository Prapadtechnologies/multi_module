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

<div data-aos="zoom-in" id="contact" class="container mt-0">
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">
                    <?php
                    
                    echo $address;
                    ?>
                </div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-two"><?= $phoneNumber ?></div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">
                    <?php
                    
                    echo $email;
                    ?>
                </div>
            </div>
        </div>
        <div class="right-col">
            <h1>Contact us</h1>
            <p>If you require any further information, feel free to contact me.</p>
            <form id="contact-form" method="post">
                <label for="name">Full name</label>
                <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="Your Email Address" required>
                <label for="mobile">Mobile Number</label>
                <input type="number" id="mobile" name="mobile" value="<?= $phoneNumber ?>" placeholder="Your Mobile Number" required>
                <label for="message">Message</label>
                <textarea rows="3" placeholder="Your Message" id="message" name="message" required></textarea>
                <button type="submit" id="submit" name="submit">Send</button>
            </form>
            <div id="error"></div>
            <div id="success-msg"></div>
        </div>
    </div>
</div>
