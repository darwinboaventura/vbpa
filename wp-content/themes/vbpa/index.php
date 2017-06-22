<?php get_header();?>
		
		<section id="home-service" class="clearfix">
			<div class="wrapper clearfix">
				<header class="box-header clearfix">
					<h2>NOSSOS SERVIÇOS</h2>
				</header>
				
				<ul class="el-services clearfix">
					<?php query_posts('post_type=servico&posts_per_page=-1'); if (have_posts()) : while (have_posts()) : the_post();?>
					<li class="clearfix">
						<div class="el-thumbnail clearfix">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title();?>">
						</div>
						
						<div class="el-caption clearfix">
							<h3>
								<?php the_title();?>
							</h3>
							
							<?php the_content();?>
						</div>
					</li>
					<?php endwhile; endif; wp_reset_query();?>
				</ul>
			</div>
		</section>
		
		<section id="home-downloads" class="clearfix">
			<div class="wrapper clearfix">
				<header class="clearfix">
					<h2>
						<strong>DOWNLOADS >></strong> Formulários e Tabelas Práticas
					</h2>
					
					<p>Separamos abaixo diversos arquivos necessários para o dia a dia de sua empresa, aqui você encontrará  formulários da receita, darfs, termos, tabelas, códigos e muitos outros arquivos úteis. Basta escolher a categoria desejada e depois selecionar o arquivo para download.</p>
				</header>
				
				<div class="forms clearfix">
					<form class="clearfix form-test-1" method="post" action="javascript:func();">
						<fieldset class="clearfix">
							<label>Formulários</label>
							
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
											'taxonomy' => 'categoria_formulario'
										));
										
										if (!empty($categorias)) : foreach ($categorias as $cat) :
									?>
										<option value="<?php bloginfo('url');?>/cformularios/<?php echo $cat->slug;?>"><?php echo $cat->name;?></option>
									<?php endforeach; endif;?>
								</select>
							</div>
							
							<input type="submit" value="Pesquisar" data-form-categoria>
						</fieldset>
					</form>
					
					<form class="clearfix form-test-2" method="post" action="javascript:func();">
						<fieldset class="clearfix">
							<label>Tabelas práticas</label>
							
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
							
							<input type="submit" value="Pesquisar" data-form-categoria>
						</fieldset>
					</form>
				</div>
			</div>
		</section>
		
		<section id="big-image" class="clearfix">
			<div class="wrapper clearfix">
				<img src="<?php bloginfo('template_url');?>/dist/imgs/example-big-text.jpg">
			</div>
		</section>
		
		<section id="home-contact" class="clearfix">
			<div class="wrapper clearfix">
				<div class="el-map clearfix">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.4097378247598!2d-38.48981449897104!3d-13.009559364054246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71603547a587b35%3A0x41025b0c03ac234b!2sRio+Vermelho%2C+Salvador+-+BA%2C+41940-080!5e0!3m2!1spt-BR!2sbr!4v1461939112799" width="100%" height="209" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				
				<div class="el-texts clearfix">
					<p>
						<strong>ONDE ESTAMOS</strong><br />Rua Aymorés, 146, Ed. Morumbi, 1º andar, Rio Vermelho – Cep 41.940-080<br/>Salvador - Bahia
					</p>
					
					<p>
						<strong>TELEFONES DE CONTATO</strong><br />(71) 3240-8538 / 3345-2347 / 3022-8661
					</p>
					
					<p>
						<strong>E-MAILS PARA CONTATO</strong><br />valverde@vbpa.com.br e  amorim@vbpa.com.br
					</p>
				</div>
			</div>
		</section>
		
<?php get_footer();?>