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
                            <a href="<?php echo get_public_url('projects/chahouse.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-chahouse/chahouse-mockup-poster1.jpg'); ?>" alt="Mockup of the Cha House Kombucha poster on a wall"></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/chahouse.php'); ?>">Cha House Kombucha</a></h3>
                                <div class="proj-tags">
                                    <p>Graphic Design</p>
                                </div>
                                <p>School project from the course: Illustration for New Media. An advertisement poster for a fictional beverage company made in Adobe Illustrator.</p>
                                <a href="<?php echo get_public_url('projects/chahouse.php'); ?>" class="btn-secondary">View Project</a>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/honningbrew.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-meadery-stationery-mockup.jpg'); ?>" alt="Mockup of stationeries for Honningbrew Meadery"></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/honningbrew.php'); ?>">Honningbrew Meadery Stationeries</a></h3>
                                <div class="proj-tags">
                                    <p>Graphic Design</p>
                                </div>
                                <p>School project from the course: DigiLayouts & Interactive Media. A stationery set&mdash;letter paper, envelope, business card&mdash;made using Adobe InDesign for a fictional brewery named Honningbrew Meadery.</p>
                                <a href="<?php echo get_public_url('projects/honningbrew.php'); ?>" class="btn-secondary">View Project</a>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/bao-gsap.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-gsap/bao-mockup.jpg'); ?>" alt="Mockup of the Bao GSAP web page on a laptop"></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/bao-gsap.php'); ?>">Bao GSAP Animation</a></h3>
                                <div class="proj-tags">
                                    <p>Web Development</p>
                                </div>
                                <p>School project from the course: Animation for New Media. GSAP - Green Sock was used to animate an SVG obtained from Adobe Stock.</p>
                                <a href="<?php echo get_public_url('projects/bao-gsap.php'); ?>" class="btn-secondary">View Project</a>
                            </div>
                        </div>
                        <div class="column proj-card grid-col">
                            <a href="<?php echo get_public_url('projects/restwel.php'); ?>" class="column span4 span8-md span12-lg"><img src="<?php echo get_public_url('images/proj-restwel/restwel-mockup.jpg'); ?>" alt="Mockup of the Restwel banner on a laptop"></a>
                            <div class="card-content column span4 span8-md span12-lg">
                                <h3><a href="<?php echo get_public_url('projects/restwel.php'); ?>">Restwel Responsive Banner</a></h3>
                                <div class="proj-tags">
                                    <p>Web Development</p>
                                </div>
                                <p>School project from the course: Mobile Web. A responsive hero banner with copy and a call-to-action was made using the @media tool in CSS.</p>
                                <a href="<?php echo get_public_url('projects/restwel.php'); ?>" class="btn-secondary">View Project</a>
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