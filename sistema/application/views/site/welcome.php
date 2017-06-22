<?php $this->load->view('site/includes/header.php');?>
		
		<section id="pages-sistema" class="clearfix">
			<div class="wrapper clearfix">
				<header class="clearfix">
					<h2>SEJA BEM VINDO</h2>
				</header>
				
				<div class="page-home clearfix">
					<p>Através desta ferramenta sua empresa terá acesso a todos os documentos e demais necessidades contábeis solicitadas. Para acesso, basta consultar as sessões disponíveis no menu em vermelho acima.</p>
					
					<p>
						<strong>IMPORTANTE:</strong> A responsabilidade pelo acompanhamento do VENCIMENTO dos DOCUMENTOS / ARQUIVOS aqui disponibilizados é do cliente.
					</p>
					
					<h3>ARQUIVOS RECENTEMENTE DISPONIBILIZADOS</h3>
					
					<table>
						<?php if (!empty($arquivos)) : foreach ($arquivos as $arquivo) : ?>
							<tr>
								<td style="text-transform: uppercase;">									
									<?php
                                          if ($arquivo['section'] == 'societario') {
                                                echo "Societário";
                                          } elseif ($arquivo['section'] == 'contabilidade') {
                                                echo "Contabilidade";
                                          } elseif ($arquivo['section'] == 'fiscal') {
                                                echo "Fiscal";
                                          } elseif ($arquivo['section'] == 'pessoal') {
                                                echo "Pessoal";
                                          } elseif ($arquivo['section'] == 'financeiro') {
                                                echo "Financeiro - VBPA";
                                          } elseif ($arquivo['section'] == 'boleto') {
                                                echo "2ª via de boleto";
                                          }
                                    ?>
								</td>
								<td><?php $categoria = $this->Categoria_Model->get($arquivo['category']); echo $categoria[0]['name'];?></td>
								<td>
									<a href="<?php echo base_url();?>uploads/<?php echo $arquivo['file'];?>" download><?php echo $arquivo['name'];?></a>
								</td>
							</tr>
						<?php endforeach; endif;?>
					</table>
				</div>
			</div>
		</section>		
		
<?php $this->load->view('site/includes/footer.php');?>