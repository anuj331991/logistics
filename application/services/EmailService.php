<?php
/**
 * Created by PhpStorm.
 * User: keshav
 * Date: 10/29/13
 * Time: 11:27 PM
 */

class EmailService
{

    public function  sendEmail($name, $email, $subject, $message)
    {
        try {
            $ci = get_instance();
            $ci->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = "keshavashta16@gmail.com";
            $config['smtp_pass'] = "mummypapa1";
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";

            $ci->email->initialize($config);

            $ci->email->from('keshavashta16@gmail.com', 'Blabla');
            $ci->email->to($email, $name);

            $ci->email->subject($subject);
            $ci->email->message($message);
            $ci->email->send();
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            throw $e;
        }
    }
} 