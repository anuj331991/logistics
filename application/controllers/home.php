<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/7/13
 * Time: 1:09 PM
 * To change this template use File | Settings | File Templates.
 */
class Home extends CI_Controller
{

    function index()
    {
        $data['active']="home";
        $this->template->build('home',$data);
    }
}