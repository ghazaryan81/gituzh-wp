<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */
?>
<?php /* Template Name: Page Requirement */?>
<?php get_header(); ?>
<?php
 $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<main class="main">
 <section>
  <div class="section-fix">
   <div class="page__content pb0">
    <div class="page__typography">
     <?php the_content(); ?>
    </div>
   </div>
  </div>
 </section>
</main>
<?php get_footer(); ?>