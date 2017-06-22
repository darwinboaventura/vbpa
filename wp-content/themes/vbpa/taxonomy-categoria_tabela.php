<?php get_header();?>

	<section id="page-downloads" class="clearfix">
		<div class="box-download clearfix">
			<div class="wrapper clearfix">
				<header class="clearfix">
					<h2>
						DOWNLOADS >> <strong>TABELAS PRÁTICAS</strong>
					</h2>
				</header>
				
				<main class="clearfix">
					<p>
						Confira abaixo os arquivos disponíveis referentes a busca por: <strong><?php single_cat_title();?></strong>
					</p>
					
					<ul class="clearfix">
						<?php query_posts('post_type=tabela&posts_per_page=9999&' . $query_string); if (have_posts()) : while (have_posts()) : the_post();?>
						<li class="clearfix">
							<a href="<?php the_field('arquivo_download');?>" class="clearfix" download>
								<img src="<?php bloginfo('template_url');?>/dist/imgs/icone-download-vermelho.png" alt="Download" class="el-img">
								
								<span class="el-text"><?php the_title();?></span>
							</a>
						</li>
						<?php endwhile; endif; wp_reset_query();?>
					</ul>
				</main>
			</div>
		</div>
		
		<form class="box-search clearfix form-test-3" method="post" action="javascript:func();">
			<label>Nova busca: </label>
			
			<div class="el-select clearfix">
				<input type="text" placeholder="ESCOLHA A CATEGORIA" required>
				
				<select data-form-select>
					<option value="">Selecione</option>
					<?php 
						$categorias = get_terms(array(
							'show_option_all' => '',
							'show_option_none' => '',
							'orderby' => 'name',
							'order' => 'ASC',
							'hide_empty' => false,
							'use_desc_for_title' => false,
							'taxonomy' => 'categoria_tabela'
						));
						
						if (!empty($categorias)) : foreach ($categorias as $cat) :
					?>
						<option value="<?php bloginfo('url');?>/ctabela/<?php echo $cat->slug;?>"><?php echo $cat->name;?></option>
					<?php endforeach; endif;?>
				</select>
			</div>
			
			<input type="submit" value="Pesquisar">
		</form>
	</section>
	
<?php get_footer();?>