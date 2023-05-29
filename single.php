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
<?php
 $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<?php get_header(); ?>
<main class="main">
 <section class="page dn">
  <div class="section-fix">
   <div class="page__content">
    <h2 class="h1 h1--page">
     <?php echo get_the_title(); ?>
    </h2>
    <?php the_content(); ?>
   </div>
  </div>
 </section>
</main>
<?php get_footer(); ?>