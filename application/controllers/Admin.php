<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('zip');

        //usir user yang ga punya session
        if (!$this->session->userdata('id') || $this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_all_data();

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

    public function download_xls($id)
    {

        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
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

    public function zip_file($id)
    {

        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";

        $path = "./files_laporan/$folder/revisi/";

        if (file_exists($path)) {
            $this->zip->read_dir($path);

            // Download the file to your desktop
            $this->zip->download("$folder-revisi.zip");
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada Revisi');
        }
    }

    // public function rekap_laporan()
    // {
    //     $data['js'] = 'modalpdf.js';
    //     $data['laporan'] = $this->db->get_where('v_rekap_laporan')->result_array();
    //     $data['all'] = $this->m_laper->get_all_rekap();

    //     $this->load->view('templates/header');
    //     $this->load->view('templates/sideadmin');
    //     $this->load->view('admin_view/view_rekaplaper', $data);
    //     $this->load->view('templates/footer', $data);
    // }

    // public function add_rekap_laporan()
    // {
    //     $periode = $this->input->post('periode', true);
    //     $tanggal = date('Y-m-d');
    //     $satker = $this->session->userdata('kode_pa');
    //     $folder = "$satker $periode";
    //     $path = "./files_laporan/$folder";

    //     if (!file_exists($path)) {
    //         mkdir($path);
    //     }



    //     $config['upload_path']          = "./files_laporan/$folder/";
    //     $config['allowed_types']        = 'pdf|xlsx';
    //     $config['max_size']             = 5024;
    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);

    //     if (($_FILES['file1']['name'])) {
    //         if ($this->upload->do_upload('file1')) {
    //             $rekap_pdf = $this->upload->data("file_name");
    //         } else {
    //             $this->session->set_flashdata('msg', 'Upload file gagal');
    //             redirect('Admin/rekap_laporan/');
    //             // $error = array('error' => $this->upload->display_errors());
    //             // $this->load->view('banding/uploadbundle', $error);
    //         }
    //     }

    //     if (($_FILES['file2']['name'])) {
    //         if ($this->upload->do_upload('file2')) {
    //             $rekap_xls = $this->upload->data("file_name");
    //         } else {
    //             $this->session->set_flashdata('msg', 'Upload file gagal');
    //             redirect('Admin/rekap_laporan/');
    //             // $error = array('error' => $this->upload->display_errors());
    //             // $this->load->view('banding/uploadbundle', $error);
    //         }
    //     }

    //     $data = [
    //         'id' => '',
    //         'id_user' => $this->session->userdata('id'),
    //         'tgl_upload' => $tanggal,
    //         'periode' => $periode,
    //         'rekap_pdf' => $rekap_pdf,
    //         'rekap_xls' => $rekap_xls
    //     ];

    //     $this->db->insert('rekap_laporan_perkara', $data);
    //     $this->session->set_flashdata('flash', 'Upload file berhasil');

    //     redirect('admin/rekap_laporan/');
    // }
}
