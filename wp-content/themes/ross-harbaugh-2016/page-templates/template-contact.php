<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="about">

			  <div class="media">
			    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-1.jpg">
			  </div>

			  <div class="about-text">
			    <h1 class="post-title">Contact</h1>
			    <ul class="contact-list">
			      <li>{{ site.phone }}</li>
			      <li></li>
			      <li><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
			      <br>
			      <li>Frost School of Music</li>
			      <li>PO Box 248165</li>
			      <li>University of Miami</li>
			      <li>Coral Gables, FL 33124</li>
			    </ul>
			  </div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
