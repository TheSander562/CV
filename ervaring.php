<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "ervaring";
	?>
	<link href="/assets/css/ervaring.css" id="switch_style" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php
		include 'include/nav.php';
	?>
</div>

<section id="ervaring" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="/assets/img/icons/handshake.png" alt="demo">Ervaringen</h4>
        </div>

        <div id="timeline-experience">

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>D</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Designer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>RulerSoft</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my designing carrier here, spent tow years learning and working
                            in various designing aspects..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-4">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>F</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Frontend Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Micro IT</small>
                            </h6>
                            <h6>
                                <small>Jan 2012 - Mar 2014</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my frontend carrier here, spent tow years learning and working
                            in various frontend aspects. I worked on about 40+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Expert</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Libra IT Solutions</small>
                            </h6>
                            <h6>
                                <small>Jan 2014 - Mar 2015</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my expertise carrier here, spent tow years learning and working
                            in various UX/UI aspects. I worked on about 70+ projects local and online.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Senior Developer</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>WebStyle Technologies</small>
                            </h6>
                            <h6>
                                <small>Jan 2016 - Continue..</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I recently joined here, currently working on various development
                            aspects. I already worked on about..
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
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