<?php get_header(); ?>

<div id="content" class="clearfix row">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <div class="page-header">
    <h2 class="archive_title">
      <span><?php _e("Posts By:", "wpbootstrap"); ?></span>
<?php
// check if google+ is used; if so, link to the G+ profile
$curauth = ( get_query_var( 'author_name' ) ) ? get_user_by( 'slug', get_query_var( 'author_name' ) ) : get_userdata ( get_query_var ( 'author' ) );
$google_profile = get_the_author_meta( 'google_profile' , $curauth->ID );
if ($google_profile) {
  echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>';
} else {
  echo get_the_author_meta( 'display_name' , $curauth->ID);
}
      ?>
    </h2>
  </div>

  <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <header>
        <h3>
          <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
           <?php the_title(); ?>
          </a>
        </h3>
        <p class="meta"><?php _e("Posted", "wpbootstrap"); ?>
          <time datetime="<?php the_time('Y-m-j'); ?>" pubdate>
            <?php the_time(); ?>
          </time>
          <?php _e("by", "wpbootstrap");?>
          <?php the_author_posts_link(); ?>
          <span class="amp">&amp;</span>
          <?php _e("filed under", "wpbootstrap"); ?>
          <?php the_category(', '); ?>.
        </p>
      </header>

      <section class="post_content">
        <?php the_post_thumbnail( 'wpbs-featured' ); ?>
        <?php the_excerpt(); ?>
      </section>
    </article>
  <?php endwhile; ?>
    <?php if( function_exists( 'pag_navi' ) ): ?>
      <?php page_navi(); ?>
      <?php else: ?>
      <nav class="wp-prev-next">
        <ul class="clearfix">
          <li class="prev-link"><?php next_posts_link( _e('&laquo; Older entries', 'wpbootstrap' ) ); ?></li>
          <li class="next-link"><?php previous_posts_link( _e('Newer Entries &raquo;', 'wpbootstrap' ) ); ?></li>
        </ul>
      </nav>
    <?php endif; ?>
  <?php else: ?>
    <article class="post-not-found">
      <header>
        <h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
      </header>
      <section class="post_content">
        <p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
      </section>
    </article>
  <?php endif; ?>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
