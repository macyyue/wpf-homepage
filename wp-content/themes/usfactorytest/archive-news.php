
<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package usfactory
 */
get_header();
?>

<article id="mainWrap">
  <article id="contentsWrap" class="subWrap">
    <article id="contents">
      <article class="mainContents newslistWrap">
        <h2>新着情報</h2>
        <h3><span>NEWS</span></h3>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="newsListBox">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p>新着情報はありません。</p>
        <?php endif; ?>
        <?php
        global $wp_query;
        $paged = get_query_var('paged') ?: 1;
        if (function_exists('mainpagination')) {
          echo mainpagination($wp_query->max_num_pages, $paged);
        }
        ?>
      </article>
      <?php get_sidebar(); ?>
    </article>
  </article>
</article>

<?php get_footer(); ?>
