<?php get_header(); ?>
<div id='single' class="d-flex align-items-center justify-content-center">
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post d-flex flex-column align-items-center">
      <?php the_post_thumbnail(); ?>

      <h1 class="p-2 font-weight-bold text-uppercase"><?php the_title(); ?></h1>

      <div class="post__meta text-light p-2">

        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>

        </p>
      </div>

      <div class="post__content text-light text-center container d-flex flex-column align-items-center p-2">
        <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
