<section>
  <div class="row">
    <div class="col-sm-3 col-md-3">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <i class="fa fa-calendar"></i> Calendar
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <?php echo do_shortcode( '[google-calendar-events id="1" type="list" max="5"]' ); ?>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-flash">
                </span> News</a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
<?php
// TODO: refactor as a function
$args = array( 'numberposts' => 5 );

$recent_posts = wp_get_recent_posts( $args, OBJECT );

?>

<?php foreach($recent_posts as $post): ?>
<?php setup_postdata($post);?>
  <div class="list-group">
    <a class="list-group-item" href="<?php the_permalink()?>">
        <h4 class="list-group-item-heading"><?php  the_title(); ?></h4>
      <p class="list-group-item-text">
        <?php the_excerpt(); ?>
    </a>
  </div>
<?php endforeach; ?>

<?php wp_reset_postdata(); ?>

    <div class="col-md-9">
      <?php the_content(); ?>
    </div>

  </div>


 </section> <!-- carousel -->
