<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('karyawan');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya success
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $karyawan = $this->db->get_where('tbkaryawan', ['email' => $email])->row_array();

        //jika karyawannya ada
        if ($karyawan) {
            //jika karyawannya aktif
            if ($karyawan['aktif'] == 1) {
                //cek password
                if (password_verify($password, $karyawan['password'])) {
                    $data = [
                        'email' => $karyawan['email'],
                        'id_jabatan' => $karyawan['id_jabatan']
                    ];
                    $this->session->set_userdata($data);
                    if ($karyawan['id_jabatan'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('karyawan');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('karyawan');
        }

        $this->form_validation->set_rules('nip', 'Nip', 'required|trim');
        $this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbkaryawan.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'nama_karyawan' => htmlspecialchars($this->input->post('nama_karyawan', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'foto' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_jabatan' => 2,
                'aktif' => 1,
            ];
            $this->db->insert('tbkaryawan', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! you account has been created. Please Login!</div>');
            redirect('auth');
        }
    }

    // private function _sendEmail()
    // {
    //     $config = [
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_user' => 'sanawiyah140678@gmail.com',
    //         'smtp_pass' => '1234567890',
    //         'smtp_port' => 465,
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'newline'   => "\r\n"
    //     ];

    //     $this->load->library('email', $config);
    //     $this->email->initialize($config);

    //     $this->email->from('sanawiyah140678@gmail.com', 'sanawiyah 14');
    //     $this->email->to('khotimahkhotim15@gmail.com');
    //     $this->email->subject('Testing');
    //     $this->email->message('Helo  World');

    //     if ($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_jabatan');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
