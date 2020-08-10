<?php
/*
Template Name: CONTACT ~お問い合わせ~
*/
?>

<?php get_header(); ?>

<?php get_template_part('content','menu'); ?>

		<div id="main">
		<section id="blog_list" class="site-width">
				<h1 class="title"><?php echo get_the_title(); ?></h1>
				<div id="content" class="article">
					
					<?php get_template_part('loop'); ?>
					<?php if (function_exists("pagination")) pagination($additional_loop->max_num_pages); ?>
				</div>
				
			<!-- blog_list -->
			<?php get_sidebar();?>
					
			</section>


		</div>
		<?php get_footer(); ?>
