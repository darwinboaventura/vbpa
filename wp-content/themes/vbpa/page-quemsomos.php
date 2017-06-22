<?php get_header();?>

	<section id="page-about" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<div class="box-about clearfix">
			<div class="wrapper clearfix">
				<header class="clearfix">
					<h2>QUEM SOMOS</h2>
				</header>
				
				<article class="clearfix">
					<?php the_content();?>
				</article>
			</div>
		</div>
		
		<div class="box-reasons wrapper clearfix">
			<div class="el-item clearfix">
				<h3>MISSÃO</h3>
				
				<p><?php the_field('about_missao');?></p>
			</div>
			
			<div class="el-item clearfix">
				<h3>PRINCÍPIOS</h3>
				
				<p><?php the_field('about_principios');?></p>
			</div>
			
			<div class="el-item clearfix">
				<h3>OBJETIVOS</h3>
				
				<p><?php the_field('about_objetivos');?></p>
			</div>
			
			<div class="el-item clearfix">
				<h3>FILOSOFIA</h3>
				
				<p><?php the_field('about_filosofia');?></p>
			</div>
		</div>
		<?php endwhile; endif; wp_reset_query();?>
	</section>
	
<?php get_footer();?>