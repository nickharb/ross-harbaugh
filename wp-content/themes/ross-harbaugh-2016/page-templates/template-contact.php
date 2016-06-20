<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="page-content">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-1.jpg">
        </div>

        <div class="col-md-6">
            <h1 class="post-title">Contact</h1>
            <ul class="contact-list">
                <li>(305) 284-6846</li>
                <li><a href="mailto:{{ site.email }}">r.harbaugh@miami.edu</a></li>
                <br>
                <li>Frost School of Music</li>
                <li>PO Box 248165</li>
                <li>University of Miami</li>
                <li>Coral Gables, FL 33124</li>
            </ul>
        </div>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
