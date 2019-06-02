<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getPemesanan()
    {
        $query = "SELECT * from tbtransaksi join tbpelanggan on tbtransaksi.nik = tbpelanggan.nik 
        join tbbarang on tbtransaksi.id_barang = tbbarang.id_barang";

        return $this->db->query($query)->result_array();
    }
    public function getPemesananById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
