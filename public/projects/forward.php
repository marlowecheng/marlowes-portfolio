<?php
    require('../init.php');
?><!DOCTYPE html>
<html lang="en">
<?php 
    $meta_title = $meta_title ?? 'Forward | Marlowe Cheng | Front-End Developer';
    $meta_desc ?? 'First place winner of BCIT\'s Hack the Break 2023 hackathon. Forward is a mentorship platform that connects local mentors, mentees, and peers within the tech industry.';

     require(get_path('public/partials/head.php')); ?>
<body>
    <?php 
        require(get_path('public/partials/header.php')); ?>
    <main>
        <section class="proj-intro">
            <div class="container">
                <div class="grid-col">
                    <div class="column proj-header">
                        <h1>Forward - A Mentorship Platform</h1>
                        <div class="proj-tags">
                            <p>Web Development</p>
                        </div>
                        <img src="<?php echo get_public_url('images/proj-forward/forward-mockup.jpg'); ?>" alt="Laptop with a website">
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Purpose</h3>
                        <p>Forward is a platform that helps local tech industry professionals and new-comers build communities and connections with each other.</p>
                        <div class="proj-links">
                            <a href="hhttps://github.com/Syransong/hackathon-2023" target="_blank" title="view keysmash on GitHub" class=" github-icon"><span><i class="fa-brands fa-github"></i></span></a>
                            <a href="https://forward.marlowecheng.com" title="View the keysmash generator here!" target="_blank" class="btn">Live Preview</a>
                        </div>
                    </div>
                    <div class="column span4 span8-md span12-lg">
                        <h3>Details</h3>
                        <ul class="bulleted">
                            <li>Tech Stack &mdash; HTML5, SCSS, PHP</li>
                            <li>Total Time &mdash; 18 hours</li>
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
                        <p>The hackathon theme was 'job security'. Searching for jobs is hard, especially as a newcomer to the industry. There's fear, isolation, anxiety, financial stress, and overwhelm when job applications aren't answered.</p>
                        <p>The industry is saturated, and imposter syndrome makes it hard for folks to take the next step.</p>
                    </div>
                    <div class="column span12-lg">
                        <h2>Solution</h2>
                        <p>Let's tackle that isolation and fear when searching for a job with mentors. Mentorship bridges the gap between seasoned industry professionals and newcomers by creating a bond and feelings of solidarity.</p>
                        <p>A mentorship platform that is specifically local to Vancouver will allow mentors, mentees, and peers to connect on a deeper level, as everyone is local.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">The Team</h2>
                    <p class="column">The team consist of all first-time hackers in our 4th term of BCIT's New Media program.</p>
                    <ul class="column bulleted">
                        <li>Rikki Soriano - full stack developer & graphic design</li>
                        <li>Kayla Tran - UI/UX designer</li>
                        <li>Karina Song - full stack developer & copywriting</li>
                        <li>Dave Koo - full stack developer & project documentation</li>
                        <li>Marlowe Cheng - front end developer & copywriting</li>
                    </ul>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Process</h2>
                    <p class="column">Karina and I started out with creating all the base files and folders that would hold partials, pages, styles, and scripts. I organized the sass folder and broke it down into different folders that would hold several partials for styles.</p>
                    <div class="lb-container lb-1-col column">
                        <div class="grid-col">
                            <a class="column span4 span8-md span12-lg" href="<?php echo get_public_url('images/proj-forward/sass-setup.png'); ?>" data-lightbox="forward-gallery" data-title="sass folder structure" data-alt="SCSS code in VS Code">
                                <img src="<?php echo get_public_url('images/proj-forward/sass-setup.png'); ?>" alt="SCSS code in VS Code">
                            </a>
                        </div>
                    </div>
                    <p class="column">For me, the next 24-hours consisted of writing the HTML5 and SCSS based on wireframes and mockups; cleaning up my own code so others could work on them; and creating components that could be reused.</p>
                </div>
            </div>
       </section>
       <section class="proj-process">
            <div class="container">
                <div class="grid-col">
                    <h2 class="column">Reflections</h2>
                    <p class="column">This was such a great opportunity to learn and grow even though there was a huge time-crunch. The team really bonded, and we all got to experience working within a development team.</p>
                    <p class="column">Everyone communicated and took initiative for each part of the project. Within 24 hours, we've only had 2 or 3 merge conflicts in git, which was amazing.</p>
                    <p class="column">Check out Forward, its GitHub repository, and the project showcase video!</p>
                    <div class="proj-links column justify-c">
                        <a href="hhttps://github.com/Syransong/hackathon-2023" target="_blank" title="view keysmash on GitHub" class=" github-icon"><span><i class="fa-brands fa-github"></i></span></a>
                        <a href="https://forward.marlowecheng.com" title="View the keysmash generator here!" target="_blank" class="btn">Live Preview</a>
                    </div>
                    <div class="yt-container column lb-1-col"><iframe src="https://www.youtube.com/embed/BtKzdFMZmG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
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