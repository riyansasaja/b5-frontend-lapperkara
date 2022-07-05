<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['js'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/index');
        $this->load->view('templates/footer', $data);
    }

    public function view_document()
    {
        $data['js'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/view_document');
        $this->load->view('templates/footer', $data);
    }
}
