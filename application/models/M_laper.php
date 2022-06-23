<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laper extends CI_model
{
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('laporan_perkara');
        $this->db->order_by('tgl_upload', 'DESC');
        $query = $this->db->get()->result();
        return $query;
    }
}
