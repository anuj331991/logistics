<?php
/**
 * Created by PhpStorm.
 * User: keshav
 * Date: 11/16/13
 * Time: 10:30 AM
 */

class Feedback extends CI_Controller
{

    function index()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('feedbackType', 'Feedback Type', 'required');
        $this->form_validation->set_rules('feedbackCategory', 'Feedback Category', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('telephone', 'Telephone', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');
        $data['active'] = "feedback";
        if ($this->form_validation->run() == FALSE) {
        } else {

            try {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $comment = $this->input->post('comment');
                $address = $this->input->post('address');
                $telephone = $this->input->post('telephone');
                $feedbackType = $this->input->post('feedbackType');
                $feedbackCategory = $this->input->post('feedbackCategory');

                $subject = $this->input->post('subject');
                $full_message = "Feedback of : " . $feedbackType . "<br/> Feedback category : " . $feedbackCategory .
                    "<br/>Name: $name" . "<br/> Email: $email" . "<br/>Telephone" . $telephone .
                    "<br/>Comment: $comment" . '<br/>Address : ' . $address;
                $this->sendEmail("Asia logistic", "info@asianlogistic.com", $subject, $full_message);
                $this->session->set_flashdata('formMessage', 'Thanks for querying with us, will contact you shortly');
                redirect(current_url());
            } catch (Exception $e) {
                $data['errorMessage'] = "Internal Server Error.";
            }
        }
        $this->template->build('feedback', $data);
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