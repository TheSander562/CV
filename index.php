<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "home";
	?>
	<link href="/assets/css/start.css" id="switch_style" rel="stylesheet">
</head>
<body>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <div class="text-holder text-center">
                <h2>Sander Lambrechts</h2>
                <h6>Student MBO ICT-Beheerder</h6>
            </div>
        </div>
    </div>
</div>

<header>
	<video playsinline autoplay muted loop id="bgvid">
		<source src="/assets/vids/timelapse.mp4" type="video/mp4">
		<source src="/assets/vids/timelapse.webm" type="video/webm">
	</video>
</header>

<div id="v-card-holder" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="v-card" class="card">
					<div id="profile" class="right">
                        <img alt="profile-image" class="img-responsive" src="/assets/img/logo/logo.png">
                        <div class="slant"></div>
                    </div>
                    <div class="card-content">
                        <div class="info-headings">
                            <h4 class="text-uppercase left">Sander Lambrechts</h4>
                            <h6 class="text-capitalize left">Student MBO ICT-Beheerder</h6>
                        </div>
                        <div class="infos">
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">email</i></span>
                                    <span class="content"><a href="mailto:super-sander@live.nl">super-sander@live.nl</a></span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">language</i></span>
                                    <span class="content">cv.holocraftium.pe.hu</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="fa fa-instagram" aria-hidden="true"></i> <i class="fa fa-snapchat" aria-hidden="true"></i></span>
                                    <span class="content">TheSander562</span>
                                </li>                                
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">phone</i></span>
                                    <span class="content">+31 6 83 71 19 46</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">place</i></span>
                                    <span class="content">Ommenstraat 65, 5045TM Tilburg, NL</span>
                                </li>

                            </ul>
                        </div>
                        <div class="links">
                            <a href="https://www.facebook.com/sander.lambrechts" id="first_one" class="social btn-floating indigo"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/TheDeamonGamer" class="social  btn-floating blue"><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/117297347970066318725" class="social  btn-floating red"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.linkedin.com/in/sander-lambrechts-238308151/" class="social  btn-floating blue darken-3"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.nu.nl/rss/Internet" class="social  btn-floating orange darken-3"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="over" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="over-card" class="card">
                    <div class="card-content">
						<p>
                            Hallo! Ik ben Sander Lambrechts. Een student MBO ICT-Beheerder, met al veel ervaring in HTML5, PHP en CSS.
                        </p>
                    </div>
					<div id="over-btn" class="card-action">
                        <div class="over-btn">
                            <a href="/cv.docx" target="_blank" class="btn waves-effect">Download mijn CV</a>
							<a href="/contact" class="btn waves-effect">Neem contact op</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<?php
		include 'include/nav.php';
	?>
</div>

<section id="interest" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="/assets/img/icons/heart.png" alt="demo">Interesses</h4>
        </div>
        <div id="interest-card" class="card">
            <div class="card-content">
                <p>
                    Ik ben een erge muziek fan, van alle soorten behalve metal. Ook gamen in mijn vrije tijd vind ik erg leuk. Zoals MineCraft of Pokemon.
                    Ik vind het ook erg leuk om foto's te maken van alles en nog wat. De ruimte en de planeten spreken mij ook erg aan en vind ik heel interessant.
                </p>
            </div>
            <div class="row no-gutters">
                <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-music"></i>
                        <span>Muziek</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-gamepad"></i>
                        <span>Gaming</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-camera"></i>
                        <span>Fotografie</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <img src="/assets/img/icons/judo.png" width="50px" height="50px" style="margin-top: 10px;">
                        <span>Judo</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-train"></i>
                        <span>Reizen</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-wpexplorer"></i>
                        <span>Ruimte</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
	<?php
		include 'include/footer.php';
	?>
</footer>
<?php
	include 'include/scripts.php';
?>
<script src="/assets/js/start.js"></script>
</body>
</html>