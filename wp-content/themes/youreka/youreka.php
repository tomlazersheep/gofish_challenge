<?php/* Template Name: YourekaHome */?>
<?php get_header(); ?>
<main class="page__home">
  <section class="hero">
    <div class="hero__pattern-background">
      <div class="hero__content container">
        <div class="hero__content-wrapper">
          <h1>Lorem Ipsum Dolor Sit Amet.</h1>
          <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed nisl metus.</h2>
          <div class="hero__cta-container">
            <a type="button" class="btn btn-primary btn-wide btn-shadow hero__cta" href="/get-quote" >Get a Quote</a>
            <p class="hero__phone">or call us <a class="hero__phone-link" href="tel:8339387352">833.938.7352</a></p>
          </div>
        
          <div class="hero__steps-container">
            <div class="hero__circle">
              <img class="hero__arrow" src="<?php echo get_template_directory_uri() ?>/images/handdrawnarrow.svg" alt="">
              <div class="hero__step">STEP</div>  
              <div class="hero__step-number">1</div>  
            </div>
            <p class="hero__step-text">See our step-by-step process for 
              <a href="/windows" class="hero__step-link">Windows</a>,
              <a href="/siding" class="hero__step-link">Siding</a>,
              <a href="/roofing" class="hero__step-link">Roofing</a>, &
              <a href="/doors" class="hero__step-link">Doors</a>,
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero__image-background"></div>
  </section>
</main>
<?php get_footer(); ?>
