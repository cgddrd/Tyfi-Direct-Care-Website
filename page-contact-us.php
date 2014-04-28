<?php
/*
Template Name: Contact Form Page
*/
?>
<?php $options = get_option( 'tyfi_theme_options' ); ?> 
<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification failed. Please try again.";
  $missing_content = "Please supply all required information and try again.";
  $email_invalid   = "Email Address Invalid. Please try again.";
  $message_unsent  = "Unfortunatley, your message could not be sent at this time. Please try again later.";
  $message_sent    = "Thankyou. Your message has been successfully sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $tel_no = $_POST['message_tel_no'];
  $contact_message = $_POST['message_text'];
  $human = $_POST['message_human'];

  $message = "NEW CUSTOMER ENQUIRY RECEIVED FROM TYFIDIRECTCARE.COM:\r\n\r\n" . 
  "Name: " . $name . "\r\n" . 
  "Email Address: " . $email . "\r\n" .
  "Telephone/Mobile Number: " . $tel_no . "\r\n" . 
  "Enquiry Message: \r\n" . $contact_message;


  //php mailer variables
  $to = get_option('admin_email');
  $subject = "New customer message received - " . get_bloginfo('name') . '.co.uk';
  $headers = 'From: '. $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

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

                    <div id="contact-container">
                        
                        <div id="contact-direct-details-image">
                            
                            <?php if (isset($options['tyfi-contact-number']) && isset($options['tyfi-contact-email'])) { ?>

                                <div id="contact-details">
                                    <h2>Speak to us directly</h2>

                                    <ul>
                                        <li><i class="fa fa-phone"></i><?php echo $options['tyfi-contact-number'] ?>
                                            
                                                <?php if (isset($options['tyfi-contact-number-opening'])) { ?>
                                                    <br />
                                                    <span class="small-text">Lines open: <?php echo $options['tyfi-contact-number-opening'] ?></span>
                                                <?php } ?> 
                                        </li>
                                        
                                        <li><i class="fa fa-envelope"></i><?php echo $options['tyfi-contact-email'] ?></li>
                                    </ul>
                                </div>

                            <?php } ?> 

                            <img id="contact-image" src="<?php bloginfo('template_url'); ?>/img/contact-image.png" />
                            
                        </div>
                        
              <div id="contact-form">
                <h2>Find out more</h2>
                <p>Email, phone or the the following contact form, and we will endeavour to respond to your enquiry the same working day.</p>
                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">
                  <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                  <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                    <p><label for="message_tel_no">Telephone/Mobile: <span>*</span> <br><input type="text" name="message_tel_no" value="<?php echo esc_attr($_POST['message_tel_no']); ?>"></label></p>
                  <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
                  <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 40px;" name="message_human"> + 3 = 5</label></p>
                  <input type="hidden" name="submitted" value="1">
                  <p><input type="submit"></p>
                </form>
              </div>
                        
                    </div>
    
                </div>
                
            </div>
        
        <?php endwhile; ?>

        <?php endif; ?>
        
    </div>
   
<?php get_footer(); ?>