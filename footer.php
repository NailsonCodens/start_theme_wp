	<footer class="site-footer">
		<div class="container">
			<div class="row row-two-footer">
				<div class="col-12 col-md-4">
					<p class="text-footer-work">
						Teste
					</p>
				</div>
				<div class="col-12 col-md-3 col-nosso-site">
					<h2 class="titles-footer">NOSSO SITE</h2>
					<ul class="ul-menu">
						<li><a href="<?php echo site_url() ?>">Home</a></li>
						<li><a href="<?php the_permalink(135) ?>">Quem somos</a></li>
					</ul>
				</div>				
				<div class="col-12 col-md-4 hours-col">
					col 
				</div>									
			</div>			
			<div class="row bottom-footer">
			</div>							
		</div>
	</footer>
	<?php wp_footer() ?>
	<script>
		/* Start scripts effects for services section*/
		ScrollReveal().reveal('.services', { duration: 2000 });

	</script>		
    </body>
</html>