<?php get_header(); ?>

 <div class="<?php echo 'pageID-' . get_queried_object_id(); ?> main-content">
     
    <div id="breadcrumb">
        <?php qt_custom_breadcrumbs(); ?> 
    </div>
     
        <div class="page-banner">
            
            <div class="page-banner-title">
                <h1>404: The page cannot be found.</h1>
                <p>Unfortunately on this occasion we cannot find what you are looking for.</p>
            </div>
            
        </div>
    
        <div id="content-inner-container">

            <div class="blog-post summary">
    
                <div class="blog-post-content">
    
                    <p>You may wish to return to the <strong><a href="index.php">homepage</a></strong>, or choose one of the page links above.</p>
    
                </div>

            </div>
        
    </div>
   
<?php get_footer(); ?>