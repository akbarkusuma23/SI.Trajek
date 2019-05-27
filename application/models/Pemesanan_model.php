<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getPemesanan()
    {
        $query = "SELECT id_pemesanan,tbpelanggan.nik,tbbarang.id_barang,harga,tanggal_pesan,tanggal_pengambilan,tanggal_pengembalian,tipe_pembayaran,jumlah_total,tbdp.id_dp
        FROM tbpemesanan JOIN tbpelanggan ON tbpemesanan.nik = tbpelanggan.id_nik JOIN tbbarang ON tbpemesanan.id_barang = tbbarang.id_barang JOIN tbdp ON tbpemesanan.id_dp = tbdp.id_dp";

        return $this->db->query($query)->result_array();
    }
}
