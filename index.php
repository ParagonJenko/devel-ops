<!DOCTYPE html>
<html>

<!-- Head -->
<?php $title = "Devel-Ops";
require_once("includes/head.php"); ?>
<!-- / Head -->

<body style="background-color: aliceblue;">

    <!-- Navbar -->
    <?php require_once("includes/navbar.php"); ?>
    <!-- / Navbar -->

    <section class="hero heading-hero is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title brand-font is-size-1">Devel-Ops</h1>
                <h2 class="subtitle brand-font is-size-3">Design & Development</h2>
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
                            <article class="tile is-child notification is-primary">
                                <p class="title">Web Design</p>
                                <p class="subtitle">From template to bespoke websites, Wordpress to custom content management systems, we can do it all.</p>
                            </article>
                            <article class="tile is-child notification is-warning">
                                <p class="title">Website Development</p>
                                <p class="subtitle">Need a custom website application, get in touch!</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info">
                                <p class="title">Social Media & Marketing</p>
                                <p class="subtitle">Need help setting up your social media? Not sure what social media to use? We can help.</p>
                                <p class="subtitle">We can also help you navigate and understand the digital marketing world!</p>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification is-danger">
                            <p class="title">Get in touch with us!</p>
                            <p class="subtitle">Email us at <a class="" href="mailto:request@develops.com">requests@devel-ops.com!</a></p>

                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-success">
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
                                <p class="subtitle">Banners <span><i class="fas fa-check-circle icon-branding-graphic"></i></span></p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <hr>

        <section class="section-card current-work-cards has-text-centered">

            <div class="card heading-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="title">What are <span class="brand-color">Devel-Ops</span> currently doing?</h3>
                    </div>
                </div>
            </div>

            <div class="columns">
                <!--  -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <h4>Our current development project:</h4>
                                <p>Project Pew</p>
                                <a class="button is-youtube" href="mailto:request@develops.com">
                                    <span class="icon">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                                    <span>Stay tuned for our series on YouTube!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <h4>Want a project?</h4>
                                <a class="button is-email" href="mailto:request@develops.com">
                                    <span class="icon">
                                        <i class="far fa-envelope"></i>
                                    </span>
                                    <span>Email us!</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <h4>Our current design project:</h4>
                                <p>Ourselves! We're currently working on this website, our social media accounts and developing our blog.</p>
                                <span class="tag is-rounded is-medium is-info">Last Updated: 12th January 2020</span>
                            </div>
                        </div>
                    </div>
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