<?php
    require('init.php');
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="intro no-margin-btm no-padding-btm">
            <div class="container">
                <div class="grid-col">
                    <h1 class="column intro-title">Hellowe, I'm Marlowe!</h1>
                    <p class="column subtitle">Let's build unconventional websites together.</p>
                    <div class="column intro-content">
                        <p>Do you enjoy websites from the early 2000s and chaos? I am a front-end web developer with a vision to help you create the website of your <s>memes</s> dreams.</p>
                        <p class="css-crime">Have I mentioned that <b>CSS is my passion</b>?</p>
                        <a href="<?php echo get_public_url('pages/projects.php'); ?>" class="btn">check out my projects</a>
                    </div>
                    <div class="img-container column span4 span8-md span12-lg css-crime"><img src="<?php echo get_public_url('images/marlowe/marlowe-sqoosh.png'); ?>" alt="Marlowe's head squished between the fingers of a hand-shaped chair" class=""></div>
                </div>
            </div>
        </section>
        <section class="showcase section-bg no-margin-top">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Project Showcases</h2>
                    <div class="card column span4 span8-md span12-lg">
                        <a href="<?php echo get_public_url('projects/forward.php'); ?>"><img src="<?php echo get_public_url('images/proj-forward/forward-mockup.jpg'); ?>" alt="Forward website mocked up on a computer"></a>
                        <p>Forward - A Mentorship Platform</p>
                    </div>
                    <div class="card column span4 span8-md span12-lg">
                        <a href="<?php echo get_public_url('projects/chahouse.php'); ?>"><img src="<?php echo get_public_url('images/proj-keysmash/keysmash-mockup.jpg'); ?>" alt="Keysmash generator mocked up on a computer"></a>
                        <p>Keysmash Generator</p>
                    </div>
                </div>
            </div>
        </section>
        <?php require(get_path('public/partials/contact.php')); ?>
    </main>
    <?php require(get_path('public/partials/footer.php')); ?>
</body>
</html>