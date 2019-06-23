<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    public function index()
    {
        echo 'beasiswa api';
    }

   function index_get() {
        $id =array(
            'username' => $this->get('username'),
            'password' => $this->get('password')) ;
        if ($id == null) {
            $kontak = $this->db->get('karyawan')->result();
        } else {
            $this->db->where('username', $id);
            $kontak = $this->db->get('karyawan')->result();
        }
        $this->response($kontak, 200);
    }
}