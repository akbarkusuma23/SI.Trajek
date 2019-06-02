<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
    public function getPelanggan()
    {
        $query = "SELECT nik,nama_pelanggan,email,no_telepon,alamat,foto,tbjabatan.jabatan,tanggal_buat FROM tbpelanggan JOIN tbjabatan
        ON tbpelanggan.id_jabatan = tbjabatan.id_jabatan";

        return $this->db->query($query)->result_array();
    }
    public function getPelangganByNik($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function cariDataPelanggan()
    {
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbpelanggan JOIN tbjabatan ON tbpelanggan.id_jabatan = tbjabatan.id_jabatan
         WHERE nama_pelanggan LIKE '%$keyword%' and jabatan = 'pelanggan'";
        return  $this->db->query($query)->result_array();
    }
}
