<?php get_header() ?>
<main role="main">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
  ?>
  <article>
    <div class="main-content">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?>
      </p>
    </div>
  </article>
  <?php endwhile;

    else :
      echo '<p>No content found</p>';

    endif;
  ?>
</main>
<?php get_footer() ?>
