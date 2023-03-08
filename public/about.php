<?php
    require('init.php')
?><!DOCTYPE html>
<html lang="en">
<?php require(get_path('public/partials/head.php')); ?>
<body>
    <?php require(get_path('public/partials/header.php')); ?>    
    <main>
        <section class="about-me">
            <div class="container">
                <div class="grid-col">
                    <h1 class="column">About me, Marlowe!</h1>
                    <div class="column span4 span8-md span12-lg">
                        <p>Hi, I’m Marlowe (they/them) an aspiring web developer and graphic designer. I am inspired by nature, drag, my cultural background, and the works of Studio Ghibli. I also enjoy the aesthetics of cyberpunk, cute anime, and early 2000s website and graphics. </p>
                        <p>Outside of school work, my designs tends to lean into the chaotic vibes that could be encapsulated with this quote: <i>“I was born with the gift of hands and I’m going to make it everyone else’s problem”</i>.</p>
                    </div>
                    <img src="<?php echo get_public_url('images/about/marlowe-about.jpg'); ?>" alt="" class="column span4 span8-md span12-lg">
                </div>
            </div>
        </section>
        <section class="skills">
            <div class="container">
                <div class="grid-col">
                    <div class="skill-card column span4 span8-md span12-lg">
                        <h3>Languages</h3>
                        <ul class="bulleted">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                    <div class="skill-card column span4 span8-md span12-lg">
                        <h3>Software</h3>
                        <ul class="bulleted">
                            <li>Adobe Creative Suite</li>
                            <li>Visual Studio Code</li>
                            <li>Microsoft Office</li>
                        </ul>
                    </div>
                    <div class="skill-card column span4 span8-md span12-lg">
                        <h3>Education</h3>
                        <ul class="bulleted">
                            <li>BCIT &mdash; 2022-present
                                <p class="smol-txt">New Media Designs and Web Development</p>
                            </li>
                            <li>Douglas College &mdash; 2017-2021
                                <p class="smol-txt">Performing Arts - Music</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="values">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Values</h2>
                    <div class="card column grid-col">
                        <img src="<?php echo get_public_url('images/about/community.svg'); ?>" alt="4 frogs together" class="column span1">
                        <div class="column span4 span8-md span12-lg">
                            <h3>Community</h3>
                            <p>Community incredibly important to me as a person with multiple intersections. Being in community brings solidarity, safety, and comfort. Creating these kinds of safe spaces is a passion of mine.</p>
                        </div>
                    </div>
                    <div class="card column grid-col">
                        <img src="<?php echo get_public_url('images/about/curiosity.svg'); ?>" alt="a frog with a question mark on top of its head" class="column span1">
                        <div class="column span4 span8-md span12-lg">
                            <h3>Curiosity</h3>
                            <p>A drive to continuously learn, try new things, explore new ideas, and consider other possibilities. I love to learn new things, and picking up many new skills to put into my metaphorical backpack of knowledge.</p>
                        </div>
                    </div>
                    <div class="card column grid-col">
                        <img src="<?php echo get_public_url('images/about/humor.svg'); ?>" alt="a frog with a happy face" class="column span1">
                        <div class="column span4 span8-md span12-lg">
                            <h3>Humor</h3>
                            <p>Lightheartedness and fun goes a long way when building relationships and even tackling challenges. It’s great in appropriate situations and requires a sensible balance between seriousness and humour.</p>
                        </div>
                    </div>
                    <div class="card column grid-col">
                        <img src="<?php echo get_public_url('images/about/accountability.svg'); ?>" alt="a frog with an exclamation mark above its head" class="column span1">
                        <div class="column span4 span8-md span12-lg">
                            <h3>Accountability</h3>
                            <p>Personal accountability means setting myself up for success, and taking responsibility for my own mistakes and oversights. This also means being open to critiques and feedback without defensiveness and deflection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mission section-bg">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Mission</h2>
                    <p class="column">Bringing my skills back into my community and giving back via support and advocacy.</p>
                </div>
            </div>
        </section>
        <section class="goals">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Goals</h2>
                    <img src="<?php echo get_public_url('images/about/short.svg'); ?>" alt="frog horizontally condensed" class="column span1">
                    <div class="goal-cards column span4 span8-md span12-lg">
                        <h3>Short Term</h3>
                        <ul class="bulleted">
                            <li>Work as a junior developer at a company with a mentorship program</li>
                            <li>Work in-person within Vancouver</li>
                        </ul>
                    </div>
                    <img src="<?php echo get_public_url('images/about/long.svg'); ?>" alt="frog horizontally expanded" class="column span1">
                    <div class="goal-cards column span4 span8-md span12-lg">
                        <h3>Long Term</h3>
                        <ul class="bulleted">
                            <li>Work on a web development team that shares my values and intersections</li>
                            <li>Freelancing part-time as an income supplement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php require(get_path('public/partials/contact.php')) ?>
    </main>
    <?php require(get_path('public/partials/footer.php')) ?>
</body>
</html>