<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php 
        $meta_title = $meta_title ?? 'Restwel | Marlowe Cheng | Front-End Developer';
        $meta_desc = $meta_desc ?? 'A responsive banner for a fictional mattress company created with CSS and HTML. The banner features an image, copy, and a call-to-action button.';

        require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <h1>Restwel Responsive Banner</h1>
                        <div class="proj-tags">
                            <p>Web Development</p>
                        </div>
                        <img src="<?php echo get_public_url('images/proj-restwel/restwel-mockup.jpg'); ?>" alt="Restwel banner mocked-up on a macbook">
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>The purpose of this assignment was to create a responsive banner with a call to action for a fictional company. The goal of this assignment was to demonstrate our understanding of CSS @media.</p>
                        <p>Project Result: <a href="https://restwel.marlowecheng.com" title="View the banner here!" target="_blank" class="links">Live Preview Here</a></p>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Role &mdash; Web Developer</li>
                            <li>Software &mdash; VS Code </li>
                            <li>Total Time &mdash; 3 hours 15 minutes</li>
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
                        <p>Beginning of brainstorming for the banner content; the company name, colour scheme, and background image was chosen along with the completion of copy. The company, Restwel, is a memory foam mattress company whose target audience are millennials; thus, the copy is a bit cheeky: “Restwel memory foam mattress gives you a full night's sleep. No more waking up tired so you can save some money on caffeine”.</p>
                        <p>The colour scheme chosen was monochromatic with various shades of grey. As it’s a mid-end mattress company, monochromatic colour scheme would give the company a classier and more elegant feeling. The various shades of grey would also give feelings of simplicity and purity, as to not overwhelm an average customer.</p>
                        <p>The thumbnail sketches included 3 different viewport widths, all of which had rough measurements of a phone, tablet, and computer monitor ratios. The banner layout was revised through different iterations, playing with elements being either inside or outside of the banner image depending on the viewport width.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Base HTML & CSS</h2>
                    <p class="column">The HTML was written with the CSS and a mobile-first approach in mind. Thinking about the content that would go into the banner, divs were used to separate content that would have its own CSS properties such as positioning, size, height, and alignment. A reset CSS was obtained from the internet so the final product would look consistent throughout different browsers, as different browsers have their own CSS preferences and look.</p>
                </div>
            </div>
        </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Responsiveness with @media</h2>
                    <p class="column">The @media was written for each breakpoint: 414px, 576px, 768px, 992px, 1200px. For viewport sizes that are less than 575px in width, the banner image would only contain the header with the copy and the button are underneath it. For viewport sizes 991px and below, everything is center-justified with the header and copy inside the banner image and the button still outside the banner. Viewport width 992px and above has the content left-justified with the header, copy and button inside the banner image, font-size is also increased. At viewport width 1200px, the font-size is increased and the banner image height is also increased.</p>
                    <div class="lb-container column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-restwel/restwel-414px.jpg'); ?>" data-lightbox="restwel-gallery" data-title="Restwel Banner 414px breakpoint" data-alt="Restwel banner with copy and button below the banner">
                                <img src="<?php echo get_public_url('images/proj-restwel/restwel-414px.jpg'); ?>" alt="Restwel banner with copy and button below the banner">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-restwel/restwel-576px.jpg'); ?>" data-lightbox="restwel-gallery" data-title="Restwel Banner 576px breakpoint" data-alt="Restwel banner with button below the banner">
                                <img src="<?php echo get_public_url('images/proj-restwel/restwel-576px.jpg'); ?>" alt="Restwel banner with button below the banner">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-restwel/restwel-1200px.jpg'); ?>" data-lightbox="restwel-gallery" data-title="Restwel Banner 1200px breakpoint" data-alt="Restwel banner with header, copy and button inside the banner">
                                <img src="<?php echo get_public_url('images/proj-restwel/restwel-1200px.jpg'); ?>" alt="Restwel banner with header, copy and button inside the banner">
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Revisions</h2>
                    <p class="column">Added breakpoints at 710px and 856px for responsiveness for horizontal mobile view. Cleaning up of redundant CSS code and deleted unused classes in the HTML. Replaced link tag for font with @import in the CSS document for easier .</p>
                    <div class="lb-container final-poster column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-restwel/restwel-710px.jpg'); ?>" data-lightbox="restwel-gallery" data-title="Restwel Banner 710px breakpoint for horizontal mobile view" data-alt="Restwel banner with header, copy inside the banner">
                                <img src="<?php echo get_public_url('images/proj-restwel/restwel-710px.jpg'); ?>" alt="Restwel banner with header, copy inside the banner">
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