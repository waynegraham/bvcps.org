<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<div id="content" class="clearfix for">
  <div id="main" class="col-sm-12 clearfix" role="main">
    <?php if( have_posts()) : while ( have_posts()) : the_post() ; ?>
      <?php get_template_part('header', 'header'); ?>
    <?php endwhile; ?>

    <?php else: ?>

    <?php endif; ?>
  </div>
</div>


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
            <p>Alumni<br><a href="alumni">Resources for alumni</a></p>
          </li>
          <li>
            <i class="fa fa-briefcase fa-3x"></i>
            <p>Faculty &amp; Staff<br><a href="faculty-and-staff">Resources for faculty and staff</a></p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

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
          <i class="fa fa-globe"></i> Be a Blue
        </div>
      </div>

      <div class="col-md-4">
        <div class="button">
          <i class="fa fa-cloud"></i> Blue's Foundation
        </div>
      </div>

      <div class="col-md-4">
        <div class="button">
          <a href="">
            <i class="fa fa-trophy"></i> Hall of Fame
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

<?php get_footer();
