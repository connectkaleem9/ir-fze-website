<?php get_header(); ?>

<section class="page-hero" aria-label="Page hero">
  <div class="page-hero-grid" aria-hidden="true"></div>
  <div class="container page-hero-inner">
    <h1 class="h1" style="color:var(--white);"><?php the_title(); ?></h1>
  </div>
</section>

<section class="section-py" aria-labelledby="content-heading">
  <div class="container">
    <h2 id="content-heading" class="h2 text-blue"><?php the_title(); ?></h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="reveal"><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
