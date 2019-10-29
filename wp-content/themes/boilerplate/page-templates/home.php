<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- Slider -->
<div class="grid-container fluid np pr">
  <a href="#" id="callback" data-open="call-back-modal">Call me back</a>
  <div id="hero" class="owl-carousel owl-theme">
    <?php 
    foreach(get_field('home_slider') as $slide){ ?>
      <div class="grid-x grid-margin-x" style="background-image: url('<?php echo $slide['slide_image'];?>');">
        <div class="hero-box position-absolute">
          <h2><?php echo $slide['slide_text'] ?></h2>
          <a href="<?php echo $slide['button_link'] ?>" class="btn"><?php echo $slide['button_text'] ?></a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="home-slide-bottom-text">
    <p>Know what you’re looking for? If so, get stuck into 1000’s of products listed now in our vast range of well known brands.</p>
    <img class="downArrow" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/home/down.svg" />
  </div>
</div>

<!-- Cats -->
<?php get_template_part( 'parts/horizontal-cats' ); ?>

<!-- Selector promo -->
<?php get_template_part( 'parts/selector-promo' ); ?>

<!-- Home stockist -->
<?php get_template_part( 'parts/stockist-home' ); ?>


<?php get_footer(); ?>
