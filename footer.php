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

						<!-- prettier-ignore -->
						<ul class="entity-links">
       <li class="entity-links__li entity-links__li--current"><a href="#">Մեր մասին</a></li>
       <li class="entity-links__li"><a href="#">Համայնք</a></li>
       <li class="entity-links__li"><a href="#">Աջակիցներ</a></li>
       <li class="entity-links__li"><a href="#">Լուրեր</a></li>
       <li class="entity-links__li"><a href="#">FAQ</a></li>
       <li class="entity-links__li"><a href="#">Պահանջ</a></li>
       <li class="entity-links__li"><a href="#">Աջակցել</a></li>
      </ul>

						<div class="soc-info">
							<div class="soc-info__row">Հետևի՛ր մեզ սոցիալական ցանցերում:</div>
							<div class="soc-info__row">
								<div class="soc-links soc-links--footer">
									<a
										href="https://www.facebook.com/gituzh.am/"
										target="_blank"
										class="soc-link soc-link--fb"
										aria-label="Գիտուժ facebook"
										rel="noreferrer noopener"
									>
										<svg class="icon icon--soc-fb" width="10" height="21">
											<use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-fb"></use>
										</svg>
									</a>
									<a
										href="https://www.linkedin.com/company/gituzh/"
										target="_blank"
										class="soc-link"
										aria-label="Գիտուժ linkedin"
										rel="noreferrer noopener"
									>
										<svg class="icon icon--soc-in" width="17.52" height="17.52">
											<use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
										</svg>
									</a>
									<a
										href="https://twitter.com/gituzh"
										target="_blank"
										class="soc-link"
										aria-label="Գիտուժ twitter"
										rel="noreferrer noopener"
									>
										<svg class="icon icon--soc-tw" width="18.15" height="14.75">
											<use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-tw"></use>
										</svg>
									</a>
									<a
										href="https://www.instagram.com/gituzh.am/"
										target="_blank"
										class="soc-link"
										aria-label="Գիտուժ instagram"
										rel="noreferrer noopener"
									>
										<svg class="icon icon--soc-inst" width="18.2" height="18.2">
											<use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-inst"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- progress-wrap -->
			<div class="progress-wrap">
				<svg
					class="progress-circle svg-content"
					width="100%"
					height="100%"
					viewBox="-1 -1 102 102"
					xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink"
				>
					<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
				</svg>
			</div>
			<!-- /progress-wrap -->
		</div>

		</div>
  <?php wp_footer(); ?>
		<script src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/js/jquery.min.js"></script>
		<script src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/js/anime.min.js"></script>
		<script src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/js/countUp.min.js"></script>
		<script src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/js/wow.min.js"></script>
		<script src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/js/main.js"></script>
	</body>
</html>

