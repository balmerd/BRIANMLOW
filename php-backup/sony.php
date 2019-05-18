<?php
	$title = " | Sony Insider";
	include "templates/header.php";
?>

<header id="artform-project-hero" style="background-image: url('assets/sony_hero.png')">
	<span class="artform-project-hero-overlay">
		<span class="artform-project-hero-header">
			<span class="industry">Industry | Entertainment</span>
			<h1>Sony Insider</h1>
		</span>
	</span>
</header>

<section id="artform-project-content">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-md-6">
				<div id="artform-project-description">
					<div class="entry-content">
						<p>&nbsp;</p>
						<p>Sony’s quarterly newsletter showcasing it’s upcoming shows.</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="artform-project-list">
					<div class="entry-content">
						<h3>Project Components:</h3>
						<ul>
							<li>Concept, Layout &amp; Graphic Design</li>
							<li>Print Design</li>
						</ul>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="artform-project-images">
	<div class="artform-project-image">
		<img src="assets/sony_1.png" class="img-responsive" alt="" />
	</div>
	<div class="artform-project-image">
		<img src="assets/sony_2.png" class="img-responsive" alt="" />
	</div>
	<div class="artform-project-image">
		<img src="assets/sony_3.png" class="img-responsive" alt="" />
	</div>
</section>

<nav id="artform-project-pagination">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-xs-6">
				<div class="pagination-prev">
					<a class="artform-fadeout" href="stella.php" rel="prev">Stella &amp; Dot</a> <span>Previous</span>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="pagination-next">
					<a class="artform-fadeout" href="spectral.php" rel="next">Spectral Diagnostics</a> <span>Next</span>
				</div>
			</div>
		</div>
	</div>
</nav>

<?php include "templates/footer.php"; ?>