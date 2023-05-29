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
<?php /* Template Name: Page Home */?>
<?php
 $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<?php get_header(); ?>
<main class="main">


 <section class="companies">
  <div class="section-fix">
   <div class="companies__content">
    <h2 class="h2 h2--companies">Կազմակերպություններ
    </h2>
    <!-- company-list -->
    <div class="company-list">
     <?php
         $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'organizations-'.pll_current_language(),
                  'posts_per_page' => 40,
                  'orderby'   => 'order-en',
                  'order' => 'ASC',
                 );
         $arr_posts = new WP_Query($args);

         if ($arr_posts->have_posts()) :
          while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
            
       ?>
     <div class="company-block">
      <p>
         <?php
          if (has_post_thumbnail($arr_posts->post->ID)) :
          $image = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts->post->ID), 'single-post-thumbnail');
         ?>
         <a href="<?php echo $arr_posts->post->post_content; ?>" 
            target="_blank"
            rel="noreferrer noopener">
          <img src="<?php echo $image[0] ?>" 
               alt="<?php echo $arr_posts->post->post_title; ?>" 
               title="<?php echo $arr_posts->post->post_title; ?>" 
               width="158" 
               height="158" 
               decoding="async" 
               class="company-block__img js-hta" />
         </a>
         <?php endif; ?>
         </p>
     </div>

     <?php
        endwhile;
        wp_reset_postdata();
       endif;
      ?>
    </div>
    <!-- /company-list -->

   </div>
  </div>
 </section>

 <section class="persons dn">
  <div class="section-fix">
   <div class="persons__content">
    <h2 class="h2 h2--persons">
     Ձեռներեցներ, Հիմնադիրներ և Գլխավոր մենեջերներ
    </h2>

    <!--  === PERSONS  === -->
    <div class="persons-list">
     <?php
         $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'persons-'.pll_current_language(),
                  'posts_per_page' => 200,
                  'orderby'   => 'date',
                  'order' => 'ASC',
                 );
         $arr_posts = new WP_Query($args);

         if ($arr_posts->have_posts()) :
          while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
       ?>
     <div class="person-block">
      <p>
       <?php
        if (has_post_thumbnail($arr_posts->post->ID)) :
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts->post->ID), 'single-post-thumbnail');
       ?>
        <img src="<?php echo $image[0] ?>" 
             alt="<?php echo $arr_posts->post->post_title; ?>" 
             title="<?php echo $arr_posts->post->post_title; ?>" 
             width="169.98" 
             height="169.98" 
             decoding="async" 
             class="__img js-hta" />
       <?php endif; ?>
       </p>

      <h3 class="__title">
       <?php echo $arr_posts->post->post_title; ?>
      </h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a href="<?php echo $arr_posts->post->facebook_url; ?>" target="_blank"
        class="soc-link soc-link--fb" aria-label="" rel="noreferrer noopener">
        <svg class="icon icon--soc-fb" width="10" height="21">
         <use
          xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-fb">
         </use>
        </svg>
       </a>
       <a href="<?php echo $arr_posts->post->linkedin_url; ?>" target="_blank"
        class="soc-link" aria-label="Գիտուժ linkedin" rel="noreferrer noopener">
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use
          xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-in">
         </use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       <?php echo $arr_posts->post->post_content; ?>
      </div>

     </div>

     <?php
        endwhile;
        wp_reset_postdata();
       endif;
      ?>
    </div>
    <!--  === PERSONS  === -->



   </div>
  </div>
 </section>

</main>
<?php get_footer(); ?>