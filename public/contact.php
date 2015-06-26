<?php
/**
 * Created by PhpStorm.
 * User: william muli
 * Date: 6/11/2015
 * Time: 2:14 PM
 */

    $to_email       = "admin@localhost"; //Recipient email, Replace with own email here
    $data = json_decode(file_get_contents('php://input'));

    $user_name      =  $data -> name;
    $user_email     =   $data -> email;
    $phone_number   =   $data -> phone;
    $subject        = 'VISITOR MESSAGE from '.$user_name .' phone number : '.$phone_number;
    $message        =   $data -> message;


    $send_mail = mail($to_email, $subject, $message);

    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .'. Thank you for contacting us.We will get back to you
        soonest possible.'));
        die($output);
}
?>