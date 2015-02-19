<?php
$args = array(
  'numberposts' => 5,
  'order_by' => 'post_date',
  'order' => 'DESC'
);
  $recent_posts = wp_get_recent_posts( $args, OBJECT );
?>

<section>
  <div class="row">
    <div class="col-sm-3 col-md-3">
      <div class="panel-group" id="accordion">

         <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <span class="fa fa-flash"></span> News
              </a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse in">
            <div class="list-group">
            <?php foreach($recent_posts as $post): ?>
              <?php setup_postdata($post);?>
              <div class="list-group-item">
                <h4 class="list-group-item-heading">
                  <a href="<?php the_permalink()?>"><?php the_title(); ?></a>
                </h4>
              </div>
            <?php endforeach; ?>
            <div class="list-group-item">
              <p class="list-group-item-text">
                <a href="<?php echo get_year_link(''); ?>">Additional Stories &raquo;</a>
              </p>
            </div>
            <?php wp_reset_postdata(); ?>
            </div><!-- .list-group-->
          </div><!-- #collapseFive -->
        </div><!-- panel -->

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <i class="fa fa-calendar"></i> Calendar
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse">
            <?php echo do_shortcode( '[google-calendar-events id="1" type="list" max="5"]' ); ?>
          </div>
        </div>

      </div><!--.panelgroup -->
    </div><!-- .col3 -->

    <div class="col-sm-9 col-md-9">
      <?php the_content(); ?>
    </div>
  </div><!-- .row -->
</section> <!-- carousel -->
