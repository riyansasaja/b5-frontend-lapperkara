<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pta_user extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->library('zip');

        //usir user yang ga punya session
        if (!$this->session->userdata('id') || $this->session->userdata('role_id') != 4 && $this->session->userdata('role_id') != 5) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_all_data();
        $data['years'] = $this->m_laper->get_years_laper();

        $this->load->view('templates/header');
        $this->load->view('templates/sidepta');
        $this->load->view('pta_user_view/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function laper_search_year($year)
    {
        $data['js'] = 'status.js';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_year_laper($year);
        $data['years'] = $this->m_laper->get_years_laper();

        $this->load->view('templates/header');
        $this->load->view('templates/sidepta');
        $this->load->view('pta_user_view/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view_document($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['laporan'] = $this->db->get_where('v_user_laporan', ['id' => $id])->result_array();
        $data['catatan'] = $this->db->get_where('catatan_laporan', ['laper_id' => $id])->result_array();

        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Pta_user');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/view_document', $data);
            $this->load->view('templates/footer', $data);
        }
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
            redirect('Pta_user');
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

        redirect('Pta_user');
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

        redirect('Pta_user');
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
            redirect('Pta_user/');
        }
    }

    public function triwulan()
    {
        $data['js'] = '';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_triwulan_admin();
        $data['years'] = $this->m_laper->get_years_triwulan();

        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Pta_user');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/triwulan', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function triwulan_search_year($year)
    {
        $data['js'] = 'status.js';
        $data['nama_user'] = $this->m_laper->get_nama_user();
        $data['all'] = $this->m_laper->get_year_triwulan($year);
        $data['years'] = $this->m_laper->get_years_triwulan();

        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('pta_user_view/triwulan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view_triwulan($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['triwulan'] = $this->db->get_where('v_triwulan_laporan', ['id' => $id])->result_array();
        $data['laporan'] = $this->db->get_where('v_detail_triwulan', ['id' => $id])->result_array();
        $data['catatan'] = $this->db->get('catatan_laporan')->result_array();


        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Pta_user');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/triwulan_view', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function download_xls_triwulan($id)
    {
        $data['laporan'] = $this->db->get_where('v_detail_triwulan', ['id_triwulan' => $id])->result_array();

        $satker = $data['laporan'][0]['kode_pa'];
        $periode = $data['laporan'][0]['berkas_laporan'];
        $tahun = $data['laporan'][0]['periode_tahun'];
        $nm_laporan = $data['laporan'][0]['nm_laporan'];
        $folder = "$satker $periode $tahun";



        if ($data['laporan'][0]['lap_xls'] != null) {
            force_download("laporan_triwulan/$folder/$nm_laporan/" . $data['laporan'][0]['lap_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
            redirect('Pta_user/triwulan/');
        }
    }

    public function zip_file_triwulan($id)
    {
        $data['laporan'] = $this->db->get_where('v_detail_triwulan', ['id_triwulan' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
        $periode = $data['laporan'][0]['berkas_laporan'];
        $tahun = $data['laporan'][0]['periode_tahun'];
        $nm_laporan = $data['laporan'][0]['nm_laporan'];
        $folder = "$satker $periode $tahun";

        $path = "./laporan_triwulan/$folder/$nm_laporan/revisi/";

        if (file_exists($path)) {
            $this->zip->read_dir($path);

            // Download the file to your desktop
            $this->zip->download("$folder-revisi.zip");
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada Revisi');
            redirect('Pta_user/triwulan/');
        }
    }

    public function add_catatan_triwulan()
    {
        $id_triwulan = $this->input->post('id_triwulan');

        $data = [
            'id' => '',
            'id_triwulan' => $id_triwulan,
            'tgl_catatan' => date('Y-m-d H:i:s'),
            'catatan' => $this->input->post('catatan')
        ];

        $this->db->insert('catatan_laporan', $data);
        $this->session->set_flashdata('flash', 'Berhasil memberikan catatan');

        redirect('Pta_user/triwulan');
    }

    public function add_validasi_triwulan()
    {

        $id_triwulan = $this->input->post('id_triwulan');

        $data = [
            'status_validasi' => $this->input->post('validasi')
        ];
        $where = array('id' => $id_triwulan);
        $this->db->update('lap_tri_detail', $data, $where);
        $this->session->set_flashdata('flash', 'Validasi Laporan Berhasil');

        redirect('Pta_user/triwulan');
    }

    public function rekap_laporan()
    {
        $data['js'] = 'modalpdf.js';
        $data['laporan'] = $this->db->get_where('v_rekap_laporan')->result_array();
        $data['all'] = $this->m_laper->get_all_rekap();
        $data['years'] = $this->m_laper->get_years_rekap();

        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Pta_user');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/view_rekaplaper', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function rekap_search_year($year)
    {
        $data['js'] = 'status.js';
        $data['all'] = $this->m_laper->get_year_rekap($year);
        $data['years'] = $this->m_laper->get_years_rekap();

        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('pta_user_view/view_rekaplaper', $data);
        $this->load->view('templates/footer', $data);
    }

    public function download_xls_rekap($id)
    {
        $data['laporan'] = $this->db->get_where('v_rekap_laporan', ['id' => $id])->result_array();

        $satker = $data['laporan'][0]['kode_pa'];
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";

        if ($data['laporan'][0]['rekap_xls'] != null) {
            force_download("files_laporan/$folder/" . $data['laporan'][0]['rekap_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
        }
    }

    public function zip_file_rekap($id)
    {
        $data['laporan'] = $this->db->get_where('v_rekap_laporan', ['id' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
        $periode = $data['laporan'][0]['periode'];
        $folder = "$satker $periode";

        $path = "./files_laporan/$folder/";

        if (file_exists($path)) {
            $this->zip->read_dir($path);

            // Download the file to your desktop
            $this->zip->download("$folder.zip");
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada Laporan');
        }
    }

    public function rekap_triwulan()
    {
        $data['js'] = '';
        $data['all'] = $this->m_laper->get_rekap_triwulan();
        $data['years'] = $this->m_laper->years_rekap_triwulan();


        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Pta_user');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/rekap_triwulan', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function rekap_triwulan_year($year)
    {

        $data['js'] = 'status.js';
        $data['all'] = $this->m_laper->year_rekap_triwulan($year);
        $data['years'] = $this->m_laper->years_rekap_triwulan();

        $this->load->view('templates/header');
        $this->load->view('templates/sideadmin');
        $this->load->view('pta_user_view/rekap_triwulan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view_rekap_tri($id)
    {
        $data['js'] = 'modalpdf.js';
        $data['triwulan'] = $this->db->get_where('rekap_triwulan', ['id' => $id])->result_array();
        $data['laporan'] = $this->db->get_where('v_rekap_triwulan', ['id' => $id])->result_array();


        //user id tidak sesuai
        if ($this->session->userdata('role_id') != '4' && $this->session->userdata('role_id') != '5') {
            redirect('Admin');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidepta');
            $this->load->view('pta_user_view/view_rekaptriwulan', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function download_xls_rekap_tri($id)
    {
        $data['laporan'] = $this->db->get_where('v_rekap_triwulan', ['id_triwulan' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
        $triwulan = $data['laporan'][0]['berkas_laporan'];
        $periode = $data['laporan'][0]['periode_tahun'];
        $nm_laporan = $data['laporan'][0]['nm_laporan'];
        $folder = "$satker $triwulan $periode";

        if ($data['laporan'][0]['lap_xls'] != null) {
            force_download("laporan_triwulan/$folder/$nm_laporan/" . $data['laporan'][0]['lap_xls'], null);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada laporan');
            redirect('Pta_user/rekap_triwulan/');
        }
    }

    public function zip_rekap_triwulan($id)
    {
        $data['laporan'] = $this->db->get_where('v_rekap_triwulan', ['id' => $id])->result_array();
        $satker = $data['laporan'][0]['kode_pa'];
        $triwulan = $data['laporan'][0]['berkas_laporan'];
        $periode = $data['laporan'][0]['periode_tahun'];
        $folder = "$satker $triwulan $periode";

        $path = "./laporan_triwulan/$folder/";

        if (file_exists($path)) {
            $this->zip->read_dir($path);

            // Download the file to your desktop
            $this->zip->download("$folder.zip");
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada Laporan');
            redirect('Pta_user/rekap_triwulan/');
        }
    }
}
