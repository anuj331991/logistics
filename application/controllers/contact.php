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
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $data['active'] = "contact";
        if ($this->form_validation->run() == FALSE) {


        } else {
            try {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $message = $this->input->post('message');
                $subject = $this->input->post('subject');
                $full_message = "Name: $name" . "Email: $email" . "Message: $message" . 'Subject : ' . $subject;
                $this->sendEmail("Asia logistic", "info@asianlogistic.com", $subject, $full_message);
                $this->session->set_flashdata('formMessage', 'Thanks for querying with us, will contact you shortly');
                redirect(current_url());
            } catch (Exception $e) {
                $data['errorMessage'] = "Internal Server Error.";
            }
        }
        $this->template->build('contact_us', $data);
    }

    private function  sendEmail($name, $email, $subject, $message)
    {
        try {
            $from = "info@asianlogistics.com";
            $headers = "From:" . $from;
            mail($email, $subject, $message, $headers);
        } catch (Exception $e) {
            log_message('error', $e->getMessage());
            throw $e;
        }
    }
}