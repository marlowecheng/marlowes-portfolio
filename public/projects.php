<!DOCTYPE html>
<?php
    require('init.php')
?>
<html lang="en">
<?php
    require('partials/head.php');
?>
<body>
    <?php require('partials/header.php'); ?> 
    <main>
        <section class="projects">
            <div class="container">
                <div class="grid-col">
                    <h1 class="column">Projects</h1>
                    <div class="column">
                        <div class="grid-col">
                            <div class="column proj-card">
                                <a href="<?php echo get_public_url('chahouse.php'); ?>"><img src="images/proj-chahouse/chahouse-mockup-poster1.jpg" alt=""></a>
                                <div class="card-content">
                                    <h3><a href="<?php echo get_public_url('chahouse.php'); ?>">Cha House Kombucha</a></h3>
                                    <div class="proj-tags">
                                        <p>Graphic Design</p>
                                        <p>Student Project</p>
                                        <p>Individual Project</p>
                                    </div>
                                    <p>School project from the course: Illustration for New Media. The project purpose was to create a poster ad for a fictional beverage company using Adobe Illustrator 2022.</p>
                                </div>
                            </div>
                            <div class="column proj-card">
                                <a href="<?php echo get_public_url('honningbrew.php'); ?>"><img src="images/proj-honningbrew/honningbrew-meadery-stationery-mockup.jpg" alt=""></a>
                                <div class="card-content">
                                    <h3><a href="<?php echo get_public_url('honningbrew.php'); ?>">Honningbrew Meadery Stationeries</a></h3>
                                    <div class="proj-tags">
                                        <p>Graphic Design</p>
                                        <p>Student Project</p>
                                        <p>Individual Project</p>
                                    </div>
                                    <p>School project from the course: DigiLayouts & Interactive Media. The purpose of this project was to make a stationery set for any company. Honningbrew Meadery is a fictional meadery from the video game, Elder Scrolls V: Skyrim.</p>
                                </div>
                            </div>
                            <div class="column proj-card">
                                <a href="<?php echo get_public_url('bao-gsap.php'); ?>"><img src="images/proj-gsap/bao-mockup.jpg" alt=""></a>
                                <div class="card-content">
                                    <h3><a href="<?php echo get_public_url('bao-gsap.php'); ?>">Bao GSAP Animation</a></h3>
                                    <div class="proj-tags">
                                        <p>Web Development</p>
                                        <p>Student Project</p>
                                        <p>Individual Project</p>
                                    </div>
                                    <p>School project from the course: Animation for New Media. GSAP - Green Sock was used to animate an SVG obtained from Adobe Stock. </p>
                                </div>
                            </div>
                            <div class="column proj-card">
                                <a href="<?php echo get_public_url('restwel.php'); ?>"><img src="images/proj-restwel/restwel-mockup.jpg" alt=""></a>
                                <div class="card-content">
                                    <h3><a href="<?php echo get_public_url('restwel.php'); ?>">Restwel Responsive Banner</a></h3>
                                    <div class="proj-tags">
                                        <p>Web Development</p>
                                        <p>Student Project</p>
                                        <p>Individual Project</p>
                                    </div>
                                    <p>School project from the course: Mobile Web. A responsive hero banner with copy and a call-to-action was made using the @media tool in CSS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
</body>
</html>