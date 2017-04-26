<?php
/**
 * Template Name: Page-Contact
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="c-masthead">
  <figure class="c-masthead__media">
    <img src="<?php echo get_template_directory_uri() . '/images/placeholder-square.jpg' ?>" alt="">
    <!--
    <figcaption class="c-masthead__caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit <span class="c-masthead__credit">Julian Dawson for Carlisle Photo</span></figcaption>
    -->
  </figure>
</div>

<main class="s-blog-page">
  <section class="c-band c-band--tall">
    <div class="o-wrapper">
      <?php the_content(__('(more...)')); ?>
    </div>
  </section>
</main>

<?php endwhile; else: ?>

  <p>Sorry, no pages matched your criteria.</p>

<?php endif; ?>

<?php get_footer(); ?>
