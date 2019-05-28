<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function getTransaksi()
    {
        $query = "SELECT id_transaksi,tbpemesanan.id_pemesanan,tbpemesanan.nik,tbkaryawan.nip,bayar, kembali from tbtransaksi join tbpemesanan
         on tbtransaksi.id_pemesanan = tbpemesanan.id_pemesanan join tbkaryawan on tbtransaksi.nip = tbkaryawan.nip" ; 

        return $this->db->query($query)->result_array();
    }
    public function getTransaksiById($where, $table)
        {
    return $this->db->get_where($table, $where);
        }
    
}