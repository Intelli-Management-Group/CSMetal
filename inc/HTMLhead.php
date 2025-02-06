<?php
$config = [
    'base_url' => ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '192.168.0.47')
        ? 'https://192.168.0.47/csmetal/' 
        : 'https://csmetal.intelligrp.com/'
];
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="<?php echo $config['base_url']; ?>">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="js/main.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="img/Generic/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/Generic/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/Generic/favicon/favicon-16x16.png">
<link rel="manifest" href="img/Generic/favicon/site.webmanifest">