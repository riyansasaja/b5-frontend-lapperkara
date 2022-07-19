<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laper extends CI_model
{
    public function get_data()
    {
        $id = $this->session->userdata('id');
        $this->db->select('*');
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

    public function get_nama_user(){

        $this->db->select('nama');
        $this->db->from('users');
        $this->db->order_by('id', 'ASC');
        $this->db->where('role_id', '2');
        $this->db->limit('10');
        $query = $this->db->get()->result_array();
        return $query;
    }

    
}
