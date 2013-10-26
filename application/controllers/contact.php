<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/8/13
 * Time: 9:23 PM
 * To change this template use File | Settings | File Templates.
 */
class Contact extends CI_Controller{

    function index()
    {
        $data['active']="contact";
        $this->template->build('contact_us',$data);
    }

    function email()
    {


        $name = $this->input->post('name')."\r\n";
        $email = $this->input->post('email')."\r\n";
        $phone=$this->input->post('mobile')."\r\n";
        $message = $this->input->post('message');

        $name=isset($name)?$name:"";
        $email=isset($email)?$email:"";
        $phone=isset($phone)?$phone:"";
        $message=isset($message)?$message:"";
        $full_message="Name: $name"."Email: $email"."Phone: $phone"."Message: $message";

        $this->load->library('email');

        $to = "newjointcompany@gmail.com.com,luckyarora22@gmail.com,jain.vishal86@yahoo.com";
        $subject = "New Entry At TMS Plus";
        $message = $full_message;
        $from = "Total Mobile Solutions Plus";
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

//        $this->email->from('no-reply@tms.com', 'Total Mobile Solutions Plus');
//        $this->email->to('luckyarora22@gmail.com');
//        $this->email->cc('anujrajput25@yahoo.com');
//        $this->email->cc('jain.vishal86@yahoo.com');
        //$this->email->cc('vikas141084@gmail.com');
        //$this->email->cc('luckyarora66@yahoo.in');


//        $this->email->subject('New Entry At TMS Plus');
//        $this->email->message($full_message);
//
//        $this->email->send();
        redirect('contact');

    }
}