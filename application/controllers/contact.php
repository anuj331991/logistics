<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/8/13
 * Time: 9:23 PM
 * To change this template use File | Settings | File Templates.
 */
class Contact extends CI_Controller
{

    function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['active'] = "contact";

        } else {
            try {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $message = $this->input->post('message');
                $subject = $this->input->post('subject');
                $full_message = "Name: $name" . "Email: $email" . "Message: $message" . 'Subject : ' . $subject;
                $this->sendEmail("Asia logistic", "info@asianlogistic.com", $subject, $full_message);
                $data['formMessage'] = "Thanks for querying with us, will contact you shortly";
            } catch (Exception $e) {
                $data['formMessage'] = "Internal Server Error";
            }
        }
        $this->template->build('contact_us', $data);
    }

    private function  sendEmail($name, $email, $subject, $message)
    {
        try {
            $ci = get_instance();
            $ci->load->library('email');
            $config['protocol']='smtp';
            $config['smtp_host']='ssl://smtp.googlemail.com';
            $config['smtp_port']='465';
            $config['smtp_timeout']='30';
            $config['smtp_user']= 'testsmtp8@gmail.com';
            $config['smtp_pass']='@sdf1234';
            $config['charset']='utf-8';
            $config['newline']="\r\n";
            $config['mailtype']="html";

            $ci->email->initialize($config);

            $ci->email->from('info@asianlogistics.com', 'Asia Logistic');
            $ci->email->to($email, $name);
            $this->email->reply_to('info@asianlogistics.com', 'Asia Logistic');
            $ci->email->subject($subject);
            $ci->email->message($message);
            $ci->email->send();
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            throw $e;
        }
    }
}