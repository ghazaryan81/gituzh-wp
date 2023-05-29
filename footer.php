<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */
?>
<?php
 $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
</div>
<footer class="footer footer--spacer">
 <div class="section-fix">
  <div class="footer__content">
   <div class="contact-info">
    <div class="contact-info__row">
     Էլ.հասցե։ <strong>info@gituzh.org</strong>
    </div>
    <div class="contact-info__row">
     Հեռ.: <strong>+374 (94) 87 83 00</strong>
    </div>
   </div>

   <?php
      $current_lang = pll_current_language();
      wp_nav_menu(
       array(
        'menu'              => 'footer-menu-'.$current_lang,
        'menu_class'        => 'entity-links',
        'menu_id'           => '',
        'container'         => '',
        'container_class'   => 'menu',
        'container_id'      => '',
        'fallback_cb'       => 'wp_page_menu',
        'before'            => '',
        'after'             => '',
        'link_before'       => '',
        'link_after'        => '', 
        'echo'              => true,
        'depth'             => 0,
        'walker'            => '',
        'theme_location'    => '',
        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
        'item_spacing'      => 'preserve',
        )
       );
      ?>

   <div class="soc-info">
    <div class="soc-info__row">Հետևի՛ր մեզ սոցիալական ցանցերում:</div>

    <div class="soc-info__row">
     <div class="soc-links soc-links--footer">
      <a href="https://www.facebook.com/gituzh.am/" target="_blank"
       class="soc-link soc-link--fb" aria-label="Գիտուժ facebook"
       rel="noreferrer noopener">
       <svg class="icon icon--soc-fb" width="10" height="21">
        <use
         xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-fb">
        </use>
       </svg>
      </a>
      <a href="https://www.linkedin.com/company/gituzh/" target="_blank"
       class="soc-link" aria-label="Գիտուժ linkedin" rel="noreferrer noopener">
       <svg class="icon icon--soc-in" width="17.52" height="17.52">
        <use
         xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-in">
        </use>
       </svg>
      </a>
      <a href="https://twitter.com/gituzh" target="_blank" class="soc-link"
       aria-label="Գիտուժ twitter" rel="noreferrer noopener">
       <svg class="icon icon--soc-tw" width="18.15" height="14.75">
        <use
         xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-tw">
        </use>
       </svg>
      </a>
      <a href="https://www.instagram.com/gituzh.am/" target="_blank"
       class="soc-link" aria-label="Գիտուժ instagram" rel="noreferrer noopener">
       <svg class="icon icon--soc-inst" width="18.2" height="18.2">
        <use
         xlink:href="<?php echo $TEMPLATE_PATH; ?>/assets/img/svg/sprite.svg#icon-soc-inst">
        </use>
       </svg>
      </a>
     </div>
    </div>

   </div>
  </div>
 </div>
</footer>

<div class="progress-wrap">
 <svg class="progress-circle svg-content" width="100%" height="100%"
  viewBox="-1 -1 102 102" xmlns="http://www.w3.org/2000/svg"
  xmlns:xlink="http://www.w3.org/1999/xlink">
  <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
 </svg>
</div>

<?php wp_footer(); ?>
<script src="<?php echo $TEMPLATE_PATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo $TEMPLATE_PATH; ?>/assets/js/anime.min.js"></script>
<script src="<?php echo $TEMPLATE_PATH; ?>/assets/js/countUp.min.js">
</script>
<script src="<?php echo $TEMPLATE_PATH; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo $TEMPLATE_PATH; ?>/assets/js/main.js"></script>
</body>

</html>