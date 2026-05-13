<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<main style="max-width: 900px; margin: 80px auto; padding: 0 24px; font-family: Manrope, sans-serif;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</main>
<?php
get_footer();
