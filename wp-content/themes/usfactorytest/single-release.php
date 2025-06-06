<?php
/**
 * The template for displaying all single posts.
 *
 * @package usfactory
 */

get_header(); ?>

<article id="mainWrap">

<article id="contentsWrap" class="subWrap">
<article id="contents">
<article class="mainContents releaselistWrap">
<h2>リリース</h2>
<h3><span>RELEASES</span></h3>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="releaselistBox">
<h4><?php the_title(); ?></h4>
<p><?php the_content(); ?></p>
</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</article>

<?php get_sidebar(); ?>

</article>
</article>

<!-- /#mainWrap --></article>
<?php get_footer(); ?>
