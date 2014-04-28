<?php get_header(); ?>
<?php $options = get_option( 'tyfi_theme_options' ); ?> 

 <div class="<?php echo 'pageID-' . get_queried_object_id(); ?> main-content">
     
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
     
    <div id="breadcrumb">
     <?php qt_custom_breadcrumbs(); ?>
    </div>
     
    <div class="liquid-slider"  id="main-slider">
        <div class="slide1">
         
        </div>
        <div class="slide2">
          
        </div>          
    </div>
     
    <div id="content-inner-container">

            <div class="blog-post summary">
    
                <div class="blog-post-content">
                    
                    <?php if (isset($options['tyfi-homepage-tagline'])) {
    
                        echo "<p class=\"home-motto\">{$options['tyfi-homepage-tagline']}</p>";
                    
                    } ?> 
                    
                    <div id="home-menu">
                
                        <?php if ( $options['nav1-target-page-id'] > 0 && $options['nav1-title'] != '' && $options['nav1-description'] != '' ) {

                            echo '<div class="home-menu-item">
                                        <div class="menu-heading">
                                            <h2>' . $options["nav1-title"] . '</h2>
                                        </div>

                                        <a href="' . get_permalink($options['nav1-target-page-id']) . '"><div class="menu-image about"></div></a>

                                        <div class="menu-blurb">
                                            <p>' . $options["nav1-description"] . '</p>
                                        </div>
                                    </div>';

                        } ?> 

                        <?php if ( $options['nav2-target-page-id'] > 0 && $options['nav2-title'] != '' && $options['nav2-description'] != '' ) {

                            echo '<div class="home-menu-item">
                                        <div class="menu-heading">
                                            <h2>' . $options["nav2-title"] . '</h2>
                                        </div>

                                        <a href="' . get_permalink($options['nav2-target-page-id']) . '"><div class="menu-image services"></div></a>

                                        <div class="menu-blurb">
                                            <p>' . $options["nav2-description"] . '</p>
                                        </div>
                                    </div>';

                        } ?> 

                        <?php if ( $options['nav3-target-page-id'] > 0 && $options['nav3-title'] != '' && $options['nav3-description'] != '' ) {

                            echo '<div class="home-menu-item last">
                                        <div class="menu-heading">
                                            <h2>' . $options["nav3-title"] . '</h2>
                                        </div>

                                        <a href="' . get_permalink($options['nav3-target-page-id']) . '"><div class="menu-image contact"></div></a>

                                        <div class="menu-blurb">
                                            <p>' . $options["nav3-description"] . '</p>
                                        </div>
                                    </div>';

                        } ?> 

                    </div>
    
                </div>
    
            </div>
        
    </div>
   

<?php get_footer(); ?>
