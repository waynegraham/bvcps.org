<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<?php
$today = getdate();
$args = array(
  'post_type' => 'closings',
  'date_query' => array(
    'year' => $today["year"],
    'month' => $today["month"],
    'day' => $today['mday']
  )
);
$closings = new WP_Query($args);
?>
<?php if( $closings->have_posts() ): ?>
  <?php $closings->the_post(); ?>

<div class="container closing-alert">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo get_the_title(); ?>
        <?php wp_reset_postdata(); ?>
        </div>
    </div>
  </div>
</div>

<?php endif; ?>




<div id="content" class="clearfix for">
  <div id="main" class="col-sm-12 clearfix" role="main">
    <?php if( have_posts()) : while ( have_posts()) : the_post() ; ?>
      <?php get_template_part('header', 'carousel'); ?>
    <?php endwhile; ?>

    <?php else: ?>

    <?php endif; ?>
  </div>
</div>
</div> <!-- main container -->



<div class="container paddit">
  <div class="row">
    <div class="col-md-12">
      <div class="resources">
        <ul>
          <li>
            <i class="fa fa-home fa-3x"></i>
            <p>Parents<br><a href="parents">Resources for parents</a></p>
          </li>
          <li>
            <i class="fa fa-compass fa-3x"></i>
            <p>Prospective Families<br><a href="prospective-families">Resources for prospective families</a></p>
          </li>
          <li>
            <i class="fa fa-folder-open-o fa-3x"></i>
            <p>Students<br><a href="students">Resources for students</a></p>
          </li>
          <li>
            <i class="fa fa-globe fa-3x"></i>
            <p>Alumni<br><a href="https://beablue.herokuapp.com">Resources for alumni</a></p>
          </li>
          <li>
            <i class="fa fa-briefcase fa-3x"></i>
            <p>Faculty &amp; Staff<br><a href="faculty-and-staff">Resources for faculty and staff</a></p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div><!-- resources -->

<!-- <div class="container">
  <div class="row">
    <div id="colors" class="col-md-12">
      <div class="base-color-light-30"></div>
      <div class="base-color-light-20"></div>
      <div class="base-color-light-10"></div>
      <div class="base-color"></div>
      <div class="base-color-dark-10"></div>
      <div class="base-color-dark-20"></div>
      <div class="base-color-dark-30"></div>
    </div>
  </div>
</div>-->

<div id="engage">
  <div class="container">
    <div class="row inner">
      <div class="col-md-12">
          <h2>Engage with us.</h2>
      </div>
    </div>
    <div class="row inner">
      <div class="col-md-4">
        <div class="button">
          <a href="https://beablue.herokuapp.com">
            <i class="fa fa-globe"></i> Be a Blue
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="button">
          <!-- TODO: fix this for production -->
          <a href="/bvcps/our-community/blues-education-foundation/">
            <i class="fa fa-cloud"></i> Blue's Foundation
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="button">
          <a href="https://sites.google.com/a/bvcps.net/pmhs-sports-hall-of-fame/">
            <i class="fa fa-trophy"></i> Hall of Fame
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer();
