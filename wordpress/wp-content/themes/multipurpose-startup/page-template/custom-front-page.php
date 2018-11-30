<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<?php do_action('multipurpose_startup_above_slider_section'); ?>

<?php if( get_theme_mod('multipurpose_startup_slider_arrows') != ''){ ?>
  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
      <?php $pages = array();
        for ( $count = 1; $count <= 3; $count++ ) {
          $mod = intval( get_theme_mod( 'multipurpose_startup_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $pages[] = $mod;
          }
        }
        if( !empty($pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2 class="animated fadeInDown"><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <div class="more-btn">              
                  <a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i><?php esc_html_e('READ MORE','multipurpose-startup'); ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>
<?php }?>

<?php do_action('multipurpose_startup_above_startup_section'); ?>

<section id="startup">
  <div class="container">
    <?php if( get_theme_mod('multipurpose_startup_startup_title') != ''){ ?>
      <hr class="startup-head">
      <h3 class="animated fadeInDown"><?php echo esc_html(get_theme_mod('multipurpose_startup_startup_title',__('Who We Are','multipurpose-startup'))); ?></h3>
    <?php }?>
    <div class="video-post">
      <?php
        $args = array( 'name' => get_theme_mod('multipurpose_startup_startup_post',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row">
              <div class="col-md-6 col-sm-6">                  
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><?php the_excerpt(); ?></p>
                  <div class="more-btn"> 
                    <a href="<?php the_permalink(); ?>"><i class="fas fa-info-circle"></i><?php esc_html_e('MORE ABOUT US','multipurpose-startup'); ?></a>
                  </div>
              </div> 
              <div class="col-md-6 col-sm-6">
                <?php
                  $content = apply_filters( 'the_content', get_the_content() );
                  $video = false;

                  // Only get video from the content if a playlist isn't present.
                  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                  }
                ?>
                <div class="box-image animated fadeInDown">
                   <?php
                      if ( ! is_single() ) {
                        // If not a single post, highlight the video file.
                        if ( ! empty( $video ) ) {
                          foreach ( $video as $video_html ) {
                            echo '<div class="entry-video">';
                              echo $video_html;
                            echo '</div>';
                          }
                        }
                        elseif(has_post_thumbnail()) { 
                          the_post_thumbnail(); 
                        } 
                      }; 
                    ?>
                </div>
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
  </div>
</section>

<?php do_action('multipurpose_startup_after_startup_section'); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>