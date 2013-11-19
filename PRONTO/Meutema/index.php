<?php get_header(); ?>
<div class="clear"></div>
			<div id="content"><!-- Conteudo -->
				<div class="clear"></div>
				<div id="conteudo">
					<ul>
						<li>
							<h1>O Evento</h1>
							<p id="sobre">
							A Faculdade de Tecnologia da  Unicamp promove a 4ª edição de Tecnologia em Foco, que consiste em Palestras, mini-cursos, seminários, workshops, exposições e atividades culturais e de cidadania oferecidas por especialistas em diferentes temas de interesse da comunidade.
							</p>
							<p style="color:#359755" id="sobre">
							O evento tem por objetivo a difusão de conhecimento técnico; o aperfeiçoamento profissional; oferecer novas perspectivas de negócios; divulgar novas oportunidades para o mercado de trabalho.
							</p>
							<div id="btncomissao" style="display:inline">
								<a href="#comissao" onclick="$('#conteudo').fadeOut('slow',function(){$('#comissao').fadeIn('slow');});" style="color:#145821;">Comissão Organizadora</a>
							</div>
						</li>
						<li>
									<?php
										global $post;
										$myposts = get_posts('numberposts=1&order=desc');
										foreach($myposts as $post) :
										setup_postdata($post);
									?>
									<h1><?php the_title();?></h1>	
									<div id="noticias">
										<?php	the_excerpt_rereloaded('50','','all'); //instalar o plugin?>
									</div>					 
									<?php endforeach; ?>
							<div id="botoes">
								<a href="<?php the_permalink(); ?>" class="leiaMais">Continue Lendo</a>
								<a href="page.php" class="moreNoticias">Mais noticias</a>
							</div>
						</li>
						<li>
						<h1>Fotos</h1>
						<div class="cycle-slideshow" data-cycle-prev=".prevControl" data-cycle-next=".nextControl">
								<?php 
  									$mysql = mysql_query("SELECT * FROM wp_ngg_pictures") or die(mysql_error());
  									while($res = mysql_fetch_array($mysql)){
  										$filename = $res['filename'];
  										echo '<img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/gallery/ola/thumbs/thumbs_'.$filename.'" />';
  									}
  								?>
						</div>
							
							<a href="#" class="prevControl"><img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/setaesquerda.png" /></a>
							<a href="#" class="nextControl"><img src="http://www.ft.unicamp.br/IVtecnologiaemfoco/wp-content/themes/Meutema/imagens/setaDireita.png" /></a>
							<a href="galeria.php" class="AcessarGaleria">Acessar a Galeria</a>
						</li>

					</ul>
					<ul>	
						<li>
						<div id="outrasAtividades">
						<h1>Ações da Saúde e Feira de Livros</h1>
								<p style="text-align:justify">
									Durante os dias 15, 16 e 17, nos períodos da tarde e noite haverá uma feira de livros das Editoras da UFSCar e da UNICAMP, com preços promocionais. Também nestes dias o setor SSACL (Setor de Saúde da UNICAMP - Campus I Limeira-
									<a href="http://www.pfl.unicamp.br/node/54">http://www.pfl.unicamp.br/node/54</a>) estará orientando sobre a abrangência
									do atendimento, como funciona e como o interessado (alunos, docentes e
									funcionários da Planta Física de Limeira) deve fazer para utilizar os
									serviços.
								</p>
							</div><!--outras atividades-->
						</li>
						<li>
						<div id="noticias">
						<h1>Inscrições</h1>	
							<p>Algumas atividades da IV TF requerem inscrição. As inscrições para<strong> minicursos, oficinas e workshops</strong> podem ser feitas no link "Inscrições" deste site. Já as inscrições para o "Forum Avanços e desafios da Política Nacional de Resíduos" em: <a href="http://foruns.bc.unicamp.br/foruns/">http://foruns.bc.unicamp.br/foruns/</a> . As palestras são abertas a todos.</p>
						
						</div>
						</li>

						<li>
							<div id="outrasAtividades">
								<h1>VII Feira de Recrutamento</h1>
											<p style="text-align:justify">
												Para participação na VII Feira de Recrutamento da FT, cadastre seu currículo ou sua empresa com vagas de estágios no Portal da REDINTELIGENTE: <a href="http://www.sistematrabalheconosco.com.br/tc/unicamp-faculdade-de-tecnologia">http://www.sistematrabalheconosco.com.br/tc/unicamp-faculdade-de-tecnologia</a>
											</p>
							</div><!--outras atividades-->
						</li>


					</ul>
				</div><!--conteudo-->
				<div class="clear"></div>
				<div id="comissao" style="display:none">
					<?php include("comissao.php"); ?>
				</div>
				<div class="clear"></div>
				<div id="patrocinio">
					<h1>Apoio</h1>
					<ul>
						<li><a href="http://www.foz.com.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/FOZ_new.png" /></a></li>
						<li><a href="http://www.limeira.sp.gov.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/LogoLimeira.png" /></a></li>
						<li><a href="http://www.pessatte.com.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/pessate.png" /></a></li>
						<li><a href="http://www.ciee.org.br/portal/index.asp"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/CIEE.png" /></a></li>
						<li><a href="http://www.editora.unicamp.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/Editora2L.png" /></a></li>
						<li><a href="http://www.editora.ufscar.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/EdUFSCar.png" /></a></li>
						<li><a href="http://www.ibm.com/br/pt/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/ibm.png" /></a></li>
						<li><a href="http://enxuto.com.br/"><img src="<?php bloginfo('template_url');?>/imagens/patrocinadores/enxuto.png" /></a></li>
					</ul>
				</div><!--patrocinio-->
	<div class="clear"></div>
<!--se precisar é pra utilizar o get_sidebar(); -->
<?php get_footer(); ?>

