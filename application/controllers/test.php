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


        try {
            $this->sendEmail('keshav', 'keshavashta16@gmail.com', 'test', 'test message');
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

//        $to = "anujrajput25@yahoo.com";
//        $subject = "Test mail";
//        $message = "Hello! This is a simple email message.";
//        $from = "no-reply@test.com";
//        $headers = "From:" . $from;
//        mail($to,$subject,$message,$headers);
//        echo "Mail Sent.";
    }
    private function  sendEmail($name, $email, $subject, $message)
    {
        try {
            $ci = get_instance();
            $ci->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = "";
            $config['smtp_pass'] = "";
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";

            $ci->email->initialize($config);

            $ci->email->from('keshavashta16@gmail.com', 'Blabla');
            $ci->email->to($email, $name);
            $this->email->reply_to('keshavashta16@gmail.com', 'Keshav Ashta');
            $ci->email->subject($subject);
            $ci->email->message($message);
            $ci->email->send();
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            throw $e;
        }
    }
}