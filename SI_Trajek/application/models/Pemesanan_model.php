<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getPemesanan()
    {
        $query = "SELECT id_pemesanan,tbpelanggan.nik,tbbarang.id_barang,tanggal_pesan, tanggal_pengambilan, 
        tanggal_pengembalian, tbdp.id_dp from tbpemesanan join tbpelanggan on tbpemesanan.nik = tbpelanggan.nik 
        join tbbarang on tbpemesanan.id_barang = tbbarang.id_barang join tbdp  on tbpemesanan.id_dp = tbdp.id_dp ";

        return $this->db->query($query)->result_array();
    }
    public function getPemesananById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
