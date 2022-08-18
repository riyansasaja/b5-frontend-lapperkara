<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laper extends CI_model
{

    public function get_all_data()
    {
        // return $this->db->get('laporan_perkara')->result_array();
        $this->db->select('id');
        $this->db->select('id_user');
        $this->db->select('periode');
        $this->db->select('berkas_laporan');
        $this->db->select('laper_pdf');
        $this->db->select('laper_xls');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->select('tgl_terakhir_rev');
        $this->db->select('status');
        $this->db->select('kode_pa');
        $this->db->from('v_user_laporan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function get_all_rekap()
    {
        return $this->db->get('rekap_laporan_perkara')->result_array();
    }


    public function get_data_perbulan()
    {
        $this->db->select('*');
        $this->db->from('laporan_perkara');
        $this->db->limit(1);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_data()
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('laporan_perkara');
        $this->db->where('id_user', $id);
        $this->db->order_by('tgl_upload', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_years()
    {
        $id = $this->session->userdata('id');
        $this->db->select('YEAR(`tgl_upload`) as year');
        $this->db->distinct();
        $this->db->from('laporan_perkara');
        $this->db->order_by('tgl_upload', 'ASC');
        $this->db->where('id_user', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_year($year)
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('laporan_perkara');
        $this->db->order_by('tgl_upload', 'ASC');
        $multiple = array('id_user' => $id, 'YEAR(`tgl_upload`)' => $year);
        $this->db->where($multiple);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_nama_user()
    {

        $this->db->select('nama');
        $this->db->select('id');
        $this->db->from('users');
        $this->db->order_by('id', 'ASC');
        $this->db->where('role_id', '2');
        $this->db->limit('10');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_data_triwulan()
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('laporan_triwulan');
        $this->db->where('id_user', $id);
        $this->db->order_by('periode_triwulan', 'ASC');
        $this->db->limit(4);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_triwulan_admin()
    {
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('laporan_triwulan');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function get_rekap_triwulan()
    {
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('rekap_triwulan');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function view_rekap_triwulan($id)
    {
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('rekap_triwulan');
        $this->db->where('id', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function detail_rekap_triwulan($id)
    {
        $this->db->select('*');
        $this->db->select('day(`tgl_upload`) as tanggal');
        $this->db->from('rekap_triwulan');
        $this->db->where('id', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
