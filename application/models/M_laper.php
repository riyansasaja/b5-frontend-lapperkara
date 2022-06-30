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

}
