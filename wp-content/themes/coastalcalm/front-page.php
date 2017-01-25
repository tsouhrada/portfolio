<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage coastal_calm
 * @since coastal calm 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">
    				<a href="http://www.linkedin.com/in/tmsouhrada" class="soc-icon ln"></a>
				</div>
				<div class="about-btn">
				<a href="<?php echo site_url('/about/'); ?>" class="btn">About Me</a>
			</div>
			<div class="project-btn">
				<a href="<?php echo site_url('/projects/'); ?>" class="btn">What I Do</a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
