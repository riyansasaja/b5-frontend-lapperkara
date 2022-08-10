<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_all_data();
        // var_dump($data);
        // die;

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
        // $data['catatan'] = $this->db->get_where('catatan_laporan', ['laper_id' => $id])->result_array();

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

    public function download_xls()
    {

        $data['laporan'] = $this->m_laper->get_data();
        var_dump($data);
        die;
        $satker = $this->input->post('kode_pa');
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";


        if ($data['laporan'][0]['laper_xls'] != null) {
            force_download("files_laporan/$folder/" . $data['laporan'][0]['laper_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
            redirect('Admin');
        }
    }

    public function add_catatan()
    {
        $id_laper = $this->input->post('id_laper');

        $data = [
            'id' => '',
            'laper_id' => $id_laper,
            'tgl_catatan' => date('Y-m-d'),
            'catatan' => $this->input->post('catatan')
        ];

        $this->db->insert('catatan_laporan', $data);
        $this->session->set_flashdata('flash', 'Berhasil memberikan catatan');

        redirect('Admin');
    }

    public function add_validasi()
    {

        $id_laper = $this->input->post('id_laper');

        $data = [
            'status' => $this->input->post('validasi')
        ];
        $where = array('id' => $id_laper);
        $this->db->update('laporan_perkara', $data, $where);
        $this->session->set_flashdata('flash', 'Validasi Laporan Berhasil');

        redirect('Admin');
    }
}
