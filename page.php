<?php get_header(); ?>

<div id="content" class="clearfix row">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php if ( have_posts()): while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <header>
          <div class="page-header">
            <h1 class="page-title" itemprop="headline">
              <?php the_title(); ?>
            </h1>
          </div>
        </header>
        <section class="post_content clearfix" itemprop="articleBody">
          <?php the_content(); ?>
        </section>
        <footer>
          <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
        </footer>
      </article>
    <?php endwhile; ?>
      <?php comments_template('',true); ?>
    <?php else : ?>
      <article id="post-not-found">
        <header>
          <h1><?php _e( "Not Found", "wpbootstrap" ); ?></h1>
        </header>
        <section class="post_content">
          <p><?php _e("Sorry, but the requested resource was not found.", "wpbootstrap"); ?></p>
        </section>
      </article>
    <?php endif; ?>
  </div><!-- .main -->
  <?php get_sidebar(); // sidebar ?>
</div><!-- content -->

<?php get_footer(); ?>
