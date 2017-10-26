<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "foto";
	?>
</head>
<body>


<!--==========================================
                  PRE-LOADER
===========================================-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>MY PORTFOLIOS</h2>
                <h6>Explore My Full Portfolio</h6>
            </div>
        </div>
    </div>
</div>


<!--==========================================
                  BACK TO HOME
===========================================-->
<div class="back-button"><span><i class="fa fa-angle-double-left"></i></span></div>


<!--==========================================
                 BACKGROUND
===========================================-->
<div class="single-background"></div>

<!--==========================================
                 SINGLE PORTFOLIO
===========================================-->
<section class="single-page">
    <div class="container">
        <!--SECTION TITLE-->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/safe.png" alt="demo">Portfolios</h4>
        </div>
        <!--PORTFOLIO HOLDER-->
        <div class="row" id="primary">
            <!--PORTFOLIO CONTENT-->
            <div id="content" class="col-sm-12">
                <div class="post card">
                    <!--PORTFOLIO IMAGE SLIDER-->
                    <div class="post-image">

                        <!-- SLIDER STRUCTURE -->
                        <div id="clients-slider"
                             class="swiper-container swiper-container-portfolios">
                            <div class="swiper-wrapper">
                                <!-- SLIDE ONE -->
                                <div class="swiper-slide">
                                    <img class="img-responsive" alt="demo" src="images/portfolio-single/single-1.jpg">
                                </div>

                                <!-- SLIDE TWO -->
                                <div class="swiper-slide">
                                    <img class="img-responsive" alt="demo" src="images/portfolio-single/single-2.jpg">
                                </div>

                                <!-- SLIDE THREE -->
                                <div class="swiper-slide">
                                    <img class="img-responsive" alt="demo" src="images/portfolio-single/single-3.jpg">
                                </div>
                            </div>
                            <!-- ADD PAGINATION -->
                            <div class="swiper-pagination swiper-pagination-portfolios"></div>
                        </div>

                    </div>

                    <!--PORTFOLIO TITLE AND DETAILS-->
                    <header>
                        <h2>Portfolio title here
                            <time datetime="2045-08-16">August 16,2045</time>
                        </h2>
                        <hr>
                        <div class="project-detail">
                            <p><strong>Client :</strong>Company Inc.</p>
                            <p><strong>Delivered :</strong>28 September, 2015</p>
                            <p><strong>Link :</strong><a href="#">companysite.com</a>
                            </p>
                            <p><strong>Type :</strong>Redesign, Branding, Website</p>
                        </div>
                    </header>
                    <!--BODY-->
                    <div class="post-body">
                        <h3>Project Details</h3>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.
                            Aenean
                            lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur.
                            Curabitur
                            blandit tempus porttitor.</p>

                        <h3>Feedback</h3>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis
                            natoque
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac
                            consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                        </p>
                        <div class="client-info">
                            <p>Mike Henry</p>
                            <p>CEO</p>
                            <p>MicroTech IT</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>
<footer>
	<?php
		include 'include/footer.php';
	?>
</footer>
<script src="javascript/vendors/jquery-2.1.3.min.js"></script>
<script src="javascript/vendors/bootstrap.min.js"></script>
<script src="javascript/vendors/materialize.min.js"></script>
<script src="javascript/vendors/retina.min.js"></script>
<script src="javascript/vendors/scrollreveal.min.js"></script>
<script src="javascript/vendors/swiper.jquery.min.js"></script>
<script src="javascript/single-page.js"></script>
<?php
	include 'include/scripts.php';
?>
</body>
</html>