<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>	

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header role="banner" id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1><?php echo get_bloginfo('title'); ?></h1>
        </div>
        <div class="col-md-4">
          <form class="navbar-form navbar-right" role="search" method="get" id="search">
            <div class="input-group">
              <input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
              <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
             </div>
          </form>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
        </div>

        <div class="collapse navbar-collapse navbar-responsive-collapse">
					<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
        </div>
    </nav>
  </header>

  <div class="container">
