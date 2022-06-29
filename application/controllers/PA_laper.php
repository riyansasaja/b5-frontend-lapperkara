<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PA_laper extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //usir user yang ga punya session
        if (!$this->session->userdata('id') || $this->session->userdata('role_id') != 2) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['laporan'] = $this->m_laper->get_data();

        $this->load->view('PA/index', $data);
    }

    // public function get_data()
    // {
    //     $data = $this->m_laper->get_data();
    //     $result = [
    //         'response' => 'success',
    //         'code' => '600',
    //         'data' => $data
    //     ];
    //     echo json_encode($result);
    // }

    public function view_laporan($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();

        //user id tidak sesuai
        if ($this->session->userdata('id') != $data['laporan'][0]['id_user']) {
            redirect('PA_laper');
        } else {
            $this->load->view('PA/actionview', $data);
        }
    }

    public function download_xls()
    {

        $data['laporan'] = $this->m_laper->get_data();
        $satker = $this->session->userdata('kode_pa');
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";


        if ($data['laporan'][0]['laper_xls'] != null) {
            force_download("assets/files/$folder/" . $data['laporan'][0]['laper_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
            redirect('PA_laper/view_laporan');
        }
    }

    public function zip_file()
    {
        $this->load->library('zip');

        $data['laporan'] = $this->m_laper->get_data();
        $satker = $this->session->userdata('kode_pa');
        $periode = $data['laporan'][0]['periode'];
        $file = $data['laporan'][0]['laper_xls'];
        $folder = "$satker $periode";

        $path = '/assets/files/PA.Tty 2022-06/revisi/';
        // var_dump($path);
        // die;

        $this->zip->read_dir($path);

        // Download the file to your desktop. Name it "my_backup.zip"
        $this->zip->download('revisi.zip');
        // if (!file_exists($path)) {
        //     $this->zip->read_dir($path);

        //     // Download the file to your desktop. Name it "my_backup.zip"
        //     $this->zip->download("$path.zip");
        // } else {
        //     $this->session->set_flashdata('msg', 'Tidak ada Revisi');
        // }
    }

    public function get_status()
    {
        // $id = $this->input->post('id');
        $data['laporan'] = $this->m_laper->get_data();
        echo json_encode($data);
    }

    public function add_laporan_perkara()
    {


        $periode = $this->input->post('periode', true);
        $tanggal = date('Y-m-d');
        $berkas = "Lap Per $periode";
        $satker = $this->session->userdata('kode_pa');
        $folder = "$satker $periode";
        $path = "./assets/files/$folder";

        if (!file_exists($path)) {
            mkdir($path);
        }



        $config['upload_path']          = "./assets/files/$folder/";
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
            'laper_xls' => $laper_xls
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
        $path = "./assets/files/$folder/revisi";

        if (!file_exists($path)) {
            mkdir($path);
        }

        $config['upload_path']          = "./assets/files/$folder/revisi/";
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
