<?php 

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'tyfidirect_theme_options', 'tyfi_theme_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'TyfiDirect Theme Options', 'tyfitheme' ), __( 'TyfiDirect Theme Options', 'tyfitheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
} 

function theme_options_do_page() { 

    global $select_options; 

    if (!isset( $_REQUEST['settings-updated'])) $_REQUEST['settings-updated'] = false; ?>

    <style>

        th {
            padding-right: 10px;
            text-align: left;
        }
        
    </style>

    <div>
        <?php 
            echo "<h1>". __( 'TyFidirect Theme Options', 'tyfitheme' ) . "</h1>"; 
        ?>
        
        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div>
                <p><strong><?php _e( 'Options saved', 'tyfitheme' ); ?></strong></p>
            </div>
        <?php endif; ?> 
        

        <form method="post" action="options.php">

            <?php settings_fields( 'tyfidirect_theme_options' ); ?>  
            <?php $options = get_option( 'tyfi_theme_options' ); ?>
            
            <table>
                
                <tr valign="top">
                    <th scope="row">
                        <h2>Homepage Settings</h2>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Homepage "Tagline":', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[tyfi-homepage-tagline]" type="text" name="tyfi_theme_options[tyfi-homepage-tagline]" value="<?php esc_attr_e( $options['tyfi-homepage-tagline'] ); ?>" />
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <h3>Navigation Tile 1</h3>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Target Page:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <select id="test1" name="nav1-target-page-id" onchange="set(this.value, 'nav1-target-page-id-hidden')"> 
                            <option value="">
                                <?php echo esc_attr( __( 'Select page...' ) ); ?></option> 
                                <?php 
                                    $pages = get_pages(); 
                                    foreach ( $pages as $page ) {
                                        $option = '<option value="' . $page->ID . '">';
                                        $option .= $page->post_title;
                                        $option .= '</option>';
                                        echo $option;
                                    }
                                ?>
                        </select>
                        
                        <input id="nav1-target-page-id-hidden" type="hidden" name="tyfi_theme_options[nav1-target-page-id]" value="<?php esc_attr_e( $options['nav1-target-page-id'] ); ?>">
                        
                    </td>
                </tr> 
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Title:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[nav1-title]" type="text" name="tyfi_theme_options[nav1-title]" value="<?php esc_attr_e( $options['nav1-title'] ); ?>" />
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Description:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <textarea rows="5" cols="50" id="tyfi_theme_options[nav1-description]" type="text" name="tyfi_theme_options[nav1-description]" value="<?php esc_attr_e( $options['nav1-description'] ); ?>"><?php esc_attr_e( $options['nav1-description'] ); ?></textarea>
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <h3>Navigation Tile 2</h3>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Target Page:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <select id="test1" name="nav2-target-page-id" onchange="set(this.value, 'nav2-target-page-id-hidden')"> 
                            <option value="">
                                <?php echo esc_attr( __( 'Select page...' ) ); ?></option> 
                                <?php 
                                    $pages = get_pages(); 
                                    foreach ( $pages as $page ) {
                                        $option = '<option value="' . $page->ID . '">';
                                        $option .= $page->post_title;
                                        $option .= '</option>';
                                        echo $option;
                                    }
                                ?>
                        </select>
                        
                        <input id="nav2-target-page-id-hidden" type="hidden" name="tyfi_theme_options[nav2-target-page-id]" value="<?php esc_attr_e( $options['nav2-target-page-id'] ); ?>">
                        
                    </td>
                </tr> 
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Title:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[nav2-title]" type="text" name="tyfi_theme_options[nav2-title]" value="<?php esc_attr_e( $options['nav2-title'] ); ?>" />
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Description:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <textarea  rows="5" cols="50" id="tyfi_theme_options[nav2-description]" type="text" name="tyfi_theme_options[nav2-description]" value="<?php esc_attr_e( $options['nav2-description'] ); ?>"><?php esc_attr_e( $options['nav2-description'] ); ?></textarea>
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <h3>Navigation Tile 3</h3>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Target Page:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <select id="test1" name="nav3-target-page-id" onchange="set(this.value, 'nav3-target-page-id-hidden')"> 
                            <option value="">
                                <?php echo esc_attr( __( 'Select page...' ) ); ?></option> 
                                <?php 
                                    $pages = get_pages(); 
                                    foreach ( $pages as $page ) {
                                        $option = '<option value="' . $page->ID . '">';
                                        $option .= $page->post_title;
                                        $option .= '</option>';
                                        echo $option;
                                    }
                                ?>
                        </select>
                        
                        <input id="nav3-target-page-id-hidden" type="hidden" name="tyfi_theme_options[nav3-target-page-id]" value="<?php esc_attr_e( $options['nav3-target-page-id'] ); ?>">
                        
                    </td>
                </tr> 
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Title:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[nav3-title]" type="text" name="tyfi_theme_options[nav3-title]" value="<?php esc_attr_e( $options['nav3-title'] ); ?>" />
                    </td>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Description:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <textarea  rows="5" cols="50" id="tyfi_theme_options[nav3-description]" type="text" name="tyfi_theme_options[nav3-description]" value="<?php esc_attr_e( $options['nav3-description'] ); ?>"><?php esc_attr_e( $options['nav3-description'] ); ?></textarea>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">
                        <h2>Contact Details</h2>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Contact Telephone Number:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[tyfi-contact-number]" type="text" name="tyfi_theme_options[tyfi-contact-number]" value="<?php esc_attr_e( $options['tyfi-contact-number'] ); ?>" />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Telephone Opening Times:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[tyfi-contact-number-opening]" type="text" name="tyfi_theme_options[tyfi-contact-number-opening]" value="<?php esc_attr_e( $options['tyfi-contact-number-opening'] ); ?>" />
                    </td>
                </tr> 

                <tr valign="top"><th scope="row"><?php _e( 'Contact Email Address:', 'tyfitheme' ); ?></th>
                    <td>
                  <input id="tyfi_theme_options[tyfi-contact-email]" type="text" name="tyfi_theme_options[tyfi-contact-email]" value="<?php esc_attr_e( $options['tyfi-contact-email'] ); ?>" />
                    </td>
                </tr>

                 <tr valign="top">
                    <th scope="row">
                        <h2>Footer Settings</h2>
                    </th>
                </tr>
                
                <tr valign="top">
                    <th scope="row">
                        <?php _e( 'Footer Copyright Notice:', 'tyfitheme' ); ?>
                    </th>
                    <td>
                        <input id="tyfi_theme_options[tyfi-copyright]" type="text" name="tyfi_theme_options[tyfi-copyright]" value="<?php esc_attr_e( $options['tyfi-copyright'] ); ?>" />
                    </td>
                </tr>
                
            </table> 

            <p>
                <input type="submit" value="<?php _e( 'Save Theme Settings', 'tyfitheme' ); ?>" />
            </p>
        </form>
    </div>

    <script>
        function set(pageID, hiddenInputID) {
            document.getElementById(hiddenInputID).value = pageID;
        }
    </script>

<?php } 

function set_up_JS()
{
	// Register the H5BP JS scripts required for the site.
	//wp_register_script( 'H5BP-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ) );
	//wp_register_script( 'H5BP-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );

	//Register the be-spoke scroll JS. 

	/**
	 * Register a required JS file for use in the site. 
	 * 
	 * Wordpress will automatically add the <script> tag to the page <head>.
	 *
	 * Params:
	 * 1. WP variable name for this particular script (NOT the actual name of the JS file)
	 * 2. The filepath of the JS file - Gets the root of the site and then you can add the rest. 
	 * 3. Informs WP that this script relies on the JQuery libraries included as part of WP. 
	 * 
	 * @see http://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 */

	// Add the scripts to the WP site.

	//Jquery is included as part of WP - You do not have to register it.
	wp_enqueue_script( 'jquery' );
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

function set_up_CSS() {


	wp_register_style( 'H5BP-Normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), false, 'all');

	wp_register_style( 'H5BP-Main', get_template_directory_uri() . '/css/main.css', array('H5BP-Normalize'), false, 'all');

	wp_register_style( 'Font-Awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array('H5BP-Main'), false, 'all');
    
    wp_register_style( 'Liquid-Slider', get_template_directory_uri() . '/css/liquid-slider.css', array('H5BP-Normalize'), false, 'all');
    
    wp_register_style( 'Liquid-Slider Animate', get_template_directory_uri() . '/css/animate.css', array('H5BP-Normalize'), false, 'all');

	wp_register_style( 'Tyfi-Style', get_template_directory_uri() . '/style.css', array('H5BP-Main'), false, 'all');

	wp_enqueue_style( 'H5BP-Normalize' );
	wp_enqueue_style( 'H5BP-Main' );
	wp_enqueue_style( 'Font-Awesome' );
    wp_enqueue_style( 'Liquid-Slider' );
    wp_enqueue_style( 'Liquid-Slider Animate' );
	wp_enqueue_style( 'Tyfi-Style' );
	
}

/** 
 * Add an event handler to call 'set_up_JS' on the WP action 'wp_enqueue_scripts'
 *
 * @see http://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
add_action( 'wp_enqueue_scripts', 'set_up_CSS' );
add_action( 'wp_enqueue_scripts', 'set_up_JS' );

function qt_custom_breadcrumbs() {
  
  $showOnHome = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
  
  global $post;
  $homeLink = get_bloginfo('url');
  
  if (is_home() || is_front_page()) {
  
    if ($showOnHome == 1) echo '<div id="breadcrumb-nav"><a href="' . $homeLink . '">' . $home . '</a></div>';
  
  } else {
  
    echo '<div id="breadcrumb-nav"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
  
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
  
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
  
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
  
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
  
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
  
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
  
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
  
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
  
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
  
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
  
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
  
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
  
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
  
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
  
    echo '</div>';
  
  }
} // end qt_custom_breadcrumbs()

?>