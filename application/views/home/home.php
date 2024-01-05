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
    include_once('layouts/style.php');
    ?>
    <style type="text/css">
    .client-details{
        border: 2px double; green;
        margin: 15px;
        text-align: center;
        color: darkblue;
    }
</style>
    <!-- Styles -->
</head>

<body>

    <!-- Navbar Start -->
    <?php
    include_once('layouts/nav.php');
    ?>


<div class="row mb-5" >
    <div class="col">
        <section class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h1 class="text-center mt-5 mb-5" >Client details</h1>
                <div class="row">
                    <?php 
                    $client = $this->crud_model->get_client_info();
                    $i = 0;
                    foreach ($client as $row) { ?>
                        <div class="col-md-4 mt-2">
                            <a href="#" onclick="redirectToTheme(<?= $row['theme_type']; ?>, <?= $i; ?>)"><!-- Client <?= $i + 1; ?> -->
                            <div class="client-details">
                                <h1 class="mt-3"></h1>
                                <p>Name: <?= $row['name']; ?></p>
                                <p>Email: <?= $row['mail']; ?></p>
                                <p>Theme Type: <?= $row['theme_type']; ?></p>

                            </div>
                        </a>
                        </div>
                    <?php $i++; } ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
    include_once('layouts/script.php');
    ?>
    <!-- JavaScript Libraries -->

</body>

</html>


<script>
    function redirectToTheme(themeType, clientId) {
        switch (themeType) {
            case 1:
                window.location.href = '<?= base_url('food'); ?>';
                break;
            case 2:
                window.location.href = '<?= base_url('grocery'); ?>';
                break;
            case 3:
                window.location.href = '<?= base_url('ecomecers'); ?>';
                break;
            case 4:
                window.location.href = '<?= base_url('real'); ?>';
                break;
            default:
               
        }
    }
</script>
