<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PA_laper extends CI_Controller
{
    public function index()
    {
        $this->load->view('PA/index');
    }
}
