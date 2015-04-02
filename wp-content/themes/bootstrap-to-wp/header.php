<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>

      <?php bloginfo('name')?>
      <?php wp_title( '|', true, 'before' );?>

    </title>


    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

<?php wp_head(); ?>

</head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

           <!-- <div style="display: inline-block;"><img src="http://localhost:8888/4CMktWP/wp-content/uploads/2015/03/logo-small.png"></div> -->
        </div>
        <div id="navbar" class="navbar-collapse navbar-right collapse">
          
          <?php 

            $args = array(
              'menu'          =>    'header-menu',
              'menu_class'    =>    'nav navbar-nav',
              'container'     =>    'false'
              );
            wp_nav_menu($args);
          ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>