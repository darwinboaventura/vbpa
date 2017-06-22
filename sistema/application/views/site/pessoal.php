<?php $this->load->view('site/includes/header.php');?>

	<section id="pages-sistema" class="clearfix">
		<div class="wrapper clearfix">
			<header class="clearfix">
				<h2>PESSOAL</h2>
			</header>

			<div class="page-societario clearfix">
				<form class="box-fitler clearfix" method="post" action="<?php echo base_url('pessoal/filter');?>">
					<p class="item-text">ESCOLHA SEU FILTRO DE CONSULTA:</p>

					<?php if (!isset($page)) : ?>
						<fieldset class="item-year clearfix">
							<input type="text" placeholder="ESCOLHA O ANO" name="year">

							<select>
								<option value="">Selecione</option>
								<?php if (!empty($anos)) : foreach ($anos as $ano) : ?>
									<option value="<?php echo $ano['YEAR(date)'];?>"><?php echo $ano['YEAR(date)'];?></option>
								<?php endforeach; endif; ?>
							</select>
						</fieldset>

						<fieldset class="item-month clearfix">
							<input type="text" placeholder="ESCOLHA O MÊS" name="month">

							<select>
								<option value="">Selecione</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</fieldset>
					<?php else : ?>
						<fieldset class="item-year clearfix">
							<input type="text" placeholder="ESCOLHA O ANO" name="year" value="<?php echo $year;?>">

							<select>
								<option value="">Selecione</option>
								<?php if (!empty($anos)) : foreach ($anos as $ano) : ?>
									<option value="<?php echo $ano['YEAR(date)'];?>" <?php if ($ano['YEAR(date)'] == $year) : echo "selected"; endif;?>><?php echo $ano['YEAR(date)'];?></option>
								<?php endforeach; endif; ?>
							</select>
						</fieldset>

						<fieldset class="item-month clearfix">
							<input type="text" placeholder="ESCOLHA O MÊS" name="month" value="<?php echo $month;?>">

							<select>
								<option value="">Selecione</option>
								<option value="01" <?php if ($month == '01') : echo "selected"; endif;?>>01</option>
								<option value="02" <?php if ($month == '02') : echo "selected"; endif;?>>02</option>
								<option value="03" <?php if ($month == '03') : echo "selected"; endif;?>>03</option>
								<option value="04" <?php if ($month == '04') : echo "selected"; endif;?>>04</option>
								<option value="05" <?php if ($month == '05') : echo "selected"; endif;?>>05</option>
								<option value="06" <?php if ($month == '06') : echo "selected"; endif;?>>06</option>
								<option value="07" <?php if ($month == '07') : echo "selected"; endif;?>>07</option>
								<option value="08" <?php if ($month == '08') : echo "selected"; endif;?>>08</option>
								<option value="09" <?php if ($month == '09') : echo "selected"; endif;?>>09</option>
								<option value="10" <?php if ($month == '10') : echo "selected"; endif;?>>10</option>
								<option value="11" <?php if ($month == '11') : echo "selected"; endif;?>>11</option>
								<option value="12" <?php if ($month == '12') : echo "selected"; endif;?>>12</option>
							</select>
						</fieldset>
					<?php endif;?>

					<input type="submit" value="Buscar">
				</form>

				<?php if (isset($page)) { ?>
					<?php
						if($categorias) { foreach ($categorias as $categoria) {

						$arquivos = $this->Arquivo_Model->get(NULL, NULL, $this->session->userdata('logged_site_ID'), $categoria['ID'], NULL, $year, $month);

						if (!empty($arquivos)) {
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
				<?php } else {?>
					<!-- <p class="none-file-found-message">Nenhum arquivo encontrado para esse data.</p> -->
				<?php } } }?>
				<?php }?>
			</div>
		</div>
	</section>

<?php $this->load->view('site/includes/footer.php');?>
