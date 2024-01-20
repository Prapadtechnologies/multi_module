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
        .client-details {
            border: 2px double green;
            margin: 15px;
            text-align: center;
            color: darkblue;
        }
    </style>
    <!-- Styles -->
</head>

<body>

    <div class="row mb-5">
        <div class="col">
            <section class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="row">
                        <?php
                        // Session start should be placed at the beginning of the script
                        session_start();

                        if (isset($_GET['id'])) {
                            $clientId = $_GET['id'];
                            $client = $this->crud_model->get_single_client_info($clientId);

                            if ($client) {
                                // Display common client details
                                echo '<h1>' . $client['first_name'] . '</h1>';
                                echo '<p>Email: ' . $client['email'] . '</p>';

                                // Display theme-specific content based on the theme type
                                switch ($client['theme_type']) {
                                    case 1: // Food theme
                                        echo '<p>Theme Type: Food</p>';
                                        // Add food theme content here
                                        break;
                                    case 2: // Grocery theme
                                        echo '<p>Theme Type: Grocery</p>';
                                        // Add grocery theme content here
                                        break;
                                    case 3: // Ecommerce theme
                                        echo '<p>Theme Type: Ecommerce</p>';
                                        // Add ecommerce theme content here
                                        break;
                                    case 4: // Realestate theme
                                        echo '<p>Theme Type: Realestate</p>';
                                        // Add realestate theme content here
                                        break;
                                    default:
                                        // Handle other theme types if needed
                                        break;
                                }

                            } else {
                                // Handle the case when no client details are found
                                echo 'Client not found for ID: ' . $clientId;
                            }
                        } else {
                            // Handle the case when no client ID is provided
                            echo 'Invalid request';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php
    include_once('layouts/script.php');
    ?>
</body>

</html>
