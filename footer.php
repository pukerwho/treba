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
    <div class="callback__modal">
      <div class="menu-cover__close callback__close">
        <div class="menu-cover__close-block">
          <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="">
          <div class="menu-cover__close-circle"></div>  
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="callback__box">
              <div class="callback__title">
                Contact Form
              </div>
              <div class="callback__form">
                <?php echo do_shortcode('[contact-form-7 id="13" title="Contact"]') ?>
              </div>
              <div class="callback__icons">
                <div class="callback__icons-title">
                  Or write to us in the messenger  
                </div>
                <div class="callback__icons-grid">
                  <li>
                    <a href="https://t.me/Treba_Solutions">
                      <img src="<?php bloginfo('template_url') ?>/img/telegram.svg" alt="">
                      <div class="pc-show">
                        Telegram
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://wa.me/+380997713997">
                      <img src="<?php bloginfo('template_url') ?>/img/whatsapp.svg" alt="">
                      <div class="pc-show">
                        Whatsapp  
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/img/facebook.svg" alt="">
                      <div class="pc-show">
                        Messenger  
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="">
                      <div class="pc-show">
                        Viber  
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://join.skype.com/invite/ofPVcBHzB3RQ">
                      <img src="<?php bloginfo('template_url') ?>/img/skype.svg" alt="">
                      <div class="pc-show">
                        Skype
                      </div>
                    </a>
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal__bg"></div>
    <?php wp_footer(); ?>
</body>
</html>