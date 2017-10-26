<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "opleiding";
	?>
	<link href="/assets/css/opleiding.css" id="switch_style" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php
		include 'include/nav.php';
	?>
</div>

<section id="opleiding" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="/assets/img/icons/book.png">Opleiding</h4>
        </div>
        <div id="timeline-opleiding">
            <div class="timeline-block">
                <div class="timeline-dot"><h6>B</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title">Basischool</h6>
                        <div class="timeline-info">
                            <h6>
                                <small>De Bloemaert</small>
                            </h6>
                            <h6>
                                <small>Sept 2006 - Jul 2013</small>
                            </h6>
                        </div>
						<p>
                            I completed my preparatory education from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="timeline-block">
                <div class="timeline-dot"><h6>M</h6></div>
                <div class="card timeline-content">
                    <div class="card-content">
                        <h6 class="timeline-title">Middelbare school</h6>
                        <div class="timeline-info">
                            <h6>
                                <small>Beatrix College</small>
                            </h6>
                            <h6>
                                <small>Sep 2013 - Jul 2017 </small>
                            </h6>
                        </div>
                        <p>
                            I completed my high school degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>M</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Down Street College</small>
                            </h6>
                            <h6>
                                <small>Jan 2006 - Mar 2008</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my computer science degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Software Engineering</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Oxford University</small>
                            </h6>
                            <h6>
                                <small>Jan 2009 - Mar 2010</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this degree from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FIFTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>U</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">UI/UX Workshop</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>IT Next Academy</small>
                            </h6>
                            <h6>
                                <small>Jan 2010 - Mar 2011</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-2">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SIXTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-globe"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Web Development</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Lipro University</small>
                            </h6>
                            <h6>
                                <small>Jan 2011 - Mar 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this course from this prestigious institution.
                            I successful completed all the credits without any fallout and got A grade overall.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-3">
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