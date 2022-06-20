<?php
    $title = isset($title) && !empty($title) ? $title : 'Ilmr - Meta title';
    $description = isset($description) && !empty($description) ? $description : 'Ilmr meta description';
    $keywords = '';
    $publish_time = isset($publish_time) ? $publish_time : time();
    $main_url = isset($main_url) ? $main_url : 'https://ilmr.uz/';
    $main_image = isset($main_image) && !empty($main_image) ? $main_image : "https://ilmr.uz/images/main.png";
    $origin = 'ilmr.uz'

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="ilmr.uz">

    <meta property="og:title" content="<?= $title ?>"/>
    <meta data-rh="true" property="article:published_time"
          content="<?= $publish_time ?>">
    <meta property="og:description" content="<?= $description ?>"/>
    <meta name="description" content="<?= $description ?>">
    <meta data-rh="true" property="og:image" content="<?= $main_image ?>"/>
    <meta property="og:image" content="<?= $main_image ?>" />
    <meta property="og:image:secure_url" content="<?= $main_image ?>"/>
    <meta property="og:type" content="article"/>
    <meta name="author" content="{{ $origin }}">
    <meta property="og:url" content="<?= $main_url ?>"/>
    <meta property="og:site_name" content="<?= $origin ?>"/>
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:url" content="<?= url()->current() ?>">
    <meta property="twitter:description" content="<?= $description ?>">
    <meta property="twitter:image" content="<?= $main_image ?>">
    <meta data-rh="true" property="al:android:app_name" content="Medium"/>
    <meta name="telegram:channel" content="@ilmr_uz"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@ilmr.uz"/>
    <meta name="twitter:creator" content="@ilmr.uz"/>

    
    <meta name="application-name" content="{{ $origin }}"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

</head>
<body>


    @yield('section')

    <div id="root"></div>
</body>
</html>
