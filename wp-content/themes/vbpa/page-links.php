<?php get_header();?>

	<section id="page-links" class="clearfix">
		<div class="wrapper clearfix">
			<header class="clearfix">
				<h2>Links Úteis</h2>
			</header>
			
			<main>
				<p>Separamos abaixo alguns links úteis para o dia a dia de sua empresa.</p>
				
				<?php 
					$categorias = get_terms(array(
						'show_option_all' => '',
						'show_option_none' => '',
						'orderby' => 'name',
						'order' => 'ASC',
						'hide_empty' => false,
						'use_desc_for_title' => false,
						'taxonomy' => 'categoria_link'
					));
					
					if (!empty($categorias)) : foreach ($categorias as $cat) :
				?>
				<div class="el-item clearfix">
					<h3><?php echo $cat->name;?></h3>
					
					<table>
						<tbody>
							<?php query_posts('post_type=link&posts_per_page=9999&clink=' . $cat->slug); if (have_posts()) : while (have_posts()) : the_post();?>
							<tr>								
								<td>
									<a href="http://<?php the_field('link_url');?>" target="_blank">
										<?php the_title();?>
									</a>
								</td>
								<td>
									<a href="http://<?php the_field('link_url');?>" target="_blank">
										<?php the_field('link_url');?>
									</a>
								</td>
							</tr>
							<?php endwhile; endif; wp_reset_query();?>
						</tbody>
					</table>
				</div>
				<?php endforeach; endif;?>
			</main>
		</div>
	</section>
	
<?php get_footer();?>