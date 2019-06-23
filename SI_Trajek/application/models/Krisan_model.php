<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krisan_model extends CI_Model
{
    public function getKrisan()
    {
        $query = "SELECT tbpelanggan.nik,tbkritiksaran.kritik_saran FROM tbkritiksaran JOIN tbpelanggan
        ON tbkritiksaran.nik = tbpelanggan.nik";

        return $this->db->query($query)->result_array();
    }
}
