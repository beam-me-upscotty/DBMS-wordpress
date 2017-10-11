<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package alexandria
 	Template Name: customPage
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>

  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="../../login/css/style.css">

  <style type="text/css">
    .myback{
      background:url("../wp-content/themes/nile/images/logo_section_bg.png") !important;
    }

  </style>

</head>

<body <?php body_class(); ?>>
<div id="wrapper-one">
<div id="wrapper-two">
<div id="wrapper-three">
<div id="page" class="hfeed site">
	<?php do_action( 'alexandria_before' ); ?>
    <div class="header-social">
        
       <div class="responsive-container">
            
            
       </div>
        
    </div> 
       
	<header id="masthead" class="site-header" role="banner">
    
    	<div class="responsive-container">
        
        <?php if( !of_get_option('logo_layout_style') || of_get_option('logo_layout_style') == 'sbys' ) : ?>
        
        	<div class="site-header-half-width-logo">
    
                <div class="site-branding">
                    <?php $alexandria_logo_set = get_custom_logo(); if( function_exists( 'the_custom_logo' ) && $alexandria_logo_set != '' ) : ?>
						<?php the_custom_logo(); ?>
                    <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                    
                </div>
                
            </div>
            
            <div class="site-header-half-width-nav">
    
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'alexandria' ); ?>"><?php _e( 'Skip to content', 'alexandria' ); ?></a></div>
        
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'alexandria_backupmenu'  ) ); ?>
                </nav><!-- #site-navigation -->
                
            </div>                
            
        <?php else : ?>
        
            <div class="site-branding">

                <?php $alexandria_logo_set = get_custom_logo(); if( function_exists( 'the_custom_logo' ) && $alexandria_logo_set != '' ) : ?>
						<?php the_custom_logo(); ?>
                <?php else : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php endif; ?>
                
            </div>
                
            

            <nav id="site-navigation" class="main-navigation nav-border-top" role="navigation">
                    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'alexandria' ); ?>"><?php _e( 'Skip to content', 'alexandria' ); ?></a></div>
        
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'alexandria_backupmenu'  ) ); ?>
            </nav><!-- #site-navigation --> 
                
        
        <?php endif; ?>
            
    	</div><!-- #Responsive-Container -->            
            
	</header><!-- #masthead -->
   
	<div id="main" class="site-main">        
		<div class="form">
		      
		      <ul class="tab-group">
		        <li class="tab active"><a href="#signup">Sign Up</a></li>
		        <li class="tab"><a href="#login">Log In</a></li>
		      </ul>
		      
		      <div class="tab-content">
		        <div id="signup">   
		          <h1>Sign Up for Free</h1>
		          
		          <form action="http://localhost:8000/LDA/SignUp/" method="post">

		          <input type="hidden" name="csrfmiddlewaretoken" value="Wal9C8SZ3FszF0xjVOpgLdeEi8Bikid9LFwdAjO9YBt52zioIhwVGdhSJgz5nfCO">
		            <div class="field-wrap">
		              <label>
		                Full Name<span class="req">*</span>
		              </label>
		              <input type="text" required autocomplete="off" />
		            </div>
		          
		          <div class="field-wrap">
		            <label>
		              Email Address<span class="req">*</span>
		            </label>
		            <input type="email"required autocomplete="off"/>
		          </div>
		          
		          <div class="field-wrap">
		            <label>
		              Set A Password<span class="req">*</span>
		            </label>
		            <input type="password"required autocomplete="off"/>
		          </div>
		          
		          <button type="submit" class="button button-block"/>Get Started</button>
		          
		          </form>

		        </div>
		        
		        <div id="login">   
		          <h1>Welcome Back!</h1>
		          
		          <form action="http://localhost:8000/LDA/Login" method="post">
		          <input type="hidden" name="csrfmiddlewaretoken" value="Wal9C8SZ3FszF0xjVOpgLdeEi8Bikid9LFwdAjO9YBt52zioIhwVGdhSJgz5nfCO">
		            <div class="field-wrap">
		            <label>
		              Email Address<span class="req">*</span>
		            </label>
		            <input type="email"required autocomplete="off"/>
		          </div>
		          
		          <div class="field-wrap">
		            <label>
		              Password<span class="req">*</span>
		            </label>
		            <input type="password"required autocomplete="off"/>
		          </div>
		          
		          <p class="forgot"><a href="#">Forgot Password?</a></p>
		          
		          <button class="button button-block"/>Log In</button>
		          
		          </form>

		        </div>
		        
		      </div><!-- tab-content -->
		      
		</div> <!-- /form -->
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

		    <script  src="../../login/js/index.js"></script>
		</div></div></div></div>
		</div>


<?php get_footer(); ?>