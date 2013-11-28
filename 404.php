<!-- kd -->
<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'spring-theme'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'spring-theme'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'spring-theme'); ?></li>
  <li><?php _e('an out-of-date link', 'spring-theme'); ?></li>
</ul>

<?php get_search_form(); ?>
