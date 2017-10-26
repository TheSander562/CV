<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "vaardigheden";
	?>
	<link href="/assets/css/vaardigheden.css" id="switch_style" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php
		include 'include/nav.php';
	?>
</div>

<section id="vaardigheden" class="section">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="/assets/img/icons/mixer.png" alt="demo">Vaardigheden</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="skills-title">
                                    <h6 class="text-center">Professioneel</h6>
                                </div>
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <div class="skillbar" data-percent="75%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>
                                <div class="skillbar" data-percent="55%">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">55%</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="skills-title">
                                    <h6 class="text-center">Persoonlijk</h6>
                                </div>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Communicatie</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Teamwerk</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>Creativiteit</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <div class="skillbar" data-percent="65%">
                                    <div class="skillbar-title"><span>Toewijding</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">65%</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="skills-title">
                                    <h6 class="text-center">Software</h6>
                                </div>
                                <div class="skillbar" data-percent="65%">
                                    <div class="skillbar-title"><span>Adobe Photoshop CC</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">65%</div>
                                </div>
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Sony Vegas PRO</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Office</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>MineCraft</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                            </div>
                        </div>
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