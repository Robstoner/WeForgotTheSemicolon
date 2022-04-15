<html>

<head>
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="navbar">
        <!-- <div>
            <img src="../css/pwppeportofel_PNG.png" class="img-fluid">
        </div> -->

        <a <?php if ($active == 'home-page') { ?>class="active" <?php } ?> href="home">Home</a>
        <a <?php if ($active == 'facturi') { ?>class="active" <?php } ?> href="facturi">Facturi</a>
        <a <?php if ($active == 'consum') { ?>class="active" <?php } ?> href="consum">Consum</a>

        <a class="right" href="<?php echo base_url() . 'login/logout' ?>">Log out</a>


    </div>
</body>
