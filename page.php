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

<?php get_header(); ?>
<main class="main">
 <section class="page dn">
  <div class="section-fix">
   <div class="page__content">
    <h2 class="h1 h1--page">Լուրեր</h2>

    <!-- media-listing -->
    <div class="news-list">
     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/1-1x.jpg 1x,
           img/tmp/news/1-2x.jpg 2x,
           img/tmp/news/1-3x.jpg 3x,
           img/tmp/news/1-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/1-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a href="#" class="news-article__title-link">
          10 միֆ գիտության և գիտնականի մասին
         </a>
        </h2>
       </div>
      </div>
     </article>

     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/2-1x.jpg 1x,
           img/tmp/news/2-2x.jpg 2x,
           img/tmp/news/2-3x.jpg 3x,
           img/tmp/news/2-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/2-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a
          href="#"
          class="news-article__title-link"
          target="_blank"
          rel="noreferrer noopener"
         >
          Անահիտ Գալստյան. Բույսերի գենետիկան եւ ապրելու բարդ մեխանիզմները
         </a>
        </h2>
       </div>
      </div>
     </article>

     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/3-1x.jpg 1x,
           img/tmp/news/3-2x.jpg 2x,
           img/tmp/news/3-3x.jpg 3x,
           img/tmp/news/3-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/3-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a
          href="#"
          class="news-article__title-link"
          target="_blank"
          rel="noreferrer noopener"
         >
          Կրթության զարգացումը միայն անվտանգության համար չէ․ Արամ Փախչանյանի
          և Արեգ Դանագուլյանի զրույցը
         </a>
        </h2>
       </div>
      </div>
     </article>

     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/4-1x.jpg 1x,
           img/tmp/news/4-2x.jpg 2x,
           img/tmp/news/4-3x.jpg 3x,
           img/tmp/news/4-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/4-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a
          href="#"
          class="news-article__title-link"
          target="_blank"
          rel="noreferrer noopener"
         >
          Գեւորգ Եղիկյան. Քաղաքային գիտնականն ու դինամիկ զարգացումը
         </a>
        </h2>
       </div>
      </div>
     </article>

     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/5-1x.jpg 1x,
           img/tmp/news/5-2x.jpg 2x,
           img/tmp/news/5-3x.jpg 3x,
           img/tmp/news/5-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/5-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a
          href="#"
          class="news-article__title-link"
          target="_blank"
          rel="noreferrer noopener"
         >
          Գիտությունից՝ բիզնես․ Ի՞նչ է Technology Transfer Center-ը
         </a>
        </h2>
       </div>
      </div>
     </article>

     <article class="news-article">
      <figure class="news-article__figure">
       <a
        href="#"
        class="news-article__link"
        target="_blank"
        rel="noreferrer noopener"
       >
        <picture class="news-article__picture">
         <i class="link-to link-to--for-news-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <img
          class="news-article__img js-hta"
          srcset="
           img/tmp/news/6-1x.jpg 1x,
           img/tmp/news/6-2x.jpg 2x,
           img/tmp/news/6-3x.jpg 3x,
           img/tmp/news/6-4x.jpg 4x
          "
          src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/news/6-2x.jpg"
          width="460"
          height="259"
          alt="Գիտուժ նախաձեռնություն"
          title="Գիտուժ նախաձեռնություն"
          decoding="async"
         />
        </picture>
       </a>
      </figure>
      <div class="news-article__descr">
       <div class="group">
        <h2 class="news-article__title">
         <a
          href="#"
          class="news-article__title-link"
          target="_blank"
          rel="noreferrer noopener"
         >
          Երկար զրույց գիտության շուրջ [10]. Անահիտ Հովհաննիսյան | Լևոն
          Եպիսկոպոսյան
         </a>
        </h2>
       </div>
      </div>
     </article>
    </div>
    <!-- /media-listing -->
   </div>
  </div>
 </section>

 <section class="info dn">
  <div class="section-fix">
   <div class="info__content">
    <div class="info__content-group">
     <h1 class="h1 js-typo-intro">Գիտուժ նախաձեռնություն</h1>
     <p class="description description--about js-typo-intro-2">
      Հայաստանում գիտական Էկոհամակարգի զարգացմանն ու գիտության հանրայնացմանն
      աջակցող Նախաձեռնություն
     </p>
    </div>
   </div>
  </div>
 </section>

 <section class="goal dn">
  <div class="section-fix">
   <div class="goal__content">
    <div class="goal__left">
     <img
      src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/goal.svg"
      width="292.46"
      class="goal__img js-hta"
      alt="Գիտուժ նախաձեռնություն"
      title="Գիտուժ նախաձեռնություն"
      decoding="async"
     />
    </div>
    <div class="goal__right">
     <div class="goal__info">
      <p class="description description--goal">
       ՀՆԱ-ի 1%-ը ներդնել գիտության և տեխնոլոգիաների մեջ՝ պետության
       կարիքներից ու նպատակներից բխող ԳՀՓԿ աշխատանքների պետական պատվերի
       համակարգ ստեղծելու և դրա շարունակական զարգացումն ապահովելու համար։
      </p>
      <a
       href="#"
       class="default-link"
       target="_blank"
       rel="noreferrer noopener"
       >Ինչո՞ւ է սա կարևոր։</a
      >
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="indicator dn">
  <div class="section-fix">
   <div class="indicator__content">
    <div class="indicator__content-top">
     <div class="arrs-group arrs-group--1">
      <svg
       class="icon icon--arr-to-bottom-right"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
      </svg>
      <svg
       class="icon icon--arr-to-bottom-right"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
      </svg>
      <svg
       class="icon icon--arr-to-bottom-right"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
      </svg>
     </div>
     <div class="arrs-group arrs-group--2">
      <svg
       class="icon icon--arr-to-bottom-left"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-left"></use>
      </svg>
      <svg
       class="icon icon--arr-to-bottom-left"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-left"></use>
      </svg>
      <svg
       class="icon icon--arr-to-bottom-left"
       width="44.76"
       height="43.14"
      >
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-left"></use>
      </svg>
     </div>
    </div>
    <div class="indicator__content-middle">
     <div class="indicator__content-middle-left">
      <h2 class="h2 js-typo-intro">Գիտուժ համայնք</h2>
     </div>
     <div class="indicator__content-middle-right">
      <!--  -->
      <div class="count">
       <span class="count__value"
        ><span id="active-persons">170</span>+</span
       >
       <div class="count__label">ձեռներեց ու գործարար</div>
      </div>
      <div class="count">
       <span class="count__value"><span id="active-fund">20</span>+</span>
       <div class="count__label">միություն ու հիմնադրամ</div>
      </div>
      <!--  -->
     </div>
    </div>
    <div class="indicator__content-bottom">
     <div class="arrs-group arrs-group--3">
      <svg class="icon icon--arr-to-top-right" width="44.76" height="43.14">
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-top-right"></use>
      </svg>
      <svg class="icon icon--arr-to-top-right" width="44.76" height="43.14">
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-top-right"></use>
      </svg>
      <svg class="icon icon--arr-to-top-right" width="44.76" height="43.14">
       <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-top-right"></use>
      </svg>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="media dn">
  <div class="section-fix">
   <div class="media__content">
    <div class="cols --media --title">
     <div class="__1">
      <h2 class="h2">Lուրեր</h2>
     </div>
     <div class="__2"></div>
    </div>

    <div class="cols --media --content">
     <div class="__1">
      <article class="media-article-cover">
       <figure class="media-article-cover__figure">
        <a
         href="#"
         class="media-article-cover__link"
         target="_blank"
         rel="noreferrer noopener"
        >
         <i class="link-to link-to--for-media-article-cover">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>

         <figcaption class="media-article-cover__figcaption">
          <h3 class="media-article-cover__title">
           Անահիտ Գալստյան. Բույսերի գենետիկան եւ ապրելու բարդ մեխանիզմները
          </h3>
         </figcaption>
         <picture class="media-article-cover__picture">
          <img
           class="media-article-cover__img js-hta"
           srcset="
            img/tmp/lab-1-1x.jpg 1x,
            img/tmp/lab-1-2x.jpg 2x,
            img/tmp/lab-1-3x.jpg 3x,
            img/tmp/lab-1-4x.jpg 4x
           "
           src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/lab-1-2x.jpg"
           width="771.74"
           height="481.42"
           alt="Անահիտ Գալստյան. Բույսերի գենետիկան եւ ապրելու բարդ մեխանիզմները"
           title="Անահիտ Գալստյան. Բույսերի գենետիկան եւ ապրելու բարդ մեխանիզմները"
           decoding="async"
          />
         </picture>
        </a>
       </figure>
      </article>
     </div>
     <div class="__2">
      <article class="media-article">
       <figure class="media-article__figure">
        <a
         href="#"
         class="media-article__link"
         target="_blank"
         rel="noreferrer noopener"
        >
         <i class="link-to link-to--for-media-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>

         <picture class="media-article__picture">
          <img
           class="media-article__img js-hta"
           srcset="
            img/tmp/lab-2-1x.jpg 1x,
            img/tmp/lab-2-2x.jpg 2x,
            img/tmp/lab-2-3x.jpg 3x,
            img/tmp/lab-2-4x.jpg 4x
           "
           src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/lab-2-2x.jpg"
           width="139.16"
           height="99.62"
           alt="Գիտուժ նախաձեռնություն"
           title="Գիտուժ նախաձեռնություն"
           decoding="async"
          />
         </picture>
        </a>
       </figure>
       <div class="media-article__descr">
        <div class="group">
         <h3 class="media-article__title">
          <strong>
           Կրթության զարգացումը միայն անվտանգության համար չէ․
          </strong>
          Արամ Փախչանյանի և Արեգ Դանագուլյանի զրույցը
         </h3>
         <a
          href="#"
          class="media-article__details-link"
          target="_blank"
          rel="noreferrer noopener"
          >Կարդալ ավելին</a
         >
        </div>
       </div>
      </article>
      <article class="media-article">
       <figure class="media-article__figure">
        <a
         href="#"
         class="media-article__link"
         target="_blank"
         rel="noreferrer noopener"
        >
         <i class="link-to link-to--for-media-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <picture class="media-article__picture">
          <img
           class="media-article__img js-hta"
           srcset="
            img/tmp/lab-3-1x.jpg 1x,
            img/tmp/lab-3-2x.jpg 2x,
            img/tmp/lab-3-3x.jpg 3x,
            img/tmp/lab-3-4x.jpg 4x
           "
           src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/lab-3-2x.jpg"
           width="139.16"
           height="99.62"
           alt="Գիտուժ նախաձեռնություն"
           title="Գիտուժ նախաձեռնություն"
           decoding="async"
          />
         </picture>
        </a>
       </figure>
       <div class="media-article__descr">
        <div class="group">
         <h3 class="media-article__title">
          <strong>
           Կրթության զարգացումը միայն անվտանգության համար չէ․
          </strong>
          Արամ Փախչանյանի և Արեգ Դանագուլյանի զրույցը
         </h3>
         <a
          href="#"
          class="media-article__details-link"
          target="_blank"
          rel="noreferrer noopener"
          >Կարդալ ավելին</a
         >
        </div>
       </div>
      </article>
      <article class="media-article">
       <figure class="media-article__figure">
        <a
         href="#"
         class="media-article__link"
         target="_blank"
         rel="noreferrer noopener"
        >
         <i class="link-to link-to--for-media-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <picture class="media-article__picture">
          <img
           class="media-article__img js-hta"
           srcset="
            img/tmp/lab-4-1x.jpg 1x,
            img/tmp/lab-4-2x.jpg 2x,
            img/tmp/lab-4-3x.jpg 3x,
            img/tmp/lab-4-4x.jpg 4x
           "
           src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/lab-4-2x.jpg"
           width="139.16"
           height="99.62"
           alt="Գիտուժ նախաձեռնություն"
           title="Գիտուժ նախաձեռնություն"
           decoding="async"
          />
         </picture>
        </a>
       </figure>
       <div class="media-article__descr">
        <div class="group">
         <h3 class="media-article__title">
          <strong>Անահիտ Գալստյան. </strong>
          Բույսերի գենետիկան եւ ապրելու բարդ մեխանիզմները
         </h3>
         <a
          href="#"
          class="media-article__details-link"
          target="_blank"
          rel="noreferrer noopener"
          >Կարդալ ավելին</a
         >
        </div>
       </div>
      </article>
      <article class="media-article">
       <figure class="media-article__figure">
        <a
         href="#"
         class="media-article__link"
         target="_blank"
         rel="noreferrer noopener"
        >
         <i class="link-to link-to--for-media-article">
          <svg class="icon icon--icon-link-to" width="60" height="60">
           <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-link-to"></use>
          </svg>
         </i>
         <picture class="media-article__picture">
          <img
           class="media-article__img js-hta"
           srcset="
            img/tmp/lab-5-1x.jpg 1x,
            img/tmp/lab-5-2x.jpg 2x,
            img/tmp/lab-5-3x.jpg 3x,
            img/tmp/lab-5-4x.jpg 4x
           "
           src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/tmp/lab-5-2x.jpg"
           width="139.16"
           height="99.62"
           alt="Գիտուժ նախաձեռնություն"
           title="Գիտուժ նախաձեռնություն"
           decoding="async"
          />
         </picture>
        </a>
       </figure>
       <div class="media-article__descr">
        <div class="group">
         <h3 class="media-article__title">
          <strong>
           Կրթության զարգացումը միայն անվտանգության համար չէ․
          </strong>
          Արամ Փախչանյանի և Արեգ Դանագուլյանի զրույցը
         </h3>
         <a
          href="#"
          class="media-article__details-link"
          target="_blank"
          rel="noreferrer noopener"
          >Կարդալ ավելին</a
         >
        </div>
       </div>
      </article>
     </div>
    </div>
    <!-- /content -->

    <!-- content -->
    <div class="cols --media --btn">
     <div class="__1">
      <a
       href="#"
       class="btn btn--support"
       target="_blank"
       rel="noreferrer noopener"
      >
       <span class="txt-label">ԱՎԵԼԻՆ</span>
      </a>
     </div>
     <div class="__2"></div>
    </div>
    <!-- /content -->
   </div>
  </div>
 </section>

 <section class="about dn">
  <div class="section-fix">
   <div class="about__content">
    <div class="grid-c-r2 --about --1">
     <div class="cell --c">
      <h1 class="h1 --about">Մեր մասին</h1>
     </div>
     <!-- prettier-ignore -->
     <div class="cell --r1">

     <div class="decor-icon decor-icon--about">
      <img src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/orbit1.svg" class="decor-icon decor-icon--1 js-hta" alt="Գիտուժ նախաձեռնություն" title="Գիտուժ նախաձեռնություն" width="70.63" height="119.98" decoding="async" />
      <img src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/orbit2.svg" class="decor-icon decor-icon--2 js-hta" alt="Գիտուժ նախաձեռնություն" title="Գիտուժ նախաձեռնություն" width="111.27" height="119.98" decoding="async" />
      <img src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/orbit3.svg" class="decor-icon decor-icon--3 js-hta" alt="Գիտուժ նախաձեռնություն" title="Գիտուժ նախաձեռնություն" width="70.63" height="119.98" decoding="async" />
      <img src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/orbit3.svg" class="decor-icon decor-icon--3 js-hta" alt="Գիտուժ նախաձեռնություն" title="Գիտուժ նախաձեռնություն" width="70.63" height="119.98" decoding="async" />
      <img src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/orbit1.svg" class="decor-icon decor-icon--1 js-hta" alt="Գիտուժ նախաձեռնություն" title="Գիտուժ նախաձեռնություն" width="70.63" height="119.98" decoding="async" />
     </div>

    </div>
     <div class="cell --r2">
      <p class="description description--about description--about-space">
       «Գիտուժը» հանրային նախաձեռնություն է, որը ձևավորվել է 2021 թվականին։
       Այս պահին ավելի քան 170 ընկերությունների հիմնադիրներ և ձեռներեցներ,
       ինչպես նաև 21 ասոցիացիաներ ու հիմնադրամներ տեխնոլոգիական, բիզնես և այլ
       համայնքներից միավորվել են «Գիտուժ»-ի օրակարգի շուրջ: Նշենք, որ
       համայնքը շարունակում է անընդհատ մեծանալ։
      </p>
      <p class="description description--about description--about-space">
       Գիտուժի օրակարգը բյուրեղացված է մեր առաքելության և տեսլականի մեջ։
      </p>
      <p class="description description--about description--about-space">
       Գիտության/ԳՀՓԿ քաղաքականության մշակման, պետական հատկացումների
       ավելացման, ինչպես նաև գիտության հանրահռչակման համար Գիտուժի ջանքերը
       խթան են հանդիսացել Հայաստանում վերջին 3 տասնամյակների ընթացքում
       աննախադեպ մի շարք առաջընթացների և կառուցողական գործընթացների համար:
      </p>
     </div>
    </div>

    <!--  -->
    <div class="grid-c-r2 --about --2">
     <div class="cell --c">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/star.svg"
       alt="Գիտուժ նախաձեռնություն"
       title="Գիտուժ նախաձեռնություն"
       width="273.4"
       height="225.96"
       class="about-image about-image--star js-hta"
       decoding="async"
      />
     </div>
     <div class="cell --r1">
      <h2 class="h2 h2--about h2--about-spacer">Առաքելություն</h2>
     </div>
     <div class="cell --r2">
      <p class="description description--about description--about-space">
       Հզորացնել Հայաստանը գիտության և տեխնոլոգիաների միջոցով։
      </p>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="grid-c-r2 --about --3">
     <div class="cell --c">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/telescope.svg"
       alt="Գիտուժ նախաձեռնություն"
       title="Գիտուժ նախաձեռնություն"
       width="273.4"
       height="225.96"
       class="about-image about-image--telescope js-hta"
       decoding="async"
      />
     </div>
     <div class="cell --r1">
      <h2 class="h2 h2--about h2--about-spacer">Տեսլական</h2>
     </div>
     <div class="cell --r2">
      <p class="description description--about description--about-space">
       Հայաստանի Հանրապետությունում ձևավորվել է հզոր ու  ճկուն գիտական և ԳՀՓԿ
       էկոհամակարգ, որը լուծում է մեր երկրի առջև ծառացած մարտահրավերներն ու
       խնդիրները, խթանում է տնտեսության ու հասարակության շարունակական
       զարգացումը և արժեք է տալիս աշխարհին։
      </p>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="grid-c-r2 --about --4">
     <div class="cell --c">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/decoration/balance.svg"
       alt="Գիտուժ նախաձեռնություն"
       title="Գիտուժ նախաձեռնություն"
       width="273.4"
       height="225.96"
       class="about-image about-image--balance js-hta"
       decoding="async"
      />
     </div>
     <div class="cell --r1">
      <h2 class="h2 h2--about h2--about-spacer">Արժեքներ</h2>
     </div>
     <div class="cell --r2">
      <ul class="description description--about values-list">
       <li class="__it">
        <svg class="icon icon--tringle-next" width="15.74" height="15.74">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-tringle-next"></use>
        </svg>
        Առաքելությանը հավատարիմ
       </li>
       <li class="__it">
        <svg class="icon icon--tringle-next" width="15.74" height="15.74">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-tringle-next"></use>
        </svg>
        Ճշմարտասեր
       </li>
       <li class="__it">
        <svg class="icon icon--tringle-next" width="15.74" height="15.74">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-tringle-next"></use>
        </svg>
        Համախմբող
       </li>
       <li class="__it">
        <svg class="icon icon--tringle-next" width="15.74" height="15.74">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-tringle-next"></use>
        </svg>

        Համագործակցող
       </li>
      </ul>
     </div>
    </div>
    <!--  -->
   </div>
  </div>
 </section>

 <section class="supporter dn">
  <div class="section-fix">
   <div class="supporter__content">
    <div class="tag-cell">
     <span class="tag">2022 թ.</span>
    </div>

    <!--  -->
    <div class="supporter-cols">
     <div class="__left">
      <h3 class="h2 h2--supporter">Խոշոր <br />հովանավոր</h3>
     </div>
     <div class="__right">
      <div class="arrows-cell">
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
      </div>

      <ul class="supporter-list">
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Audiosoft</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Krisp</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">PicsArt</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener"
         >SuperAnnotate</a
        >
       </li>
      </ul>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="supporter-cols">
     <div class="__left">
      <h3 class="h2 h2--supporter">Հովանավոր</h3>
     </div>
     <div class="__right">
      <div class="arrows-cell">
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
      </div>

      <!-- prettier-ignore -->
      <ul class="supporter-list">
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Արամ Ջիվանյան</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Արամ Փախչանյան</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Conjure</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Cowo</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">FormulaVC</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Խաչիկ Նազարյան</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Mandal.ai</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">SHEMM</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Տիգրան Շահվերդյան</a>
       </li>
       <li class="__it">
        <a href="#" target="_blank" rel="noreferrer noopener">Վահե Մուսոյան</a>
       </li>
      </ul>
     </div>
    </div>
    <!--  -->

    <!--  -->
    <div class="supporter-cols">
     <div class="__left">
      <h3 class="h2 h2--supporter">Աջակից</h3>
     </div>
     <div class="__right">
      <div class="arrows-cell">
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
       <svg
        class="icon icon--supporter icon--arr-to-bottom-right"
        width="44.76"
        height="43.14"
       >
        <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-arr-to-bottom-right"></use>
       </svg>
      </div>

      <!-- prettier-ignore -->
      <ul class="supporter-list supporter-list--last">
       <li class="__it"><a href="#" target="_blank" rel="noreferrer noopener">Գևորգ Սաֆարյան</a></li>
       <li class="__it"><a href="#" target="_blank" rel="noreferrer noopener">Նարեկ Վարդանյան</a></li>
       <li class="__it"><a href="#" target="_blank" rel="noreferrer noopener">VCV</a></li>
      </ul>
     </div>
    </div>
    <!--  -->
   </div>
  </div>
 </section>

 <section class="companies dn">
  <div class="section-fix">
   <div class="companies__content">
    <h2 class="h2 h2--companies">Կազմակերպություններ</h2>
    <!--  -->
    <div class="company-list">
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>

     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
     <div class="company-block">
      <a href="https://uate.org/" target="_blank" rel="noreferrer noopener">
       <img
        src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/companies/UTAE_200.jpg"
        alt="UTAE"
        title="UTAE"
        width="158"
        height="158"
        decoding="async"
        class="company-block__img js-hta"
       />
      </a>
     </div>
    </div>
    <!--  -->
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
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->
      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
     <div class="person-block">
      <img
       src="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/persons/Narine-Kotikyan.jpg"
       class="__img js-hta"
       width="169.98"
       height="169.98"
       alt="Narine Kotikyan"
       title="Narine Kotikyan"
      />
      <h3 class="__title">ՆԱՐԻՆԵ ԿՈՏԻԿՅԱՆ</h3>

      <!--  -->
      <div class="soc-links soc-links--persons soc-links--invert">
       <a
        href="https://www.facebook.com/"
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
        href="https://www.linkedin.com/company/"
        target="_blank"
        class="soc-link"
        aria-label="Գիտուժ linkedin"
        rel="noreferrer noopener"
       >
        <svg class="icon icon--soc-in" width="17.52" height="17.52">
         <use xlink:href="<?=$GLOBALS['TEMPLATE_PATH']; ?>/assets/ui/img/svg/sprite.svg#icon-soc-in"></use>
        </svg>
       </a>
      </div>
      <!--  -->

      <div class="__descr">
       «Spacetab» ընկերության համահիմնադիր և գործադիր տնօրեն «Startup Grind
       Yerevan» կազմակերպության տնօրեն «Founder Institute Yerevan»
       կազմակերպության տնօրեն
      </div>
     </div>
    </div>
    <!--  === PERSONS  === -->
   </div>
  </div>
 </section>
</main>
<?php get_footer(); ?>
