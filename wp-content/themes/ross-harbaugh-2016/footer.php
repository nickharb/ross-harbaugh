<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-boilerplate
 */

?>
      </div><!-- .wrapper -->
    </div><!-- .page-content -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	  <div class="wrapper">

	    <h2 class="footer-heading">{{ site.title }}</h2>

	    <div class="footer-col-wrapper">
	      <div class="footer-col  footer-col-1">
	        <ul class="contact-list">
	          <li>Professor of Cello</li>
	          <li>Chair, Instrumental Performance Dept</li>
	          <li>Frost School of Music</li>
	          <li>PO Box 248165</li>
	          <li>University of Miami</li>
	          <li>Coral Gables, FL 33124</li>
	        </ul>
	      </div>

	      <div class="footer-col  footer-col-2">
	      </div>

	      <div class="footer-col  footer-col-3">
	        <ul class="contact-list"
	          <li>{{ site.phone }}</li>
	          <li><a href="mailto:{{ site.email }}">{{ site.email }}</a></li>
	        </ul>
	        <p class="text">{{ site.description }}</p>
	      </div>
	    </div>

	  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
