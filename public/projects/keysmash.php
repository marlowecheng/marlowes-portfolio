<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php 
    $meta_title = $meta_title ?? 'Keysmash Generator | Marlowe Cheng | Front-End Developer';
    $meta_desc = $meta_desc ?? 'A Keysmash Generator generates a random number of characters using keys from \‘a\’ to \‘l\’ on the keyboard.';
    
    require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <h1>Keysmash Generator</h1>
                        <div class="proj-tags">
                            <p>Web Development</p>
                        </div>
                        <img src="<?php echo get_public_url('images/proj-keysmash/keysmash-mockup.jpg'); ?>" alt="Keysmash Generator mocked-up on a laptop">
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>Keysmash Generator generates a random number of characters using keys from ‘a’ to ‘l’ on the keyboard.</p>
                        <div class="proj-links">
                            <a href="https://github.com/marlowecheng/keysmash-generator" target="_blank" title="view keysmash on GitHub" class=" github-icon"><span><i class="fa-brands fa-github"></i></span></a>
                            <a href="https://keysmash.marlowecheng.com" title="View the banner here!" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Tech Stack &mdash; HTML5, CSS3, JavaScript</li>
                            <li>Total Time &mdash; 3 hours</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process prob-solution">
            <div class="container">
                <div class="grid-col">
                    <div class="column span12-lg">
                        <h2>Problem</h2>
                        <p>Do you ever see something online and feel the need to 'asdflksdjflasghlksdkjf', but typing it yourself is way too tedious?</p>
                        <p>With so much things demanding our attention these days, it's hard to muster the energy to type out keysmash for everything you see.</p>
                    </div>
                    <div class="column span12-lg">
                        <h2>Solution</h2>
                        <p>Introducing the keysmash generator!</p>
                        <p>This generates a random number of letters from 'a' to 'l' on the keyboard.</p>
                        <p>Includes a click-to-copy function, so you don't even need to touch your keyboard.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Process</h2>
                    <p class="column">Through school, I learned the valuable skill of <a href="https://github.com/marlowecheng/keysmash-generator#project-breakdown" title="steps to make keysmash generator" target="_blank">breaking down the steps</a> granularly. This allowed me to reduce the overwhelming feeling of starting a new project, and creates actionable tasks along the way. Thanks Airrick!</p>
                    <p class="column">To actually generate a keysmash, an event listener was added to the 'generate some keysmash!' button, which runs the generator function when clicked. The letters were thrown into an array, which is used in a for loop to retrieve random letters.</p>
                    <div class="lb-container column lb-1-col">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-keysmash/generator-function.png'); ?>" data-lightbox="keysmash-gallery" data-title="keysmash generator function" data-alt="JavaScript code in VS Code">
                                <img src="<?php echo get_public_url('images/proj-keysmash/generator-function.png'); ?>" alt="JavaScript code in VS Code">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Challenges</h2>
                    <p class="column">Originally, I used a div as an output container for the generated keysmash result. An event listener was put on the div to run the click-to-copy function on click.</p>
                    <p class="column">However, on Firefox the navigator.clipboard cannot interact with text in a div tag, so I had to change the output container into an input box.</p>
                    <div class="lb-container lb-1-col column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-keysmash/copy-function.png'); ?>" data-lightbox="keysmash-gallery" data-title="click-to-copy function" data-alt="JavaScript function in VS Code">
                                <img src="<?php echo get_public_url('images/proj-keysmash/copy-function.png'); ?>" alt="JavaScript function in VS Code">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Reflections</h2>
                    <p class="column">Since this project was made about 8 months after I first learned JavaScript, it was a great refresher to the language. Creating this project made me realize that I love figuring out the steps to solve a problem. Since I ran into a small hiccup with Firefox, I also learned the importance of cross-browser testing and compatibility.</p>
                    <p class="column">Future of Keysmash Generator: I found some cool CSS libraries that I would love to apply on this project.</p>
                    <p class="column">Check out the keysmash generator and its GitHub repository!</p>
                    <div class="proj-links column">
                        <a href="https://github.com/marlowecheng/keysmash-generator" target="_blank" title="view keysmash on GitHub" class=" github-icon"><span><i class="fa-brands fa-github"></i></span></a>
                        <a href="https://keysmash.marlowecheng.com" title="View the banner here!" target="_blank" class="btn">Live Preview</a>
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