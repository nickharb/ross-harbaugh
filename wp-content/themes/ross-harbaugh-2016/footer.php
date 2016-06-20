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

    </div><!-- #content -->

    <footer class="site-footer">
        <div class="container">
            <h2 class="footer-heading">Ross Harbaugh</h2>

            <div class="row footer-col-wrapper">
                <div class="col-md-4">
                    <ul class="contact-list">
                        <li>Professor of Cello</li>
                        <li>Chair, Instrumental Performance Dept</li>
                        <li>Frost School of Music</li>
                        <li>PO Box 248165</li>
                        <li>University of Miami</li>
                        <li>Coral Gables, FL 33124</li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul class="contact-list">
                        <li>(305) 284-6846</li>
                        <li><a href="mailto:{{ site.email }}">r.harbaugh@miami.edu</a></li>
                    </ul>
                    <p>Ross Harbaugh is Professor of Cello and Chairman of the Instrumental Performance Department at the University of Miami's Frost School of Music, and cellist of the Bergonzi String Quartet.</p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
