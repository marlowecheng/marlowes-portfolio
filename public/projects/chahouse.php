<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-mockup-poster1.jpg'); ?>" alt="poster of cha house kombucha mocked up">
                        <h1>Cha House Kombucha</h1>
                        <div class="proj-tags">
                            <p>Graphic Design</p>
                        </div>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>The goal of this project was to make a poster advertisment for a fictional beverage company using Adobe Illustrator. Illustrator tools used throughout this project includes: type tool, 3D revolve, 3D extrude, 3D mapping, perspective grid tool, and more. </p>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Role &mdash; Graphic designer</li>
                            <li>Software &mdash; Adobe Illustrator </li>
                            <li>Total Time &mdash; 20 hours 35 minutes</li>
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
                        <p>Cha House Kombucha sells kombucha brewed with Chinese tea flavours such as chrysanthemum, jasmine, oolong, pu’er, tieguanyin, and winter melon. The intended marketed place would be at Asian grocers like T&T and smaller local grocers such as City Avenue Market and Donald’s Market. Target demographis are Chinese diaspora who enjoys both Chinese tea and kombucha. People who drink kombucha tend to be more health concious with a bit of disposable income. Age range of the target audience ranges from 25 to 45.</p>
                    </div>
                    <div class="column lb-container">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-logo1.jpg') ?>" data-lightbox="chahouse" data-title="Company name brainstorm and thumbnail sketches of logo" data-alt="Company name brainstorm and thumbnail sketches of logo">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-logo1.jpg') ?>" alt="Company name brainstorm and thumbnail sketches of logo">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-logo2.jpg'); ?>" data-lightbox="chahouse" data-title="Company name brainstorm and thumbnail sketches of logo" data-alt="Company name brainstorm and thumbnail sketches of logo">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-logo2.jpg'); ?>" alt="Company name brainstorm and thumbnail sketches of logo">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-labels.jpg'); ?>" data-lightbox="chahouse" data-title="Thumbnail sketches of containers and label for the kombucha bottle" data-alt="Thumbnail sketches of containers and label for the kombucha bottle">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-thumbs-labels.jpg'); ?>" alt="Thumbnail sketches of containers and label for the kombucha bottle">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Branding</h2>
                    <p class="column">Cha – 茶 – is ‘tea’ in Mandarin, so Cha House means ‘tea house’. In the company name, I wanted to convey the relaxing and casual feelings of tea houses in China.</p>
                    <p class="column">For the logo, I wanted to draw a shape that would be similar to the modern Chinese character for tea pot – 壺 – since, historically, written Chinese originates from picto- graphs. In the final version, I took inspiration from the ancient glyph (the reference on the right) for the Chinese character for ‘tea pot’. The tea pot in the logo refers to the ‘cha’, and the shape on top of the tea pot looks like a house.</p>
                    <div class="lb-container glyph column grid-col">
                        <a href="<?php echo get_public_url('images/proj-chahouse/teapot-glyph.png'); ?>" data-lightbox="chahouse" data-title="Teapot glyph" data-alt="ancient chinese glyph for teapot" class="span4 span8-md span12-lg">
                            <img src="<?php echo get_public_url('images/proj-chahouse/teapot-glyph.png'); ?>" alt="ancient chinese glyph for teapot">
                        </a>
                    </div>
                    <p class="column">The lines of the logo and typography are mostly curved to smoothly guide the eyes, and also give off casual feelings since everything is rounded. The colours I chose for the logo are different values of green to encourage psychological associations with nature and freshness, and green tea leaves.</p>
                    <div class="column lb-container">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-logo-bw.jpg'); ?>" data-lightbox="chahouse" data-title="Cha House Kombucha logo in black outline" data-alt="Cha House Kombucha logo in black outline">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-logo-bw.jpg'); ?>" alt="Cha House Kombucha logo in black outline">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-logo.jpg'); ?>" data-lightbox="chahouse" data-title="Cha House Kombucha logo in colour" data-alt="Cha House Kombucha logo in colour">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-logo.jpg'); ?>" alt="Cha House Kombucha logo in colour">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">3D Modelling in Adobe Illustrator</h2>
                    <p class="column">Using reference images from Adobe Stock and Google Images, the bottle, teacups and teapot was created using Illustrator’s 3D materials tools. The bottle lable was sketched, iterated, and digitalized in Illustrator to be able to map onto the created 3D bottle. Here, I played with several different staging for all the items.</p>
                    <div class="column lb-container">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-bottle.jpg'); ?>" data-lightbox="chahouse"  data-title="3D rotated bottle and cap" data-alt="3D rotated bottle and cap">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-bottle.jpg'); ?>" alt="3D rotated bottle and cap">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-teapot.jpg'); ?>" data-lightbox="chahouse" data-title="3D rotated teapot and extruded handle and spout" data-alt="3D rotated teapot and extruded handle and spout">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-teapot.jpg'); ?>" alt="3D rotated teapot and extruded handle and spout">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-teacup.jpg'); ?>" data-lightbox="chahouse" data-title="3D rotates teacup" data-alt="3D rotates teacup">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-teacup.jpg'); ?>" alt="3D rotates teacup">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-stage0.jpg'); ?>" data-lightbox="chahouse"  data-title="Staging one of a bottle, teapot, and teacup" data-alt="Staging one of a bottle, teapot, and teacup">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-stage0.jpg'); ?>" alt="Staging one of a bottle, teapot, and teacup">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-stage1.jpg'); ?>" data-lightbox="chahouse" data-title="Staging 3 bottles, 1 teapot and 5 teacups" data-alt="Staging 3 bottles, 1 teapot and 5 teacups">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-stage1.jpg'); ?>" alt="Staging 3 bottles, 1 teapot and 5 teacups">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-stage2.jpg'); ?>" data-lightbox="chahouse" data-title="Staging of 3 bottles, 1 teapot, and 3 teacups" data-alt="Staging of 3 bottles, 1 teapot, and 3 teacups">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-stage2.jpg'); ?>" alt="Staging of 3 bottles, 1 teapot, and 3 teacups">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Staging in Adobe Illustrator</h2>
                    <p class="column">I wanted to frame the final product poster similar to this picture I found on Google Images. Through the use of the perspective grid tool in Illustrator, I was able to achieve it.</p>
                    <p class="column">I also built a table and tea tray using Illustrator's extrude tool and mapped textures from Adobe Stock onto them.</p>
                    <div class="column lb-container">
                        <div class="grid-col">
                            <div class="column span4 span8-md span12-lg"></div>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-framing.png'); ?>" data-lightbox="chahouse"  data-title="3D rotated bottle and cap" data-alt="3D rotated bottle and cap">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-framing.png'); ?>" alt="3D rotated bottle and cap">
                            </a>
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-chahouse/chahouse-perspective.png'); ?>" data-lightbox="chahouse" data-title="3D rotated teapot and extruded handle and spout" data-alt="3D rotated teapot and extruded handle and spout">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-perspective.png'); ?>" alt="3D rotated teapot and extruded handle and spout">
                            </a>
                        </div>
                    </div>
                    <p class="column">A subtle gradient was added behind the slogan and logo since the background is quite visually busy. The gradient makes the slogan and logo stand out more. With that, the project was complete!</p>
                    <div class="column lb-container final-poster">
                        <div class="grid-col">
                            <a href="<?php echo get_public_url('images/proj-chahouse/chahouse-final.jpg'); ?>" data-lightbox="chahouse"  data-title="3D rotated bottle and cap" data-alt="3D rotated bottle and cap" class="column span4 span8-md span12-lg">
                                <img src="<?php echo get_public_url('images/proj-chahouse/chahouse-final.jpg'); ?>" alt="3D rotated bottle and cap">
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