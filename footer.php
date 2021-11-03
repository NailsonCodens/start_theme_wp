	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/icons/logo_branca.png" class="logo" alt="" title="">
				</div>
				<div class="col col-md-3">
					<div class="row">
						<div class="col">
							<a href="https://www.facebook.com/fmgsolucoesauditivas" target="_blank" class="a-footer"><i class="fab fa-facebook iconstop-footer"></i></a>								
						</div>
						<div class="col">
							<a href="https://instagram.com/fmg_solucoesauditivas" target="_blank" class="a-footer"><i class="fab fa-instagram iconstop-footer"></i></a>
						</div>						
					</div>
				</div>				
			</div>
			<div class="row row-two-footer">
				<div class="col-12 col-md-4">
					<p class="text-footer-work">
						Teste
					</p>
				</div>
				<div class="col-12 col-md-3 col-nosso-site">
					<h2 class="titles-footer">NOSSO SITE</h2>
					<ul class="ul-menu">
						<li><a href="<?php echo site_url() ?>" class="link-footer">Home</a></li>
						<li><a href="<?php the_permalink(135) ?>" class="link-footer">Quem somos</a></li>
						<li><a href="<?php echo site_url() ?>/aparelhos-auditivos" class="link-footer">Aparelhos auditivos</a></li>
						<li><a href="<?php echo site_url() ?>/implantes-cocleares" class="link-footer">Implantes</a></li>						
						<li><a href="<?php echo site_url() ?>/blog" class="link-footer">Blog</a></li>
						<li><a href="<?php echo site_url() ?>/contact" class="link-footer">Contatos</a></li>
					</ul>
				</div>				
				<div class="col-12 col-md-4 hours-col">
					<h2 class="titles-footer">ATENDIMENTO</h2>
					<br/>
					<p class="hour-weekend">Segunda a Sexta-feira das 9:00 às 17:30</p>
					<br/>
					<p class="container-email">
					<div class="icon-mail">
						<i class="fas fa-envelope"></i>
						<a href="mailto:contato@fmgsolucoesauditivas.com.br" class="emailcontact">contato@fmgsolucoesauditivas.com.br</a>
					</div>
					</p>
				</div>									
			</div>			
			<div class="row bottom-footer">
				<div class="col-12 col-md">
					<p class="hour-weekend">FMG Soluções Auditivas <?php the_field('year')?> | <a href="https://fmgsolucoesauditivas.com.br/politica-de-privacidade/" target="_blank">politica de privacidade</a></p> 
				</div>
				<div class="col-12 col-md-3">
					<p class="hour-weekend">Desenvolvido por Tribo</p> 
				</div>				
			</div>							
		</div>
	</footer>
	<?php wp_footer() ?>
	<script>
		/* Start scripts effects for services section*/
		ScrollReveal().reveal('.services', { duration: 2000 });
		ScrollReveal().reveal('.icon_service', { interval: 200 });
		ScrollReveal().reveal('.textbox', { interval:200, delay: 100, distance: '300px' });
		ScrollReveal().reveal('.titlepages', { interval: 200, distance: '200px', origin: 'top'});
		ScrollReveal().reveal('.buttons-box', { interval:200, delay: 200, distance: '300px', origin: 'bottom'});
		/* End scripts for effects services section*/

		/* Start scripts effects for surdez section */
			ScrollReveal().reveal('.surdez', { interval:300, delay: 300, distance: '300px', origin: 'left', easing: 'ease-in'});
			ScrollReveal().reveal('.sub-title-pages-2', { interval:400, delay: 500, distance: '300px', origin: 'left'});
			ScrollReveal().reveal('.splide__arrow--next', { interval:400, delay: 500, distance: '300px', origin: 'left'});
			ScrollReveal().reveal('.click-to-continue', { interval:400, delay: 500, distance: '300px', origin: 'left'});				
			ScrollReveal().reveal('.sptrack', { duration: 3500 });	
		/* End scripts effects for surdez section */			
	
		/* Start scripts effects for test section */
		ScrollReveal().reveal('.text-test', { duration: 2000 });	
		/* End scripts test for surdez section */			

		/* Start scripts effects for ctas section */
		ScrollReveal().reveal('.call-left', { interval:300, delay: 300, distance: '300px', origin: 'left'});
		ScrollReveal().reveal('.call-right', { interval:300, delay: 300, distance: '300px', origin: 'right'});
		/* End scripts test for ctas section */			

		/* Start scripts effects for blog section */
		ScrollReveal().reveal('.col-blog-home', { duration:3000 });
		/* End scripts test for blog section */	

		/*QUEM SOMOS */			
			/* Start scripts section aboutus-img */
			ScrollReveal().reveal('.container-text-get-acf', { duration:3000 });
			ScrollReveal().reveal('.quem-somos-img', { duration:3000 });
			/* End scripts section aboutus-img */

			/* Start scripts section where */
			ScrollReveal().reveal('.title-where', { duration:3000 });
			ScrollReveal().reveal('.text-where', { duration:3000 });
			ScrollReveal().reveal('.where-img', { duration:3000 });
			/* End scripts section where */

			/* Start scripts section betterbrands */
			ScrollReveal().reveal('.quem-somos-img-min', { duration:3000 });
			/* End scripts section betterbrands */
			
			/* Start scripts section estruture */				
			ScrollReveal().reveal('.img-estructure', { duration:3000 });		
			/* End scripts section estructure */					
			
		 /* FIM QUEM SOMOS */

	</script>		
    </body>
</html>