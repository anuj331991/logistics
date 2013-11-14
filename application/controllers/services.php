<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Anuj
 * Date: 7/8/13
 * Time: 9:23 PM
 * To change this template use File | Settings | File Templates.
 */
class Services extends CI_Controller
{

    function index()
    {
        $data['active'] = "services";
        $this->template->build('services', $data);
    }

    function ocean()
    {
        $data['active'] = "services";
        $this->template->build('ocean', $data);
    }

    function air()
    {
        $data['active'] = "services";
        $this->template->build('air', $data);
    }

    function logistics()
    {
        $data['active'] = "services";
        $this->template->build('logistics', $data);
    }

    function custom()
    {
        $data['active'] = "services";
        $this->template->build('custom', $data);

    }

    function doortodoor()
    {
        $data['active'] = "services";
        $this->template->build('doortodoor', $data);
    }

    function warehousing()
    {
        $data['active'] = "services";
        $this->template->build('warehousing', $data);
    }

    function landtransport()
    {
        $data['active'] = "services";
        $this->template->build('landtransport', $data);
    }
}
