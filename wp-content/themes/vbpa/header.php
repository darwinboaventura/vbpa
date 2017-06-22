<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php wp_title(' - ', true, 'right');?><?php bloginfo('title');?></title>
		
		<!-- google analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-77249562-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<!-- styles-->
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/dist/css/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/dist/css/responsive.css" media="(max-width: 900px)">
	</head>
	
	<body>
		<header id="main-header" class="clearfix">
			<div class="row-head clearfix">
				<div class="wrapper clearfix">
					<a href="<?php bloginfo('url');?>" class="el-home">
						<img src="<?php bloginfo('template_url');?>/dist/imgs/icone-home-vermelho.png" alt="Home">
						
						<span>Home</span>
					</a>
					
					<p class="el-phones">
						<span>(71) 3240-8538 / 3345-2347 / 3022-8661 </span>
						
						<img src="<?php bloginfo('template_url');?>/dist/imgs/icone-phone-vermelho.png" alt="Telefone">
					</p>
				</div>
			</div>
			
			<div class="row-middle clearfix">
				<div class="wrapper clearfix">
					<a href="<?php bloginfo('url');?>" class="el-brand">
						<img src="<?php bloginfo('template_url');?>/dist/imgs/marca-vbpa.png" alt="VBPA">
					</a>
					
					<nav class="el-navigation clearfix">
						<ul class="clearfix">
							<?php if (is_home()) : ?>
								<li>
									<a href="<?php bloginfo('url');?>/quemsomos">Quem somos</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="#home-service">Serviços</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="#home-downloads">Downloads</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="<?php bloginfo('url');?>/links">Links</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="#home-contact">Contato</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
							<?php else : ?>
								<li>
									<a href="<?php bloginfo('url');?>/quemsomos">Quem somos</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="<?php bloginfo('url');?>#home-service">Serviços</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="<?php bloginfo('url');?>#home-downloads">Downloads</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="<?php bloginfo('url');?>/links">Links</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
								
								<li>
									<a href="<?php bloginfo('url');?>#home-contact">Contato</a>
									
									<span class="el-hover">
										<img src="<?php bloginfo('template_url');?>/dist/imgs/icon-hover-item-menu.png">
									</span>
								</li>
							<?php endif;?>
						</ul>
					</nav>
					
					<a href="#" class="el-button-mobile-menu">Menu</a>
				</div>
			</div>
		</header>
		
		<section id="main-slider" class="clearfix">
			<?php query_posts('post_type=slider&orderby=rand&posts_per_page=9999'); if (have_posts()) : while (have_posts()) : the_post();?>
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="<?php the_title();?>">
			<?php endwhile; endif; wp_reset_query();?>
		</section>
		
		<section id="box-restict" class="clearfix">
			<div class="wrapper clearfix">
				<form class="clearfix" method="post" action="http://clientesgrupoa2.com.br/vbpa/sistema/login/signin">
					<h2 class="clearfix">
						<img src="<?php bloginfo('template_url');?>/dist/imgs/icone-cadeadro-branco.png">
						
						<span>ACESSO RESTRITO A CLIENTES</span>
					</h2>
					
					<fieldset class="clearfix">
						<input type="text" placeholder="DIGITE SEU LOGIN" name="cnpj" required>
					</fieldset>
					
					<fieldset class="clearfix">
						<input type="password" placeholder="DIGITE A SENHA" name="password" required>
					</fieldset>
					
					<input type="submit" value="Acessar">
				</form>
				
				<div class="clearfix"></div>
				
				<a href="<?php bloginfo('url');?>/sistema/login/esqueceu" class="el-password">Solicitar NOVA SENHA.</a>
			</div>
		</section>