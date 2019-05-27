<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function getLaporan()
    {
        $query = "SELECT id_transaksi,tbpemesanan.id_pemesanan,tbkaryawan.nip,bayar,kembali FROM tbtransaksi JOIN tbpemesanan
        ON tbtransaksi.id_pemesanan = tbpemesanan.id_pemesanan JOIN tbkaryawan ON tbtransaksi.nip = tbkaryawan.nip";

        return $this->db->query($query)->result_array();
    }
}
