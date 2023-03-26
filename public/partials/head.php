<?php
    $meta_title = $meta_title ?? 'Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'Marlowe\'s portfolio showcases their web development and graphic design projects. Marlowe is a Front-End Web Developer based in Vancouver, BC.';
    $meta_domain = $_SERVER['SERVER_NAME'];
    $meta_url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $meta_img = get_public_url('images/opengraph-img.png');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marlowe Cheng">
    <meta name="description" content="<?php echo h($meta_desc); ?>">
    <meta name="keywords" content="web developer, vancouver, bc, canada, front-end developer, coding, html, scss, software development">
    <meta property="og:title" content="<?php echo h($meta_title); ?>">
    <meta property="og:description" content="<?php echo h($meta_desc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo h($meta_url); ?>">
    <meta property="og:image" content="<?php echo h($meta_img); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?php echo h($meta_domain); ?>">
    <meta property="twitter:url" content="<?php echo h($meta_url); ?>">
    <meta name="twitter:title" content="<?php echo h($meta_title); ?>">
    <meta name="twitter:description" content="<?php echo h($meta_desc); ?>">
    <meta name="twitter:image" content="<?php echo h($meta_img); ?>">  
    <title><?php echo h($meta_title); ?></title>
    <link rel="stylesheet" href="<?php echo get_public_url('css/main.min.css?v=1.5'); ?>">
    <link rel="icon" href="<?php echo get_public_url('images/marlowe-cheng-favicon.png'); ?>" type="image/png">
    <script src="https://kit.fontawesome.com/4082a6b417.js" crossorigin="anonymous"></script>
</head>