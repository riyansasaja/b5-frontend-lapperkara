<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    { 
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all']= $this->m_laper->get_all_data();

        // foreach($data['nama_user'] as $nm){
        //     $data['laper'] = $this->m_laper->
        // }


        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/index', $data);
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
