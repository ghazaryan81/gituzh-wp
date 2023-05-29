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
<?php /* Template Name: Page News */?>
<?php
 $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<?php get_header(); ?>
<main class="main">
 <section class="">
  <div class="section-fix">
   <div class="page__content">
    <h1 class="h1 h1--page">
     <?php echo get_the_title(); ?>
    </h1>

    <div class="news-list">
     <?php
      $args = array(
               'post_type' => 'post',
               'post_status' => 'publish',
               'category_name' => 'news-'.pll_current_language(),
               'posts_per_page' => 100,
               'orderby'   => 'term_order',
               'order' => 'ASC',
              );
      $arr_posts = new WP_Query($args);

      if ($arr_posts->have_posts()) :
       while ($arr_posts->have_posts()) :
         $arr_posts->the_post();
      ?>

     <article class="news-article">
      <figure class="news-article__figure">
       <a href="<?php echo $arr_posts->post->post_content; ?>"
        class="news-article__link" target="_blank" rel="noreferrer noopener">
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article" style="z-index:10">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use
            xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-link-to">
           </use>
          </svg>
         </i>

         <?php
           if (has_post_thumbnail($arr_posts->post->ID)) :
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts->post->ID), 'single-post-thumbnail');
           ?>
         <p style="display:block;position:relative;top:0;left:0">
           <img class="news-article__img js-hta" 
                srcset="<?php echo $image[0] ?> 1x, 
                        <?php echo $image[0] ?> 2x, 
                        <?php echo $image[0] ?> 3x, 
                        <?php echo $image[0] ?> 4x" 
                src="<?php echo $image[0] ?>"
                width="460" 
                height="259" 
                alt="<?php echo $arr_posts->post->post_title; ?>"
                title="<?php echo $arr_posts->post->post_title; ?>" decoding="async" 
                style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:1"
                />

                <img class="news-article__img js-hta" 
                src="<?php echo $TEMPLATE_PATH; ?>/assets/img/tmp/news/carcass.png"
                width="460" 
                height="259" 
                alt=""
                title="" decoding="async" />
          </p>
         <?php endif; ?>
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a href="<?php echo $arr_posts->post->post_content; ?>"
          class="news-article__title-link">
          <?php echo $arr_posts->post->post_title; ?>
         </a>
        </h2>
       </div>
      </div>
     </article>

     <?php
       endwhile;
       wp_reset_postdata();
      endif;
     ?>
    </div>

   </div>
  </div>
 </section>
</main>
<?php get_footer(); ?>