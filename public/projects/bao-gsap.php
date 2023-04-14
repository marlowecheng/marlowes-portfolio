<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php
    $meta_title = $meta_title ?? 'Bao GSAP Animation | Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'Animating SVG of a bao illustration using GSAP with control buttons.';

    require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <h1>Bao GSAP Animation</h1>
                        <div class="proj-tags">
                            <p>Web Development</p>
                        </div>
                        <img src="<?php echo get_public_url('images/proj-gsap/bao-mockup.jpg'); ?>" alt="GSAP bao animation mockup">
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>The goal of this project was to demonstrate my knowledge on the Javascript animation plugin: GreenSock Animation Platform or GSAP. I converted an Illustrator illustration with multiple layers into an SVG, took the code from the SVG file, added it to the HTML, and used GSAP to animate it. GSAP features used were Tween and Timeline.</p>
                        <p>Project Result: <a href="https://bao-animation.marlowecheng.com" title="View the project result of the animation here!" target="_blank" class="links">Live Preview Here</a></p>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Role &mdash; Web Developer</li>
                            <li>Software &mdash; VS Code, Adobe Illustrator</li>
                            <li>Tools &mdash; GSAP, Javascript, HTML, CSS</li>
                            <li>Total Time &mdash; 5 hours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <div class="column">
                        <h2>Brainstorming & SVG Preparation</h2>
                        <p>I found a cute dumpling vector on Adobe Stock that included 3 dumplings and a pair of chopsticks. Since the vector file cuts off the chopsticks, I made the artboard bigger to include the chopsticks fully in Adobe Illustrator. I also separated each dumpling and chopstick into its own layer and named the layers accordingly, this will be useful later as the layer names will become the ID of each element in the SVG. Cleaned up the SVG code using SVGOMG to keep the file size small, some features used included: remove doctype, remove XML instructions, merge styles, and remove empty containers</p>
                        <div class="lb-container column">
                            <div class="grid-col">
                                <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-illustrator.png'); ?>" data-lightbox="bao-prep" data-title="Dumplings illustration from Adobe Stock in Adobe Illustrator" data-alt="3 illustrations of dumplings with a pair of chopsticks">
                                    <img src="<?php echo get_public_url('images/proj-gsap/bao-illustrator.png'); ?>" alt="3 illustrations of dumplings with a pair of chopsticks">
                                </a>
                                <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-layers.png'); ?>" data-lightbox="bao-prep" data-title="Dumplings illustration from Adobe Stock in Adobe Illustrator" data-alt="screenshot of the layers panel in Adobe Illustrator">
                                    <img src="<?php echo get_public_url('images/proj-gsap/bao-layers.png'); ?>" alt="screenshot of the layers panel in Adobe Illustrator">
                                </a>
                                <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-svgomg.jpg'); ?>" data-lightbox="bao-prep" data-title="Dumplings illustration from Adobe Stock in Adobe Illustrator" data-alt="screenshot of the layers panel in Adobe Illustrator">
                                    <img src="<?php echo get_public_url('images/proj-gsap/bao-svgomg.jpg'); ?>" alt="screenshot of the layers panel in Adobe Illustrator">
                                </a>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">GSAP: Tween</h2>
                    <p class="column">Since the CSS and Javascript will be using ids and classes from the HTML, the HTML was written with them in mind. Added a reset CSS to standardize the look across different browsers. Used gsap.set() to move the dumplings and chopsticks to the starting positions using the id and classes on the SVG containers. Created a variable for each animated element, used gsap.to() to keyframe each movement and calculated the delay for each element.</p>
                    <p class="column">Added onclick events that connected to the buttons on the HTML to allow pause, play, reverse, and restart controls for the animation. Unfortunately, Tween only allows control of one variable at a time so only the chopsticks were controllable via buttons.</p>
                </div>
            </div>
        </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">GSAP: Timeline</h2>
                    <p class="column">Timeline is a much powerful tool, as it allows easier controlling of timing and delays; future changes for small tweaks would not involve changing the delay of the whole sequence one by one like in Tween. Using the base code from the Tween version, the gsap in gsap.to() was replaced with a variable that contained gsap.timeline(). Other than that, everything was kept relatively the same. Since the whole animation can be called with one variable, I was able to attach it to the buttons to be able to control all the elements in the animation.</p>
                    <div class="lb-container column">
                        <div class="grid-col">
                            <div class="column span4 span8-md span12-lg"></div>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-code.png'); ?>" data-lightbox="bao-deliverables" data-title="Code for the first iteration of the animation" data-alt="GSAP code in Visual Studio Code">
                                <img src="<?php echo get_public_url('images/proj-gsap/bao-code.png'); ?>" alt="GSAP code in Visual Studio Code">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-old.jpg'); ?>" data-lightbox="bao-deliverables" data-title="First iteration of the product" data-alt="Older version of the Bao GSAP animation">
                                <img src="<?php echo get_public_url('images/proj-gsap/bao-old.jpg'); ?>" alt="Older version of the Bao GSAP animation">
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
                    <h2 class="column">Revising</h2>
                    <p class="column">I moved the control buttons from above the animation to below the animation, since the layout looked top-heavy before; this would make the layout more balanced. Used @import in the CSS to replace linking it in the HTML as this would make changing the font a lot easier if this was a multi-page website; I would only need to change something in one file instead of every HTML page. Added responsiveness using the mobile-first approach, making the viewport mobile-sized, and changing all CSS units from px to rem (where 1 rem = 10px by adding font-size: 62.5%; in the body). Breakpoints used were 375px, 425px, 768px, 1024px, and 1440px. At each increasing viewport size breakpoint, the button sizes, the animation size, and the font sizes all increase incrementally.</p>
                    <div class="lb-container final-poster column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-gsap/bao-new.jpg'); ?>" data-lightbox="bao-deliverables" data-title="Revised version of the product" data-alt="Revised version of the Bao GSAP animation">
                                <img src="<?php echo get_public_url('images/proj-gsap/bao-new.jpg'); ?>" alt="Revised version of the Bao GSAP animation">
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