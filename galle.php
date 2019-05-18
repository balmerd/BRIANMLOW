<?php
	$title = " | Vanessa Galle";
	include "templates/header.php";
?>

<header id="artform-project-hero" style="background-image: url('assets/galle_hero.png')">
	<span class="artform-project-hero-overlay">
		<span class="artform-project-hero-header">
			<span class="industry">Industry | Photography</span>
			<h1>Vanessa Galle</h1>
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
						<p>Vanessa approached me with a request for a self-promo piece that she could distribute to potential clients. We ultimately decided on a four-panel, double-sided, perfed piece that could double as a CD insert in the future.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="artform-project-list">
					<div class="entry-content">
						<h3>Project Components:</h3>
						<ul>
							<li>Creative Direction</li>
                          <li>Concept &amp; Strategy</li>
                          <li>Print &amp; Graphic Design</li>
                          <li>Website Design &amp; Development</li>
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
	    <img src="assets/galle_1.png" class="img-responsive" alt="" />
    </div>
    <div class="artform-project-image">
	    <img src="assets/galle_2.png" class="img-responsive" alt="" />
    </div>
    <div class="artform-project-image">
	    <img src="assets/galle_3.png" class="img-responsive" alt="" />
    </div>
    <div class="artform-project-image">
	    <img src="assets/galle_4.png" class="img-responsive" alt="" />
    </div>
    <div class="artform-project-image">
	    <img src="assets/galle_5.png" class="img-responsive" alt="" />
    </div>
</section>

<nav id="artform-project-pagination">
	<div class="container-fluid">
		<div class="row no-gutter">
			<div class="col-xs-6">
				<div class="pagination-prev">
					<a class="artform-fadeout" href="inside.php" rel="prev">Inside Nightclub</a> <span>Previous</span>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="pagination-next">
					<a class="artform-fadeout" href="aaron.php" rel="next">Aaron Schwartz</a> <span>Next</span>
				</div>
			</div>
		</div>
	</div>
</nav>

<?php include "templates/footer.php"; ?>