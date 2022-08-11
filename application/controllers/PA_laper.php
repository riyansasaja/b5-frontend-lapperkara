<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PA_laper extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('zip');

        //usir user yang ga punya session
        if (!$this->session->userdata('id') || $this->session->userdata('role_id') != 2) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['js'] = 'status.js';
        $data['laporan'] = $this->m_laper->get_data();
        $data['years'] = $this->m_laper->get_years();
        $this->load->view('PA/index', $data);
    }

    public function laporan($year)
    {
        $data['js'] = 'status.js';
        $data['laporan'] = $this->m_laper->get_year($year);
        $data['years'] = $this->m_laper->get_years();
        $this->load->view('PA/index', $data);
    }

    public function view_laporan($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $data['catatan'] = $this->db->get_where('catatan_laporan', ['laper_id' => $id])->result_array();


        //user id tidak sesuai
        if ($this->session->userdata('id') != $data['laporan'][0]['id_user']) {
            redirect('PA_laper');
        } else {
            $this->load->view('PA/actionview', $data);
        }
    }

    public function download_xls($id)
    {

        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $satker = $this->session->userdata('kode_pa');
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";


        if ($data['laporan'][0]['laper_xls'] != null) {
            force_download("files_laporan/$folder/" . $data['laporan'][0]['laper_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
        }
    }

    public function zip_file($id)
    {

        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $satker = $this->session->userdata('kode_pa');
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

    public function get_status()
    {
        // $id = $this->input->post('id');
        $data['laporan'] = $this->m_laper->get_data();
        $status = $data['laporan'][0]['status'];
        echo json_encode($status);
    }

    public function add_laporan_perkara()
    {


        $periode = $this->input->post('periode', true);
        $tanggal = date('Y-m-d');
        $berkas = "Lap Per $periode";
        $satker = $this->session->userdata('kode_pa');
        $folder = "$satker $periode";
        $status = "Belum Validasi";
        $path = "./files_laporan/$folder";

        if (!file_exists($path)) {
            mkdir($path);
        }



        $config['upload_path']          = "./files_laporan/$folder/";
        $config['allowed_types']        = 'pdf|xlsx';
        $config['max_size']             = 5024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (($_FILES['file1']['name'])) {
            if ($this->upload->do_upload('file1')) {
                $laper_pdf = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal');
                redirect('PA_laper/');
                // $error = array('error' => $this->upload->display_errors());
                // $this->load->view('banding/uploadbundle', $error);
            }
        }

        if (($_FILES['file2']['name'])) {
            if ($this->upload->do_upload('file2')) {
                $laper_xls = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal');
                redirect('PA_laper/');
                // $error = array('error' => $this->upload->display_errors());
                // $this->load->view('banding/uploadbundle', $error);
            }
        }

        $data = [
            'id' => '',
            'id_user' => $this->session->userdata('id'),
            'berkas_laporan' => $berkas,
            'tgl_upload' => $tanggal,
            'periode' => $periode,
            'laper_pdf' => $laper_pdf,
            'laper_xls' => $laper_xls,
            'status' => $status
        ];

        $this->db->insert('laporan_perkara', $data);
        $this->session->set_flashdata('flash', 'Upload file berhasil');

        redirect('PA_laper/');
    }

    public function revisi_laporan_perkara()
    {

        $laper_id = $this->input->post('id', true);
        $tanggal = date('Y-m-d');
        $periode = $this->input->post('periode', true);
        $satker = $this->session->userdata('kode_pa');
        $folder = "$satker $periode";
        $path = "./files_laporan/$folder/revisi";

        if (!file_exists($path)) {
            mkdir($path);
        }

        $config['upload_path']          = "./files_laporan/$folder/revisi/";
        $config['allowed_types']        = 'pdf|xlsx';
        $config['max_size']             = 5024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (($_FILES['file1']['name'])) {
            if ($this->upload->do_upload('file1')) {
                $laper_pdf = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal');
                redirect('PA_laper/');
                // $error = array('error' => $this->upload->display_errors());
                // $this->load->view('banding/uploadbundle', $error);
            }
        }

        if (($_FILES['file2']['name'])) {
            if ($this->upload->do_upload('file2')) {
                $laper_xls = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal');
                redirect('PA_laper/');
                // $error = array('error' => $this->upload->display_errors());
                // $this->load->view('banding/uploadbundle', $error);
            }
        }

        $data = [
            'id' => '',
            'laper_id' => $laper_id,
            'rev_pdf' => $laper_pdf,
            'rev_xls' => $laper_xls
        ];


        $this->db->insert('revisi_laporan', $data);

        $this->session->set_flashdata('flash', 'Upload file berhasil');
        redirect('PA_laper/');
    }
}
