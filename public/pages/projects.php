<!DOCTYPE html>
<?php
    require('../init.php');
?>
<html lang="en">
<?php
    $meta_title = $meta_title ?? 'Projects | Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'List of Marlowe\'s web development and graphic design projects.';

    require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>   
    <main>
        <section class="projects">
            <div class="container">
                <div class="grid-col">
                    <h1 class="column">Projects</h1>
                    <div class="column grid-col">
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/chahouse.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-chahouse/chahouse-mockup-poster1.jpg'); ?>" alt=""></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/chahouse.php'); ?>">Cha House Kombucha</a></h3>
                                <div class="proj-tags">
                                    <p>Graphic Design</p>
                                </div>
                                <p>School project from the course: Illustration for New Media. The project purpose was to create a poster ad for a fictional beverage company using Adobe Illustrator 2022.</p>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/honningbrew.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-meadery-stationery-mockup.jpg'); ?>" alt=""></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/honningbrew.php'); ?>">Honningbrew Meadery Stationeries</a></h3>
                                <div class="proj-tags">
                                    <p>Graphic Design</p>
                                </div>
                                <p>School project from the course: DigiLayouts & Interactive Media. The purpose of this project was to make a stationery set for any company. Honningbrew Meadery is a fictional meadery from the video game, Elder Scrolls V: Skyrim.</p>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/bao-gsap.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-gsap/bao-mockup.jpg'); ?>" alt=""></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/bao-gsap.php'); ?>">Bao GSAP Animation</a></h3>
                                <div class="proj-tags">
                                    <p>Web Development</p>
                                </div>
                                <p>School project from the course: Animation for New Media. GSAP - Green Sock was used to animate an SVG obtained from Adobe Stock. </p>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/restwel.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-restwel/restwel-mockup.jpg'); ?>" alt=""></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/restwel.php'); ?>">Restwel Responsive Banner</a></h3>
                                <div class="proj-tags">
                                    <p>Web Development</p>
                                </div>
                                <p>School project from the course: Mobile Web. A responsive hero banner with copy and a call-to-action was made using the @media tool in CSS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require(get_path('public/partials/footer.php')) ?>
</body>
</html>