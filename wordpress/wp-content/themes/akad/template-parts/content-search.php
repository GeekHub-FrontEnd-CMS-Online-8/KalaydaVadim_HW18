<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akad
 */

get_header();
?>
<?php
add_filter("the_content", "plugin_myContentFilterHome");

function plugin_myContentFilterHome($content)
{
  return mb_substr($content, 0, 700);
}
?>

<div class="blog">
  <div class="blog__container">
    <div class="blog__left">
    <?php if ( 'post' === get_post_type() ) : ?>
      <div class="blog__post">
        <?php if(has_post_thumbnail()) {
          echo get_the_post_thumbnail(get_the_ID());
        }else {
          echo '<img src="'.AK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
        }; ?>
        <div class="blog__post__status">
          <p class="blog__post__status-date"><?php the_time('F j, Y'); ?></p>
          <p class="blog__post__status-comment"><i class="fa fa-commenting" aria-hidden="true"></i><?php echo get_comments_number($post_id);?></p>
          <p class="blog__post__status-like"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a> 0</p>
        </div>
        <h2 class="blog__post-headline"><?php the_title(); ?></h2>
        <div class="blog__post-text"><?php the_content(); ?></div>
        <a href="<?php the_permalink(); ?>" class="blog__post-more">continue reading <i class="fa fa-arrow-right" aria-hidden="true"> </i></a>
      </div>
    <?php endif; ?>
    </div>
    <div class="blog__right">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

