<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_all_data();

        // foreach($data['nama_user'] as $nm){
        //     $data['laper'] = $this->m_laper->
        // }


        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view_document($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $data['catatan'] = $this->db->get_where('catatan_laporan', ['laper_id' => $id])->result_array();

        // //user id tidak sesuai
        // if ($this->session->userdata('id') != $data['laporan'][0]['id_user']) {
        //     redirect('Admin');
        // } else {
        //     $this->load->view('templates/header');
        //     $this->load->view('templates/sideadmin');
        //     $this->load->view('admin_view/view_document', $data);
        //     $this->load->view('templates/footer', $data);
        // }

        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('admin_view/view_document', $data);
        $this->load->view('templates/footer', $data);
    }
}
