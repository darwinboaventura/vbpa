		<footer id="main-footer" class="clearfix">
			<div class="row-head clearfix">
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
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="row-middle clearfix wrapper">
				<p class="el-message">VBPA - Auditores & Consultores<br />assessoria contábil e consultoria</p>
				
				<p class="el-copyright">Copyright © 2016 - Todos os direitos reservados à<br />VBPA -Auditores & Consultores<br />Assessoria Contábil e Consultoria</p>
				
				<div class="clearfix"></div>
				
				<a href="http://www.grupoa2.com.br" target="_blank" class="el-brand">
					<img src="<?php bloginfo('template_url');?>/dist/imgs/marca-grupoa-a2.png" alt="DESENVOLVIDO PELO GRUPO A2">
				</a>
			</div>
		</footer>
		
		<nav id="mobile-menu" class="clearfix"><a href="#" class="el-close">Fechar</a>
			<ul class="clearfix">
				<li>
					<a href="<?php bloginfo('url');?>/quemsomos">Quem somos</a>
				</li>
				
				<li>
					<a href="<?php bloginfo('url');?>#home-service">Serviços</a>
				</li>
				
				<li>
					<a href="<?php bloginfo('url');?>#home-downloads">Downloads</a>
				</li>
				
				<li>
					<a href="<?php bloginfo('url');?>/links">Links</a>
				</li>
				
				<li>
					<a href="<?php bloginfo('url');?>#home-contact">Contato</a>
				</li>
			</ul>
		</nav>
		
		<!-- jquery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		
		<!-- scrips-->
		<script src="<?php bloginfo('template_url');?>/dist/js/app.js"></script>
	</body>
</html>