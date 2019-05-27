<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getPemesanan()
    {
        $query = "SELECT * from tbpemesanan join tbpelanggan on tbpemesanan.nik = tbpelanggan.nik 
        join tbbarang on tbpemesanan.id_barang = tbbarang.id_barang where konfirmasi = 'tidak'";

        return $this->db->query($query)->result_array();
    }
    public function getPemesananById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
