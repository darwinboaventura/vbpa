<?php $this->load->view('site/includes/header.php');?>

	<section id="pages-sistema" class="clearfix">
		<div class="wrapper clearfix">
			<header class="clearfix">
				<h2>SOCIETÁRIO</h2>
			</header>
			
			<div class="page-societario clearfix">
				<?php 
					if($categorias) : foreach ($categorias as $categoria) : 
						
					$arquivos = $this->Arquivo_Model->get(NULL, NULL, $this->session->userdata('logged_site_ID'), $categoria['ID']);
				
					if (!empty($arquivos)) :
				?>
				<div class="box-type clearfix">
					<h3><?php echo $categoria['name'];?></h3>
					
					<ul class="clearfix">
						<?php foreach ($arquivos as $arquivo) : ?>
						<li class="clearfix">
							<a href="<?php echo base_url();?>uploads/<?php echo $arquivo['file'];?>" download><?php echo $arquivo['name'];?></a>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
			<?php endif; endforeach; endif;?>
			</div>
		</div>
	</section>
	
<?php $this->load->view('site/includes/footer.php');?>