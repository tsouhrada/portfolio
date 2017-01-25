<?php
/**
 * The template for displaying projects
 *
 * @package WordPress
 * @subpackage coastal_calm
 * @since Coastal Calm 1.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post();
			$client = get_field('client');
			$services = get_field('services');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');
			$size = "full"
?>

      <h2 class="entry-title"><?php the_title(); ?></h2>
			<article class="post-entry">
				<?php echo $client; ?>
				<?php echo $services; ?>
				<?php the_content(); ?>
					<p><strong><a href="<?php echo $link; ?>">Site Link</a></stong></p>
						<div class="case-studies-images">
								<?php if($image_1) { ?>
									<?php echo wp_get_attachment_image( $image_1, $size ); ?>
									<?php } ?>
								<?php if($image_2) { ?>
									<?php echo wp_get_attachment_image( $image_2,  $size ); ?>
									<?php } ?>
								<?php if($image_3) { ?>
									<?php echo wp_get_attachment_image( $image_3, $size ); ?>
									<?php } ?>
							</div>
			</article>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>
