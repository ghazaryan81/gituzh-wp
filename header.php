<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Gituzh
 * @since Gituzh 0.0.1
 */
?>
<!DOCTYPE html>
<html lang="hy">
	<!-- prettier-ignore -->
	<head>
	<meta charset="utf-8"/>
	<!-- <base href="."/> -->
	<title>Գիտուժ նախաձեռնություն</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=5,minimum-scale=1,user-scalable=yes,shrink-to-fit=no"/>
 	<meta name="description" content="Գիտուժ նախաձեռնություն"/>
	<meta name="keywords" content="Գիտուժ"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content=""/>
	<meta property="og:locale" content="hy_HY"/>
	<meta property="og:title" content="Գիտուժ նախաձեռնություն"/>
	<meta property="og:description" content="Գիտուժ նախաձեռնություն"/>
	<meta property="og:image" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/gituzh.am-logo.jpg"/>
	<meta property="og:image:type" content="image/jpeg"/>
	<meta property="og:image:width" content="2500"/>
	<meta property="og:image:height" content="2500"/>
	<meta property="og:image:alt" content="Գիտուժ նախաձեռնություն"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:site" content=""/>
	<meta name="twitter:creator" content=""/>
	<meta name="twitter:title" content="Գիտուժ նախաձեռնություն"/>
	<meta name="twitter:description" content="Գիտուժ նախաձեռնություն"/>
	<meta name="twitter:image" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/gituzh.am-logo.jpg"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	<meta name="apple-mobile-web-app-title" content="Գիտուժ նախաձեռնություն"/>
	<meta name="application-name" content="Գիտուժ նախաձեռնություն"/>
	<meta name="msapplication-tooltip" content="Գիտուժ նախաձեռնություն"/>
	<meta name="msapplication-starturl" content="/"/>
	<meta name="msapplication-TileColor" content="#ffffff"/>
	<meta name="msapplication-TileImage" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/ms-icon-310x310.png"/>
	<meta name="msapplication-square70x70logo" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/mstile-70x70.png"/>
	<meta name="msapplication-square150x150logo" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/mstile-150x150.png"/>
	<meta name="msapplication-wide310x150logo" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/msapplicationWide310x150logo.png"/>
	<meta name="msapplication-square310x310logo" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/ms-icon-310x310.png"/>
	<meta name="msapplication-config" content="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/browserconfig.xml"/>
	<meta name="theme-color" content="#ffffff"/>
	<meta name="format-detection" content="address=no"/>
	<meta name="format-detection" content="email=no"/>
	<meta name="format-detection" content="telephone=no"/>
	<meta name="format-detection" content="date=no"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon.png"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-40x40.png" sizes="40x40"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-57x57.png" sizes="57x57"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-58x58.png" sizes="58x58"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-60x60.png" sizes="60x60"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-72x72.png" sizes="72x72"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-76x76.png" sizes="76x76"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-80x80.png" sizes="80x80"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-87x87.png" sizes="87x87"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-114x114.png" sizes="114x114"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-120x120.png" sizes="120x120"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-144x144.png" sizes="144x144"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-152x152.png" sizes="152x152"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-167x167.png" sizes="167x167"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-180x180.png" sizes="180x180"/>
	<link rel="apple-touch-icon-precomposed" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-1024x1024.png" sizes="1024x1024"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-icon.png"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-40x40.png" sizes="40x40"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-57x57.png" sizes="57x57"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-58x58.png" sizes="58x58"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-60x60.png" sizes="60x60"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-72x72.png" sizes="72x72"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-76x76.png" sizes="76x76"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-80x80.png" sizes="80x80"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-87x87.png" sizes="87x87"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-114x114.png" sizes="114x114"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-icon-120x120.png" sizes="120x120"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-114x114.png" sizes="144x144"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-152x152.png" sizes="152x152"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-167x167.png" sizes="167x167"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-180x180.png" sizes="180x180"/>
	<link rel="apple-touch-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/apple-touch-icon-1024x1024.png" sizes="1024x1024"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-without-bg.png"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-16x16.png" sizes="16x16"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-32x32.png" sizes="32x32"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-96x96.png" sizes="96x96"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-128x128.png" sizes="128x128"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-192x192.png" sizes="192x192"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-194x194.png" sizes="194x194"/>
	<link rel="icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-196x196.png" sizes="196x196"/>
	<link crossorigin="use-credentials" rel="manifest" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/manifest.json"/>
 <?php wp_head(); ?>
 <link href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon.ico" rel="alternate icon"/>
 <link rel="mask-icon" href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-without-bg.svg" color="#ffffff"/>
 <link href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/fav/favicon-with-bg.svg" rel="icon" type="image/svg+xml"/>
 <link href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/css/reset.css" rel="stylesheet" />
 <link href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/css/animate.css" rel="stylesheet"/>
 <link href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/css/styles.css" rel="stylesheet"/>
</head>
	<body>
		<div class="wrapper">

			<header class="header">
				<div class="section-fix">
					<div class="header__content">
						<a href="<?=pll_home_url() ?>" class="logo js-hta" title="Գիտուժ նախաձեռնություն">
							<img
								alt="Գիտուժ նախաձեռնություն"
								title="Գիտուժ նախաձեռնություն"
								width="70"
								height="65"
								class="logo__img js-hta"
								src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/gituzh-logo-vector.svg"
								decoding="async"
							/>
						</a>

						<div class="burger-container" onclick="this.classList.toggle('active')">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								width="70"
								height="70"
								viewBox="0 0 200 200"
							>
								<g stroke-width="6.5" stroke-linecap="round">
									<path d="M72 82.286h28.75" fill-rule="evenodd" stroke="#5965d4" />
									<path
										d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
										fill="none"
										stroke="#5965d4"
									/>
									<path d="M72 125.143h28.75" fill-rule="evenodd" stroke="#5965d4" />
									<path
										d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
										fill="none"
										stroke="#5965d4"
									/>
									<path d="M100.75 82.286h28.75" fill-rule="evenodd" stroke="#5965d4" />
									<path d="M100.75 125.143h28.75" fill-rule="evenodd" stroke="#5965d4" />
								</g>
							</svg>
						</div>

      <?php
      /*
      ?>
       <nav class="menu">
        <ul class="menu__ul">
         <li class="menu__li menu__li--current">
          <a href="#">ՄԵՐ ՄԱՍԻՆ</a>
         </li>
         <li class="menu__li">
          <a href="#">ՀԱՄԱՅՆՔ</a>
         </li>
         <li class="menu__li">
          <a href="#">ԱՋԱԿԻՑՆԵՐ</a>
         </li>
         <li class="menu__li">
          <a href="#">FAQ</a>
         </li>
        </ul>
       </nav>
      <?php
      */
      ?>

      <?php
      $current_lang = pll_current_language();
      wp_nav_menu(
       array(
        'menu'              => 'menu-'.$current_lang,
        'menu_class'        => 'menu__ul',
        'menu_id'           => '',
        'container'         => 'nav',
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

						<div class="group group--btn-langs">
							<a href="#" class="btn btn--support">
								<span class="txt-label">ԱՋԱԿՑԵԼ</span>
							</a>

       <!-- langs -->
       <span class="langs">
        <?php
         if(function_exists('pll_the_languages')) {
          $arr = pll_the_languages(array('raw'=>1));
          $index = 0;
          foreach ($arr as $key => $value) {
           $currentClass = in_array("current-lang", $value["classes"]) == 1 ? 'lang--current' : '';
           echo '<a href="'.$value["url"].'" class="lang lang--'.$key.' '.$currentClass.'">'.mb_strtoupper(mb_strimwidth($value["name"], 0, 3, '')).'</a>';
           if ($index< count($arr) - 1) {
            echo '<i class="text-divider">|</i>';
           }
           $index++;
          }
         }
        ?>
       </span>
       <!-- /langs -->

						</div>
					</div>
				</div>
			</header>
