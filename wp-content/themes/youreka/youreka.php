<?php/* Template Name: YourekaHome */?>
<?php get_header(); ?>
<main class="page__home">
  <section class="hero">
    <div class="hero__pattern-background">
      <div class="hero__content container">
        <div class="hero__content-wrapper">
          <h1><?php the_field('main_title'); ?></h1>
          <h2><?php the_field('sub_title'); ?></h2>
          <div class="hero__cta-container">
            <a type="button" class="btn btn-primary btn-wide btn-shadow hero__cta" href="<?php the_field('main_button_link'); ?>" ><?php the_field('main_button_text'); ?></a>
            <?php the_field('secondary_cta_text'); ?>
          </div>
        
          <div class="hero__steps-container">
            <div class="hero__circle">
              <img class="hero__arrow" src="<?php echo get_template_directory_uri() ?>/images/handdrawnarrow.svg" alt="">
              <div class="hero__step">STEP</div>  
              <div class="hero__step-number">1</div>  
            </div>
            <?php the_field('steps_text'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="hero__image-background">
      <img class="hero__image-background-img" src="<?php the_field('hero_image') ?>" alt="">
    </div>
  </section>
</main>
<?php get_footer(); ?>
