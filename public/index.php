<?php
    require('init.php')
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="intro">
            <div class="container">
                <div class="grid-col">
                    <h1 class="column">Hellowe, I'm Marlowe!</h1>
                    <div class="column intro-content">
                        <p>I am a New Media Design and Web Development student at BCIT. I am an aspiring front-end web developer and graphic designer, currently trying to learn React.js and Tailwind.css. I love working with CSS, SCSS, HTML, and jQuery. I also enjoy working with Adobe Illustrator, Photoshop, and After Effects.</p>
                        <a href="<?php echo get_public_url('about.php'); ?>" class="btn">more marlowe fun facts</a>
                    </div>
                    <div class="img-container column span4 span8-md span12-lg"><img src="images/marlowe/marlowe-sqoosh.png" alt="Marlowe's head squished between the fingers of a hand-shaped chair" class=""></div>
                </div>
            </div>
        </section>
        <section class="showcase section-bg">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Project Showcases</h2>
                    <div class="card column span4 span8-md span12-lg">
                        <a href="<?php echo get_public_url('bao-gsap.php'); ?>"><img src="<?php echo get_public_url('images/proj-gsap/bao-mockup.jpg'); ?> " alt="GSAP bao animation mocked-up on a macbook"></a>
                        <p>Bao GSAP Animation</p>
                    </div>
                    <div class="card column span4 span8-md span12-lg">
                        <a href="<?php echo get_public_url('chahouse.php'); ?>"><img src="<?php echo get_public_url('images/proj-chahouse/chahouse-mockup-poster1.jpg'); ?>" alt="Cha House Kombucha poster ad mocked-up on a wall"></a>
                        <p>Cha House Kombucha Advertisement Poster</p>
                    </div>
                </div>
            </div>
        </section>
        <?php require(get_path('public/partials/contact.php')); ?>
    </main>
    <?php require(get_path('public/partials/footer.php')); ?>
</body>
</html>