<?php
/*
Template Name: LearnWorlds Wrapper
*/
if (!defined('ABSPATH')) {
    exit;
}
$school_url = get_option('pcp_lw_school_url', '');
get_header();
?>
<style>
  .pcp-lw-wrap { min-height: 100vh; background: #f5efe2; }
  .pcp-lw-iframe { width: 100%; min-height: 100vh; border: 0; display: block; }
  .pcp-lw-empty { max-width: 860px; margin: 80px auto; padding: 0 24px; font-family: Manrope, sans-serif; }
</style>
<div class="pcp-lw-wrap">
<?php if (!empty($school_url)) : ?>
  <iframe class="pcp-lw-iframe" src="<?php echo esc_url($school_url); ?>" title="LearnWorlds School" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="fullscreen"></iframe>
<?php else : ?>
  <div class="pcp-lw-empty">
    <h1>LearnWorlds URL not configured</h1>
    <p>Go to Settings > PCP LearnWorlds and set your school URL.</p>
  </div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
