<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/13/13
 * Time: 6:04 PM
 * To change this template use File | Settings | File Templates.
 */
class Test extends CI_Controller{

    function index(){
        $to = "anujrajput25@yahoo.com";
        $subject = "Test mail";
        $message = "Hello! This is a simple email message.";
        $from = "no-reply@test.com";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        echo "Mail Sent.";
    }

}