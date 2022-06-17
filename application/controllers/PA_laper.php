<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PA_laper extends CI_Controller
{
    public function index()
    {
        $this->load->view('PA/index');
    }

    public function get_data()
    {
        $data = $this->m_laper->get_data();
        $result = [
            'response' => 'success',
            'code' => '600',
            'data' => $data
        ];
        echo json_encode($result);
    }

    public function add_laporan_perkara()
    {


        $periode = $this->input->post('periode', true);
        $tanggal = date('Y-m-d');
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
            'tgl_upload' => $tanggal,
            'periode' => $periode,
            'laper_pdf' => $laper_pdf,
            'laper_xls' => $laper_xls
        ];

        $this->db->insert('laporan_perkara', $data);
        $this->session->set_flashdata('flash', 'Upload file berhasil');
        redirect('PA_laper/');
    }
}
