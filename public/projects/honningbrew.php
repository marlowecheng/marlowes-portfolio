<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php 
    $meta_title = $meta_title ?? 'Honningbrew Meadery | Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'A stationery set for the fictional brewing company, Honningbrew Meadery. This was made in Adobe InDesign and Adobe Illustrator.';
    require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-meadery-stationery-mockup.jpg'); ?>" alt="honningbrew meadery stationary mockups">
                        <h1>Honningbrew Meadery</h1>
                        <div class="proj-tags">
                            <p>Graphic Design</p>
                        </div>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>The goal of this assignment was to create a logo, colour palette, and branding for a fictional or real company and make a stationary set that included a business card, envelope, and a letterhead. All of which was accomplished using Adobe InDesign 2022.</p>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Role &mdash; Graphic designer</li>
                            <li>Software &mdash; Adobe InDesign 2022 </li>
                            <li>Total Time &mdash; 12 hours 10 minutes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <div class="column">
                        <h2>Brainstorming</h2>
                        <p>The company chosen for the design is a fictional meadery—Honningbrew Meadery—from the video game, Elder Scrolls V: Skyrim. The mead is made from honey in the video game, so imagery and colours related to bees was incorporated into the logo design in the thumbnail sketches. I played around with logos that revolved around the usage of hexagons and drew thumbnail sketches. The colour palette included various shades of yellow-orange, for honey and bees, and a complimentary teal colour as an accent.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Branding</h2>
                    <p class="column">Taking inspiration from the original shop sign for the meadery in Skyrim, I opted for a serif font called Bitter Extra Bold for headers and titles. I chose a serif font since it’s associated with older, vintage typography; it is also a nod to the fantasy medieval setting in the video game. As for the body text, Poppins Regular was chosen to bridge the old with the new, as the rest of the design is quite modern.</p>
                    <p class="column">For the moodboard itself, I gathered several images with bees and honey that contains colours in the chosen colour palette.</p>
                    <div class="lb-container column">
                        <div class="grid-col">
                            <div class="column span4 span8-md span12-lg"></div>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-logo.jpg'); ?>" data-lightbox="honningbrew-logos" data-title="Honningbrew Meadery Logo" data-alt="Honningbrew Meadery Logo">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-logo.jpg'); ?>" alt="Honningbrew Meadery Logo">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-logo-dark.jpg'); ?>" data-lightbox="honningbrew-logos" data-title="Honningbrew Meadery Logo Version for Dark Backgrounds" data-alt="Honningbrew Meadery Logo Version for Dark Backgrounds">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-logo-dark.jpg'); ?>" alt="Honningbrew Meadery Logo Version for Dark Backgrounds">
                            </a>
                            <div class="column span4 span8-md span12-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Roughs</h2>
                    <p class="column">I picked 2-3 sketches from each stationary thumbnails and refined and reimagined them into rough sketches (6-8 roughs per stationary). I played around with lines, hexagon shapes, and a base yellow color. From here, I narrowed down the roughs to 1-2 for each stationary to create in Adobe InDesign.</p>
                    <div class="lb-container column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card-rough.jpg'); ?>" data-lightbox="honningbrew-roughs" data-title="Rough for business cards" data-alt="rough draft for honningbrew meadery's business card">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card-rough.jpg'); ?>" alt="rough draft for honningbrew meadery's business card">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope-rough.jpg'); ?>" data-lightbox="honningbrew-roughs" data-title="Roughs for envelopes" data-alt="rough draft for honningbrew meadery's business card">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope-rough.jpg'); ?>" alt="rough draft for honningbrew meadery's business card">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-letterhead-rough.jpg'); ?>" data-lightbox="honningbrew-roughs" data-title="Roughs for letterhead" data-alt="rough draft for honningbrew meadery's business card">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-letterhead-rough.jpg'); ?>" alt="rough draft for honningbrew meadery's letterhead">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Final Deliverables</h2>
                    <p class="column">The final version of each stationary was created in Adobe InDesign. The logo was created from basic vector shapes that were eventually converted to compound shapes. Some Adobe InDesign tools and features that were used includes: shape tool, pen tool, compound path, pathfinder, character styles, and more. </p>
                    <div class="lb-container column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card1.jpg'); ?>" data-lightbox="honningbrew-deliverables" data-title="Honningbrew Meadery Business Card" data-alt="Honningbrew Meadery's Business Card">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card1.jpg'); ?>" alt="Honningbrew Meadery's Business Card">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card2.jpg'); ?>" data-lightbox="honningbrew-deliverables" data-title="Honningbrew Meadery Business Card" data-alt="Honningbrew Meadery's Business Card">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-card2.jpg'); ?>" alt="Honningbrew Meadery's Business Card">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope1.jpg'); ?>" data-lightbox="honningbrew-deliverables" data-title="Honningbrew Meadery Envelope" data-alt="Honningbrew Meadery's Envelope">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope1.jpg'); ?>" alt="Honningbrew Meadery's Envelope">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope2.jpg'); ?>" data-lightbox="honningbrew-deliverables" data-title="Honningbrew Meadery Envelope" data-alt="Honningbrew Meadery's Envelope">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-envelope2.jpg'); ?>" alt="Honningbrew Meadery's Envelope">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-honningbrew/honningbrew-letterhead.jpg'); ?>" data-lightbox="honningbrew-deliverables" data-title="Honningbrew Meadery Letterhead" data-alt="Honningbrew Meadery's Letterhead">
                                <img src="<?php echo get_public_url('images/proj-honningbrew/honningbrew-letterhead.jpg'); ?>" alt="Honningbrew Meadery's Letterhead">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <?php require(get_path('public/partials/proj-closing.php')); ?>
    </main>
    <?php require(get_path('public/partials/footer.php')); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?php echo get_public_url('scripts/lightbox.js'); ?>"></script>
</body>
</html>