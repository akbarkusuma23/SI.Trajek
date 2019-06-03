<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('pelanggan/beranda');
    }

    public function about()
    {
        # code...
        $this->load->view('pelanggan/about');
    }

    public function viewbarang($idbarang)
    {
        $this->load->model('Barang_model', 'barang');
        $data['barang'] = $this->barang->getBarangById($idbarang,'tbbarang')->result_array();
        $this->load->view('pelanggan/view-barang',$data);
    }

    public function listbarang()
    {
        # code...
        $this->load->model('Barang_model', 'barang');
        $data['barang'] = $this->barang->getBarang();
        $this->load->view('pelanggan/list-barang',$data);
    }

    public function contact()
    {
        # code...
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('pelanggan/contact');
        } else {
            //validasinya success
            $this->_kritiksaran();
        }
    }
    public function _kritiksaran()
    {
        # code...
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        $data = [
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan
        ];
        $this->db->insert('tbkritiksaran', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Send has been Done!</div>');
        redirect('index/contact');
    }

    public function register()
    {
        # code...
        
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('nomor','Nomor HP','trim|required');
        $this->form_validation->set_rules('nik','NIK','trim|required');
        $this->form_validation->set_rules('alamat','Alamat','trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('pelanggan/register');
        } else {
            //validasinya success
            $this->_register();
        }
    }
    public function _register()
    {
        $config['upload_path'] = './assets/img/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']     = '2048';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            if($this->upload->data('max_size')>2048){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> FILE MORE BIG !</div>');
            }else{$image = $this->upload->data('file_name');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nomor = $this->input->post('nomor');
        $nik = $this->input->post('nik');
        $alamat = $this->input->post('alamat');

        $data = [
            'nik' => $nik,
            'nama_pelanggan' => $nama,
            'email' => $email,
            'no_telepon' => $nomor,
            'alamat' => $alamat,
            'foto' => $image,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'id_jabatan' => 3,
            'aktif' => 1,
            ];
        $this->db->insert('tbpelanggan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Register has been Done!</div>');
        redirect('index/register');
        }
            
        }
    }

    public function cari()
    {
        # code...
        $this->load->model('Cari_model','cari');
        $data['cari'] = $this->cari->cari();
        $this->load->view('pelanggan/barang-cari',$data);
    }
}
?>