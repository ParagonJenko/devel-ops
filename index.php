<!DOCTYPE html>
<html class="sr">

<!-- Head -->
<?php $title = "Devel-Ops - Design & Development";
require_once("includes/head.php");
?>
<!-- / Head -->

<body style="background-color: aliceblue;">

    <!-- Navbar -->
    <?php require_once("includes/navbar.php"); ?>
    <!-- / Navbar -->

    <section class="hero heading-hero is-medium">
        <div class="hero-body brand-color">
            <div class="container has-text-centered">
                <h1 class="title brand-font brand-color is-size-1">Devel-Ops</h1>
                <h2 class="subtitle brand-font brand-color is-size-3">Design & Development</h2>
            </div>
        </div>
    </section>

    <section class="wrapper">

        <section class="section-card services-cards has-text-centered">

            <div class="card heading-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="title">What can <span class="brand-color">Devel-Ops</span> do?</h3>
                    </div>
                </div>
            </div>

            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification is-primary instant-reveal">
                                <p class="title">Web Design</p>
                                <p class="subtitle">From template to bespoke websites, Wordpress to custom content management systems, we can do it all.</p>
                            </article>
                            <article class="tile is-child notification is-warning reveal-200">
                                <p class="title">Website Development</p>
                                <p class="subtitle">Need a custom website application, or want to know what you need to build one? Feel free to get in touch with us!</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info reveal-300">
                                <p class="title">Social Media & Marketing</p>
                                <p class="subtitle">Need help setting up your social media? Not sure what social media to use? We can help.</p>
                                <p class="subtitle">We can also help you navigate and understand the digital marketing world!</p>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-danger reveal-400">
                            <p class="title">Get in touch with us!</p>
                            <p class="subtitle">Email us at <a target="_blank" class="" href="mailto:request@develops.com">requests@devel-ops.com!</a></p>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-success reveal-500">
                        <p class="title">Branding & Graphic Design</p>
                        <div class="section-branding-graphic">
                            <div class="box">
                                <p class="subtitle">Logos <span><i class="fas fa-check-circle "></i></span></p>
                            </div>
                            <div class="box">
                                <p class="subtitle">Social Media Branding <span><i class="fas fa-check-circle icon-branding-graphic"></span></i></p>
                            </div>
                            <div class="box">
                                <p class="subtitle">Posters <span><i class="fas fa-check-circle icon-branding-graphic"></i></span></p>
                            </div>
                            <div class="box">
                                <p class="subtitle">And more...</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <hr>

        <section class="section-card has-text-centered">

            <div class="card heading-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="title">What are <span class="brand-color">Devel-Ops</span> currently doing?</h3>
                    </div>
                </div>
            </div>

            <div class="columns current-work-cards">
                <!--  -->
                <div class="column">
                    <div class="card instant-reveal">
                        <div class="card-content">
                            <div class="content">
                                <h4>Our current development project:</h4>
                                <p>Project Pew</p>
                                <a target="_blank" class="button is-youtube is-block is-fixed-height height-200" href="<?php echo $youtubeURL; ?>">
                                    <span class="icon">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                    <span>Our Devel-Ogs!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="column">
                    <div class="card reveal-200">
                        <div class="card-content">
                            <div class="content">
                                <h4>Want a project?</h4>
                                <a class="button is-email" target="_blank" href="mailto:request@develops.com">
                                    <span class="icon">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                    <span>Email us!</span>
                                </a>
                                <hr>
                                <p>Or get in touch on our social media.</p>
                                <div class="columns footer-social-media">
                                    <div class="column">
                                        <a target="_blank" href="<?php echo $facebookURL; ?>"><i class="fab fa-youtube fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="column">
                                        <a target="_blank" href="<?php echo $twitterURL; ?>"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="column">
                                        <a target="_blank" href="<?php echo $youtubeURL; ?>"><i class="fab fa-twitter fa-2x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="column">
                    <div class="card reveal-300">
                        <div class="card-content">
                            <div class="content">
                                <h4>Our current design project:</h4>
                                <p>Ourselves! We're currently working on this website, our social media accounts and developing our blog.</p>
                                <hr>
                                <span class="tag is-rounded is-medium is-info">Last Updated: 12th January 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>

        </section>

        <hr>

        <section class="section-card">

            <div class="card heading-card has-text-centered">
                <div class="card-content">
                    <div class="content">
                        <h3 class="title">What have <span class="brand-color">Devel-Ops</span> done?</h3>
                    </div>
                </div>
            </div>

            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <!--  -->
                    <div class="tile">
                        <!--  -->
                        <div class="tile is-parent is-vertical">
                            <!--  -->
                            <article class="tile is-child box instant-reveal-portfolio">
                                <p class="title">Blu-Fire</p>
                                <p>
                                    I previously developed branding for a startup called Blu-Fire. 
                                    It was quite a short project but I am very proud of how the end product looked. 
                                    I provided both the logos displayed along with a grayscale version and the editable files.</p>
                                <hr>
                                <div class="columns">
                                    <div class="column">
                                        <img class="portfolio-img full-width lazyload" data-src="images\portfolio\blu-fire\blu-fire-black-text.jpg"  
                                        alt="Image of Blu-Fire logo with black text.">
                                    </div>
                                    <div class="column">
                                        <img class="portfolio-img full-width lazyload" data-src="images\portfolio\blu-fire\blu-fire-white-text.jpg"  
                                        alt="Image of Blu-Fire logo with white text.">
                                    </div>
                                </div>
                                <hr>
                                <p class="has-text-weight-light has-text-grey-light has-text-right">by Alex Jenkinson</p>
                            </article>
                            <!--  -->
                            <article class="tile is-child box reveal-200-portfolio">
                                <p class="title"><a target="_blank" rel="noreferrer" href="https://paragon-gaming.co.uk">Paragon Gaming Website</a></p>
                                <p>
                                    Paragon Gaming is a media group that provides entertainment through both Twitch and YouTube.
                                    In the past I also created videos under the group so I built a website that showcased the 
                                    <a target="_blank" rel="noreferrer" href="https://www.twitch.tv/paragongreeny">Twitch.tv stream</a>.
                                </p>
                                <hr>
                                <a target="_blank" rel="noreferrer" href="https://www.paragon-gaming.co.uk">
                                <img class="portfolio-img full-width lazyload" data-src="images\portfolio\paragon-gaming\website-screenshot.jpg" 
                                alt="Image of Paragon Gaming UK website.">
                                </a>
                                <hr>
                                <p class="has-text-weight-light has-text-grey-light has-text-right">by Alex Jenkinson</p>
                            </article>
                        </div>
                        <!--  -->
                        <div class="tile is-parent">
                            <article class="tile is-child box reveal-300-portfolio">
                                <p class="title"><a target="_blank" href="https://www.justgiving.com/team/TeamHB">Team HB for Team Theo September Skydive</a></p>
                                <p>
                                    I decided to conquer one of my biggest fears this year, which is heights. Specifically 15,000 feet (roughly 5km) above ground.
                                    As part of my fundraising efforts I decided to put my graphic design skills to use and make my own promotional media.
                                </p>
                                <p>Interested in supporting my incredibly reckless yet exciting endeavour? <a target="_blank" href="https://www.justgiving.com/fundraising/alexjenko">Here's the link to the fundraising page.</a></p>
                                <hr>
                                <a target="_blank" href="https://www.justgiving.com/fundraising/alexjenko">
                                    <img class="portfolio-img full-width lazyload" data-src="images\portfolio\TeamHB\skydive-jenko-poster.jpg" alt="Skydiving promotional poster">
                                </a>
                                <hr>
                                <p class="has-text-weight-light has-text-grey-light has-text-right">by Alex Jenkinson</p>
                            </article>
                        </div>
                        <!--  -->
                    </div>
                    <!--  -->
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-success reveal-200-portfolio">
                            <p class="title">Could your project be here?</p>
                            <p class="subtitle">Contact us by any of our social media or by email at 
                                <a href="mailto:requests@devel-ops.com">requests@devel-ops.com</a>
                            </p>
                        </article>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <div class="tile is-parent">
                    <article class="tile is-child box reveal-400-portfolio">
                        <p class="title"><a target="_blank" rel="noreferrer" href="https://www.facebook.com/huaaps">Social Media & Graphics for Hull University Airsoft Society</a></p>
                        <p>During my time at University I joined the Airsoft society as it's a sport I love. I managed the social media, edited graphics and created videos during the 19/20 academic year.</p>
                        <p>If you want to check out the videos I made there is a 
                            <a target="_blank" rel="noreferrer" href="https://www.youtube.com/channel/UC4fMwbb0ISaMRcXW6-_svtQ">YouTube channel</a>
                            and a 
                            <a target="_blank" rel="noreferrer" href="https://www.facebook.com/pg/huaaps/videos/">Facebook page</a>
                            .</p>
                        <hr>
                        <!--  -->
                            <div class="columns is-gapless">
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\jenko-kaiah-unedited.jpg" 
                                    alt="Image of Jenko and Kaiah posing.">
                                </div>
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\jenko-kaiah-edited.jpg" 
                                    alt="Image of Jenko and Kaiah posing but visually edited.">
                                </div>
                            </div>
                            <div class="columns is-gapless">
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\jenko-lucas-kaiah-unedited.jpg" 
                                    alt="Image of three people with airsoft rifles posing.">
                                </div>
                                <div class="column">
                                    <img class="lazyload" data-src="images\portfolio\huaaps\jenko-lucas-kaiah-edited.jpg" 
                                    alt="Image of three people with airsoft rifles posing but visually edited.">
                                </div>
                            </div>
                            <div class="columns is-gapless">
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\wiktor-unedited.jpg" 
                                    alt="Image of someone squatting on the floor in airsoft gear.">
                                </div>
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\wiktor-edited.jpg" 
                                    alt="Image of someone squatting on the floor in airsoft gear but visually edited.">
                                </div>
                            </div>
                            <div class="columns is-gapless">
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\jenko-kaiah-window-unedited.jpg" 
                                    alt="Image of Jenko and Kaiah aiming out a window with airsoft rifles.">
                                </div>
                                <div class="column">
                                    <img class="portfolio-img lazyload" data-src="images\portfolio\huaaps\jenko-kaiah-window-edited.jpg" 
                                    alt="Image of Jenko and Kaiah aiming out a window with airsoft rifles but visually edited.">
                                </div>
                            </div>
                        <!--  -->
                        <hr>
                        <p class="has-text-weight-light has-text-grey-light has-text-right">by Alex Jenkinson</p>
                    </article>
                </div>
                <!--  -->
            </div>
        </section>

    </section>

    <!-- Footer -->
    <?php require_once("includes/footer.php"); ?>
    <!-- / Footer -->

    <!-- Scripts -->
    <?php require_once("includes/scripts.php"); ?>
    <!-- / Scripts -->


</body>

</html>