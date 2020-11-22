<?php
/**
 * Template part for displaying posts
 */

?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article class="page-box">
  <?php $blog_layout = get_theme_mod( 'tafri_travel_blog_post_layout','Default');
  if($blog_layout == 'Default'){ ?>
    <div class="row">
      <div class="box-image">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>>
        <div class="content">
          <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php esc_html(the_title());?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
          <?php if(get_theme_mod('tafri_travel_blog_description') == 'Post Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if(get_theme_mod('tafri_travel_blog_description', 'Post Excerpt') == 'Post Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>      
              <div class="entry-caption"><p><?php $excerpt = get_the_excerpt(); echo esc_html( tafri_travel_string_limit_words( $excerpt, esc_attr(get_theme_mod('tafri_travel_excerpt_number','30')))); ?><?php echo esc_html( get_theme_mod('tafri_travel_post_excerpt_suffix','{...}') ); ?></p></div>
            <?php } ?>
          <?php }?>
          <?php if( get_theme_mod( 'tafri_travel_date_hide',true) != '') { ?>
            <span class="entry-date"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_date_icon','fas fa-calendar-alt')); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date()); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php } ?> 
          <?php if( get_theme_mod('tafri_travel_button_text','READ MORE') != ''){ ?>
            <div class="read-more-btn">
              <a href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html(get_theme_mod('tafri_travel_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tafri_travel_button_text','READ MORE'));?></span></a>
            </div>
          <?php } ?> 
        </div>
      </div>
    </div>
    <?php if( get_theme_mod( 'tafri_travel_comment_hide',true) != '' || get_theme_mod( 'tafri_travel_author_hide',true) != '') { ?>
      <div class="metabox">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-6">
            <?php if( get_theme_mod( 'tafri_travel_comment_hide',true) != '') { ?>
              <span class="entry-comments"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_comment_icon','fas fa-comments')); ?>"></i> <?php comments_number( __('0 Comment', 'tafri-travel'), __('0 Comments', 'tafri-travel'), __('% Comments', 'tafri-travel') ); ?></span>
            <?php } ?>
          </div>
          <div class="col-lg-6 col-md-6 col-6">
            <?php if( get_theme_mod( 'tafri_travel_author_hide',true) != '') { ?>
              <span class="entry-author"><i class="<?php echo esc_attr(get_theme_mod('tafri_travel_author_icon','fas fa-user')); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php esc_html(the_author()); ?><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a></span>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
  <?php }else if($blog_layout == 'Center' || $blog_layout == 'Left'){ ?>
      <?php 
        if(has_post_thumbnail()) { ?>
        <div class="box-image">
          <?php the_post_thumbnail();  ?>
        </div>
      <?php } ?>
      <div class="content">
        <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php esc_html(the_title());?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
        <div class="entry-caption"><p><?php $excerpt = get_the_excerpt(); echo esc_html( tafri_travel_string_limit_words( $excerpt, esc_attr(get_theme_mod('tafri_travel_excerpt_number','30')))); ?></p></div>
        <?php if( get_theme_mod( 'tafri_travel_date_hide',true) != '') { ?>
          <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date()); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
        <?php } ?> 
        <?php if( get_theme_mod('tafri_travel_button_text','READ MORE') != ''){ ?>
          <div class="read-more-btn">
            <a href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html(get_theme_mod('tafri_travel_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('tafri_travel_button_text','READ MORE'));?></span></a>
          </div>
        <?php } ?> 
      </div>
      <?php if( get_theme_mod( 'tafri_travel_comment_hide',true) != '' || get_theme_mod( 'tafri_travel_author_hide',true) != '') { ?>
        <div class="metabox">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <?php if( get_theme_mod( 'tafri_travel_comment_hide',true) != '') { ?>
                <span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'tafri-travel'), __('0 Comments', 'tafri-travel'), __('% Comments', 'tafri-travel') ); ?></span>
              <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <?php if( get_theme_mod( 'tafri_travel_author_hide',true) != '') { ?>
                <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php esc_html(the_author()); ?><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a></span>
              <?php } ?>
            </div>
          </div>
        </div>
      <?php } ?>
  <?php } ?>
</article>
