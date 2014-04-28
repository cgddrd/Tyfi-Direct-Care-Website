<?php $options = get_option( 'tyfi_theme_options' ); ?> 

            </div>
    
    <div id="footer">
        <div id="footer-inner-container">
            <?php if ($options['tyfi-copyright'] != '') { ?>
                <p id="copyright">&copy; <?php echo $options['tyfi-copyright'] ?></p>
            <?php } else { ?> 
                <p id="copyright">&copy; Ty.Fidirect Care 2014. All rights reserved.</p>
            <?php }?> 
            
            <p id="site-design-credits">Site by <a href="http://connorlukegoddard.com"><img src="<?php echo get_template_directory_uri(); ?>/img/cg_logo.png" alt="site by connor luke goddard"/></a></p>
        </div>
        
    </div>
         
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.liquid-slider-custom.min.js"></script>  
        <script>
            $('#main-slider').liquidSlider({
                slideEaseFunction: "easeInOutExpo",
                autoSlideInterval: 8000
            });
        </script>
        <script>

            $(function() {
                $( "h2, h3, h4, h5, h6, h7" ).each(function( index ) {
                    $(this).html('<span>' + $(this).html() + '</span>');
                });
            });
            
            $( "#font-size-increase" ).on( "click touchstart", function() {
            
                $('body').css('font-size', '17px');
                $("ul.service-list").addClass('big-font');

            });
            
            $( "#font-size-decrease" ).on( "click touchstart", function() {

                $('body').css('font-size', '14px');
                $("ul.service-list").removeClass('big-font');
                  
            });


        </script>

        <?php wp_footer(); ?>

    </body>
</html>
    