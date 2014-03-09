<?php get_header(); ?>

<div id="content" class="row clearfix">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
        <header>
          <div class="page-header">
            <h2>
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <p class="meta">
              <?php _e("Posted", "wpbootstrap"); ?>
              <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
                <?php the_time(); ?>
              </time>
              <?php _e("by", "wpbootstrap"); ?>
              <?php the_author_posts_link(); ?>
              <span class="amp">&amp;</span>
              <?php _e("filed under", "wpbootstrap"); ?>
              <?php the_category(', '); ?>.
            </p>
          </div>
        </header>

        <section class="post_content clearfix">
           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'wpbs-featured' ); ?>
          </a>

          <?php the_content( __( "Read more &raquo;", "wpbootstrap" ) ); ?>
        </section>

        <footer>
          <p class="tags">
            <?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?>
          </p>
				</footer>

      </article>
    <?php endwhile; ?>
    <?php else: ?>

    <?php endif; ?>
  </div><!-- #main -->
  <?php //get_sidebar(); // sidebar 1 ?>
</div>

<?php get_footer(); ?>
