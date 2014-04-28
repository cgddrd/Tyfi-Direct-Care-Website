<?php get_header(); ?>

 <div class="<?php echo 'pageID-' . get_queried_object_id(); ?> main-content">
     
    <div id="breadcrumb">
        <?php qt_custom_breadcrumbs(); ?> 
    </div>
     
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     
        <div class="page-banner">
            
            <div class="page-banner-title">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_post_meta(get_the_ID(), 'Tagline', true); ?></p>
            </div>
            
        </div>
    
        <div id="content-inner-container">

            <div class="blog-post summary">
    
                <div class="blog-post-content">
    
                    <?php the_content(); ?>
    
                </div>
                
                
                <?php 

                    if (is_page('Our Services')) {
                        
                        echo "<h2>Services we offer</h2><p>Through our highly-skilled, professional and caring staff, we can provide a vast range of be-spoke support services to suit your individual requirements and needs.</p><p>Examples of support we can provide include:</p><ul class=\"service-list\">";

                        $arr = get_post_meta(get_the_ID(), 'services', false);

                        foreach ($arr as &$value) {
                            echo "<li><i class=\"fa fa-check-circle\"></i> " . $value . "</li>";
                        }

                        echo "</ul>";
                        
                    }
                    

                ?>
        
            </div>
        
    
        <?php endwhile; ?>
            
        <?php endif; ?>
        
    </div>
   
<?php get_footer(); ?>