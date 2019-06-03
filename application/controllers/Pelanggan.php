<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
        $data['karyawan'] = $this->db->get_where('tbpelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');

	}
	public function profil()
	{
		# code...
		$data['title'] = 'My Profile';
        $data['karyawan'] = $this->db->get_where('tbpelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karyawan/index', $data);
	}
	public function login()
	{
		$email = $this->input->post('email');
        $password = $this->input->post('password');

        $karyawan = $this->db->get_where('tbpelanggan', ['email' => $email])->row_array();

        //jika karyawannya ada
        if ($karyawan) {
            //jika karyawannya aktif
            if ($karyawan['aktif'] == 1) {
                //cek password
                if (password_verify($password, $karyawan['password'])) {
                    $data = [
                        'email' => $karyawan['email'],
                        'id_jabatan' => $karyawan['id_jabatan'],
                        'nik' => $karyawan['nik']
                    ];
                    $this->session->set_userdata($data);
                    if ($karyawan['id_jabatan'] == 3) {
                        redirect('index');
                    } else {
                        redirect('index');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('index');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('index');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
            redirect('index');
        }
	}

}
?>