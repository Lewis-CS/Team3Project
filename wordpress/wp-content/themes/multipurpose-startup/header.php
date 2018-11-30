<?php
/**
 * The Header for our theme.
 * @package Multipurpose Startup
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'multipurpose-startup' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="top-bar">
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="time">
            <?php if ( get_theme_mod('multipurpose_startup_time','') != "" ) {?>
              <i class="far fa-clock"></i><span><?php echo esc_html( get_theme_mod('multipurpose_startup_time',__('Monday to Friday 10:00am to 6:00pm','multipurpose-startup')) ); ?></span>
            <?php }?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="social-media">
            <?php if( get_theme_mod( 'multipurpose_startup_facebook' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_facebook','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_twitter' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_twitter','' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_google') != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_google','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_pintrest' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_pintrest','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_insta' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_insta','' ) ); ?>"><i class="fab fa-instagram"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_linkdin' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_linkdin','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'multipurpose_startup_youtube' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'multipurpose_startup_youtube','' ) ); ?>"><i class="fab fa-youtube"></i></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="logo col-md-4 col-sm-4">
          <?php if( has_custom_logo() ){ multipurpose_startup_the_custom_logo();
           }else{ ?>
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?> 
            <p class="site-description"><?php echo esc_html($description); ?></p>
          <?php endif; }?>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="contact-details">
                <div class="row">
                  <?php if ( get_theme_mod('multipurpose_startup_address_text','') != "" ) {?>
                    <div class="col-md-2 p-0 conatct-font">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="col-md-8">
                      <?php if ( get_theme_mod('multipurpose_startup_address_text','') != "" ) {?>
                        <p class="bold-font"><?php echo esc_html( get_theme_mod('multipurpose_startup_address_text',__('Address:','multipurpose-startup')) ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('multipurpose_startup_address','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('multipurpose_startup_address',__('258 dummy street, USA','multipurpose-startup')) ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-details">
                <div class="row">
                  <?php if ( get_theme_mod('multipurpose_startup_email_text','') != "" ) {?>
                    <div class="col-md-2 p-0 conatct-font">
                      <i class="fas fa-at"></i>
                    </div>
                    <div class="col-md-8">
                      <?php if ( get_theme_mod('multipurpose_startup_email_text','') != "" ) {?>
                        <p class="bold-font"><?php echo esc_html( get_theme_mod('multipurpose_startup_email_text',__('Email us:','multipurpose-startup')) ); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('multipurpose_startup_email','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('multipurpose_startup_email',__('startup@example.com','multipurpose-startup')) ); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>          
            <div class="col-md-4">
              <div class="contact-details">
                <div class="row">
                  <?php if ( get_theme_mod('multipurpose_startup_call_text','') != "" ) {?>
                    <div class="col-md-2 p-0 conatct-font">
                      <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-md-8">
                      <?php if ( get_theme_mod('multipurpose_startup_call_text','') != "" ) {?>
                        <p class="bold-font"><?php echo esc_html( get_theme_mod('multipurpose_startup_call_text',__('Phone:','multipurpose-startup') )); ?></p>
                      <?php }?>
                      <?php if ( get_theme_mod('multipurpose_startup_call_number','') != "" ) {?>
                        <p><?php echo esc_html( get_theme_mod('multipurpose_startup_call_number',__('+00-123-456-789','multipurpose-startup') )); ?></p>
                      <?php }?>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
  <div id="header">
    <div class="container">
      <div class="menu-sec">
        <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','multipurpose-startup'); ?></a></div>
        <div class="row">
          <div class="menubox col-md-9 col-sm-9">
            <div class="nav">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
          <div class="search-box col-md-1 col-sm-1">
            <span><i class="fas fa-search"></i></span>
          </div>          
          <div class="col-md-2 col-sm-2"> 
            <?php if ( get_theme_mod('multipurpose_startup_button_text','') != "" ) {?>
              <div class="button-link">             
                <a href="<?php echo esc_html( get_theme_mod('multipurpose_startup_button_link',__('#','multipurpose-startup')) ); ?>"><i class="fas fa-comment"></i><?php echo esc_html( get_theme_mod('multipurpose_startup_button_text',__('Lets Talk','multipurpose-startup')) ); ?></a> 
              </div>   
            <?php }?> 
          </div>          
        </div>
        <div class="serach_outer">
          <div class="closepop"><i class="far fa-window-close"></i></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>