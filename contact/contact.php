<?php
/*
Plugin Name: My Contact Form
*/

function My_Contact_Form()
{
$content ='';
$content .= ' <h2> Contact Us</h2> ';
$content .= '<form method="post" action=" ">';

$content .= '<label for="your_name"> Name </label>';
$content .= '<input type="text"></input>';

 $content .= '<label for="your_email"> Email </label>';
 $content .= '<input type="email" name = "your_email" placeholder="enter your email" class="form-control" />';

 $content .= '<label for="your_comments"> comments </label>';
 $content .= '<textarea name ="your_comments" plceholder="Enter your comments" class="form-control" ></textarea>';

 $content .='<br/><input type="submit" name ="My_contact_submit" class ="btn btn-md btn-primary" value="send us">';


 return $content;
 }

add_shortcode('My_Contact' , 'My_Contact_Form' );

function My_Contact_capture()
{
    if(isset($_post['my_contct_submit' ]))
    {
        $name= sanitize_text_field($_POST['your_name']);
        $email= sanitize_text_field($_POST['your_email']);
        $comments= sanitize_textarea_field($_POST['your_comments']);
        
        $to='natnaelteferi15@gmail.com';
        $subject='Test form submission';
        $message=$comments.'-'.$name.'-'.$email;

        wp_mail($to,$subject,$messge,);
    }

}


?>


