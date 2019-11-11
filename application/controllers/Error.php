<?php defined('BASEPATH') or exit('No direct script access allowed');

class Error extends SPS_Controller
{

    public function index()
    {
        header('HTTP/1.1 404 Not Found');
        $this->load->view('404');
    }
}
