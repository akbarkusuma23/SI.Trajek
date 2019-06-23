<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function getBarang()
    {
        $query = "SELECT id_barang,tbkategori.kategori,nopol,merk,jenis,gambar,kapasitas,tahun,warna,harga,tbbarang.status 
        FROM tbbarang JOIN tbkategori ON tbbarang.id_kategori = tbkategori.id_kategori";

        return $this->db->query($query)->result_array();
    }
    public function getBarangById($where, $table)
    {
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->join('tbkategori', 'tbkategori.id_kategori=tbbarang.id_kategori');
        $this->db->where_in('id_barang', $where);
        return $this->db->get();
    }
    public function cariDataBarang()
    {
        $keyword =  $_POST['keyword'];
        $query = "SELECT * FROM tbbarang join tbkategori on tbbarang.id_kategori = tbkategori.id_kategori 
        WHERE kategori LIKE '%$keyword%'";
        return  $this->db->query($query)->result_array();
    }
}
