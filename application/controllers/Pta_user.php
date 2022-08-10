<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pta_user extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['js'] = 'pta_user.js';
        $data['data_laporan'] = $this->m_laper->get_laporan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidepta');
        $this->load->view('pta_user_view/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view_document()
    {
        $data['js'] = '';
        $this->load->view('templates/header');
        $this->load->view('templates/sidepta');
        $this->load->view('admin_view/view_document');
        $this->load->view('templates/footer', $data);
    }
}