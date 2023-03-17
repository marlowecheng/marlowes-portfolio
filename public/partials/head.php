<?php
    $meta_title = $meta_title ?? 'Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'Marlowe Cheng\'s portfolio showcases their web development and graphic design projects. Marlowe is a Front-End Web Developer based in Vancouver, BC.';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marlowe Cheng">
    <meta name="description" content="<?php echo h($meta_desc); ?>">
    <meta name="keywords" content="web developer, vancouver, bc, canada, front-end developer, coding, html, scss, software development">
    <title><?php echo h($meta_title); ?></title>
    <link rel="stylesheet" href="<?php echo get_public_url('css/main.min.css?v=1.1'); ?>">
    <link rel="icon" href="images/marlowe-cheng-favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/4082a6b417.js" crossorigin="anonymous"></script>
</head>