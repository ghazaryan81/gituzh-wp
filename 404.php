<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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