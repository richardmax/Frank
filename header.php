<?php
/**
 * @package Frank
 */
?>
<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if (gte IE 9) | !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<title>
		<?php
		wp_title( '&mdash;', true, 'right' );
		bloginfo( 'name' );
		?>
	</title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body id="page" <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<div class="chromeframe">Your browser is out of date. Please <a href="http://browsehappy.com/">upgrade your browser </a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</div>
	<![endif]-->
    
    
    

<div class="container nexus">











  <ul id="gn-menu" class="gn-menu-main">
    <li class="gn-trigger"> <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
      <nav class="gn-menu-wrapper">
      
      
      
      
      
       <li id="form-uiA" class="top-nav-ui">
     

        <div class="btn-group item-sizes-toggle" data-toggle="buttons-radio" data-toggle-name="itemSize">
                  <button class="btn thumbnail-button active" value="default"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Default</button>
                  
                   <button class="btn thumbnail-button" value="thumbnail"><i class="icon-ellipsis-horizontal icon-2x"></i><br>Thumb</button>
                  <button class="btn small-button" value="small"><i class="icon-th icon-2x"></i><br>Small</button>
                  <button class="btn medium-button" value="medium"><i class="icon-th-large icon-2x"></i><br>Medium</button>
                  <button class="btn large-button" value="large"><i class="icon-sign-blank icon-2x"></i><br>Large</button>  
                </div>
 
     

          <label class='switch switch-twitter'>
            <input type="checkbox" checked="" value=".twitter">
            <span></span>
          </label>
         
          <label class='switch switch-wordpress'>
            <input type="checkbox" checked="" value=".wordpress">
            <span></span>
          </label>
          <label class="switch switch-instagram">
            <input type="checkbox" checked="" value=".instagram">
            <span></span>
          </label>
          <!-- span class="help-block"></span> 
          <p id="output"></p -->
        
     
  </li>
  
  
  
        <?php include '_mashboard/sidemenu.php'; ?>
  
  
  
  
      </nav>
    </li>
    <li class='rm-logo'><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></li>
    
    
    
    
    
    
    
    
    <!-- h2 id="site-description"><?php //bloginfo( 'description' ); ?></h2 -->
    
    
    
  
        
        
   
        
        
        
        
        
        
    
    <div class="pull-right author-main"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="author-button" data-toggle="dropdown">
      <h2><!--i class="glyphicon glyphicon-cog"></i -->Return to
        <?php bloginfo( 'name' ); ?>
      </h2>
      </a> </div>
      
      
      
      
        <?php wp_nav_menu( array( 'theme_location' => 'frank_primary_navigation', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
        
        
        
    <li id="form-ui" class="top-nav-ui">
      <div class="btn-group item-sizes-toggle" data-toggle="buttons-radio" data-toggle-name="itemSize">
        <button class="btn thumbnail-button active" value="default"><i class="icon-ellipsis-horizontal icon-2x"></i><br>
        Default</button>
        <button class="btn thumbnail-button" value="thumbnail"><i class="icon-ellipsis-horizontal icon-2x"></i><br>
        Thumb</button>
        <button class="btn small-button" value="small"><i class="icon-th icon-2x"></i><br>
        Small</button>
        <button class="btn medium-button" value="medium"><i class="icon-th-large icon-2x"></i><br>
        Medium</button>
        <button class="btn large-button" value="large"><i class="icon-sign-blank icon-2x"></i><br>
        Large</button>
      </div>
      <label class='switch switch-twitter'>
        <input type="checkbox" checked="" value=".twitter">
        <span></span> </label>
      <label class='switch switch-wordpress'>
        <input type="checkbox" checked="" value=".wordpress">
        <span></span> </label>
      <label class="switch switch-instagram">
        <input type="checkbox" checked="" value=".instagram">
        <span></span> </label>
      <!-- span class="help-block"></span> 
<p id="output"></p --> 
      
    </li>
    
  
  </ul>














    
    