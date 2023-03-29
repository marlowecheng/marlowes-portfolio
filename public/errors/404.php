<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section>
            <div class="container">
                <div class="grid-col">
                    <div class="column">
                        <h1>This page does not exist.</h1>
                        <a href="<?php echo get_public_url('index.php'); ?>" title="Go back to Home" class="btn">Let's go back home.</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php // require(get_path('public/partials/footer.php')); ?>
</body>
</html>