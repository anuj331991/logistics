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
                $this->sendEmail($name, $email, $subject, $full_message);
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