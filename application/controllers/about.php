<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/7/13
 * Time: 1:09 PM
 * To change this template use File | Settings | File Templates.
 */
class About extends CI_Controller{

    function index()
    {
        $data['active']="about";
        $this->template->build('about_us',$data);
    }
}