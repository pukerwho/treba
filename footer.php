    </section>
    <footer id="footer" class="footer pb-5">
    	<div class="container">
    		<div class="row mb-5">
    			<div class="col-md-5">
    				<div class="footer__quote">
    					<img src="<?php bloginfo('template_url') ?>/img/quote-footer.svg" alt="">	
    				</div>
    			</div>
    		</div>
    		<div class="row mb-5">
    			<div class="col-md-12">
    				<div class="footer__title treba-animate text-center">
    					Let's create something great together
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mb-5">
    			<div class="col-md-6">
    				<div class="footer__form treba-animate">
    					<?php echo do_shortcode('[contact-form-7 id="9" title="Email"]') ?>
    				</div>
    			</div>
    		</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer__email treba-animate text-center">
                        hello@treba-solutions.com
                    </div>
                </div>
            </div>
    	</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>