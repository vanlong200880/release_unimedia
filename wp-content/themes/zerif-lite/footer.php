<?php global $language; ?>    
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 border-right-footer first">
                    <div class="menu-footer">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu'=> 'menu_footer',
                                'menu_class' => '',
                                'container_class' => '',
                            ) );
                        ?>
                    </div><!--end menu-footer-->
                    <div class="info-company">
                        <?php //the_widget(); ?>
                        <h4>công ty tnhh unimedia</h4>
                        <p><?php echo ($language == 'vi'? 'Tầng 11, Bảo Minh Tower': 'Floor 11, Bao Minh Tower'); ?></p>
                        <p><?php echo ($language == 'vi') ? '217 Nam Kỳ Khởi Nghĩa, P.7, Q.3': '217 Nam Ky Khoi Nghia Street, Ward 7, District 3' ?></p>
                        <p>Tel:(08) 3932 9777</p>
                        <p>Fax: (08) 3932 9333</p>
                        <p class="logo-footer">
                            <?php
                                echo '<a href="'.esc_url( home_url( '/' ) ).'">';
                                    echo '<img src="'.get_template_directory_uri().'/images/logo.png" alt="'.get_bloginfo('title').'" title="'.get_bloginfo('title').'">';
                                echo '</a>';
                            ?>
                        </p>
                        <p>Copyright © 2015 UNIMEDIA</p>
                        <p>All rigths reserved.</p>
                    </div><!--end info-company-->
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 border-right-footer">
                    <div class="wrap-about">
                        <h1><?php echo ($language == 'vi')? 'Giới thiệu': 'about us'; ?></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi tempora, laboriosam delectus architecto, atque id dolor natus eligendi a nostrum dolorum consequatur placeat, iusto nesciunt autem, at porro suscipit maiores.</p>
                        <p>
                            <a href="" class="btn btn-primary">Read more <span class="arrow">&rsaquo;&rsaquo;</span></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 border-right-footer last">
                    <div class="info-social">
                        <div class="icon-social">
                            <span><a href=""><i class="fa fa-facebook-square"></i></a></span>
                            <span><a href=""><i class="fa fa-twitter-square"></i></a></span>
                        </div>
                        <div class="wrap-ipisocial">
                            <!--<p>Nhung IPI</p>-->
                        </div>
                        <div class="wrap-chat">
                            <p>
                                <span><i class="fa fa-envelope"></i></span>
                                <a href="">nhansu@unimedia.vn</a>	
                            </p>
                            <p>
                                <span><i class="fa fa-mobile"></i></span>
                                <span class="phone-number">090 474 0278 (Ms. Lan)</span>	
                            </p>

                            <p>
                                <span><i class="fa fa-skype"></i></span> 
                                <a href="">Skype chat 2</a>		
                            </p>
                            <p>
                                <span><i class="fa fa-skype"></i></span> 
                                <a href="">Skype chat 2</a>	
                            </p>
                            <p>
                                <span><i class="fa fa-skype"></i></span> 
                                <a href="">Skype chat 2</a>		
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </footer>
</div>
<a id="support"><?php echo ($language == 'vi')? 'Tư vấn <br> online': 'Support <br> online'; ?></a>
<div class="support">
    
</div>

<?php wp_footer(); ?>
<?php if(is_front_page()): ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.appear.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
<?php endif; ?>
<script type="text/javascript">
        $(document).ready(function() {
            $("#support").on('click', function(){
                $("div.support").toggleClass("active");
            });
            
            if($('#four-seasons').hasClass('fix-top')){
                $('html, body').animate({scrollTop:$('.fix-top').position().top}, 'slow');  
            }else{
                if($('#wrapp-details').hasClass('fix-top')){
                    $('html, body').animate({scrollTop:$('.fix-top').position().top}, 'slow');  
                }
            }

          $("#owl-product-carousel").owlCarousel({
                items : 5,
                itemsDesktop: [1400, 5],
                itemsDesktopSmall: [1100, 5],
                itemsTablet: [767, 2],
                itemsMobile: [500, 1],
                autoPlay: 3000,
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                pagination : false,
                paginationNumbers: false,
                //singleItem : true,
                navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                rewindNav : true,
                stopOnHover : true
          });

          $("#owl-product-carousel-first").owlCarousel({
                items : 5,
                itemsDesktop: [1400, 5],
                itemsDesktopSmall: [1100, 5],
                itemsTablet: [767, 2],
                itemsMobile: [500, 1],
                autoPlay: 4000,
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                pagination : false,
                paginationNumbers: false,
                //singleItem : true,
                navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                rewindNav : true,
                stopOnHover : true
          });
          
          $(".advertisement").owlCarousel({
                items : 1,
                itemsDesktop: [1400, 1],
                itemsDesktopSmall: [1100, 1],
                itemsTablet: [767, 1],
                itemsMobile: [500, 1],
                autoPlay: 4000,
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                pagination : true,
                paginationNumbers: true,
                //singleItem : true,
                navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                rewindNav : true,
                stopOnHover : true
          });
        });
		jQuery(document).ready(function($) {
			$num = 0;
			$('footer .row .border-right-footer').each(function(index, el) {
				$height = $(this).innerHeight();
				if($height > $num){
				$num = $height;
			}
			});
			$('footer .row .border-right-footer').css('height', $num);
		});
        
        </script>
</body>

</html>