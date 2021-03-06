<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title><?php echo currencyName($currency); ?> Node Monitor - <?php echo $nanoNodeName; ?></title>

        <meta name="Description" content="BaNano Node Monitor is a server-side PHP-based monitor for Banano nodes.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="all" />
        <link rel="stylesheet" href="static/css/bootstrap.min.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/css/fontawesome-all.min.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/css/main.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="stylesheet" href="static/themes/<?php echo $themeChoice; ?>/css/theme.css?v=<?php echo PROJECT_VERSION; ?>" media="screen">
        <link rel="icon" href="">
        <meta property="og:title" content="<?php echo currencyName($currency); ?> Node Monitor - <?php echo $nanoNodeName; ?>">
        <meta property="og:description" content="Banano Node Monitor">
        <meta property="og:type" content="website">
        <meta property="og:image" content="">
        <meta name="nano" content="<?php echo $nanoDonationAccount; ?>">
    </head>
    <body>
    <script>
    var init = [];
    var GLOBAL_REFRESH = <?php echo $autoRefreshInSeconds; ?>;
    var GLOBAL_DIGITS = <?php echo $nanoNumDecimalPlaces; ?>;
    </script>

    <!--- add the navbar -->
    <?php include __DIR__ . '/navbar.php'; ?>

    <!-- logo and ticker -->
    <div class="container">
