<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karyawan/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_karyawan', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat Rumah', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_karyawan = $this->input->post('nama_karyawan');
            $email = $this->input->post('email');
            $no_telepon = $this->input->post('no_telepon');
            $alamat = $this->input->post('alamat');

            //cek jika ada foto yang akan diupload
            $upload_image = $_FILES['foto']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['karyawan']['foto'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama_karyawan', $nama_karyawan);
            $this->db->set('no_telepon', $no_telepon);
            $this->db->set('alamat', $alamat);
            $this->db->where('email', $email);
            $this->db->update('tbkaryawan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
            redirect('karyawan');
        }
    }
    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Password Sekarang', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Konfirmasi Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['karyawan']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong current password!</div>');
                redirect('karyawan/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> New password cannot be the same as current password!</div>');
                    redirect('karyawan/changepassword');
                } else {
                    //password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tbkaryawan');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password changed!</div>');
                    redirect('karyawan/changepassword');
                }
            }
        }
    }
    public function pelanggan()
    {
        $data['title'] = 'Pelanggan';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Pelanggan_model', 'pelanggan');
        $data['plg'] = $this->pelanggan->getPelanggan();

        $data['jabatan'] = $this->db->get('tbjabatan')->result_array();

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required|trim');
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
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/pelanggan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'nama_pelanggan' => htmlspecialchars($this->input->post('nama_pelanggan', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'foto' => 'default1.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_jabatan' => 3,
                'aktif' => 1,
            ];
            $this->db->insert('tbpelanggan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! you account has been created!</div>');
            redirect('karyawan/pelanggan');
        }
    }

    public function editpelanggan($nik)
    {
        $data['title'] = "Edit Pelanggan";
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pelanggan_model', 'pelanggan');
        $where = array('nik' => $nik);
        $datas['pelanggan'] = $this->pelanggan->getPelangganByNik($where, 'tbpelanggan')->result();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/editPelanggan', $datas);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
            redirect('karyawan/pelanggan');
        }
    }
    public function update_pelanggan()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'email' => $this->input->post('email'),
            'no_telepon' => $this->input->post('no_telepon'),
            'alamat' => $this->input->post('alamat'),
        ];
        $where = array('nik' => $this->input->post('nik'));
        $this->db->where($where);
        $this->db->update('tbpelanggan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
        redirect('karyawan/pelanggan');
    }
    public function hapuspelanggan($where)
    {
        $this->db->delete('tbpelanggan', array("nik" => $where));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been DELETED!!!!</div>');
        redirect('karyawan/pelanggan');
    }
    public function pemesanan()
    {
        $data['title'] = 'Pemesanan';
        $data['karyawan'] = $this->db->get_where('tbkaryawan', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Pemesanan_model', 'pemesanan');
        $data['pemesanan'] = $this->pemesanan->getPemesanan();
        $data['pelanggan'] = $this->db->get('tbpelanggan')->result_array();
        $data['barang'] = $this->db->get('tbbarang')->result_array();
        $data['dp'] = $this->db->get('tbdp')->result_array();

        $this->form_validation->set_rules('id_pemesanan', 'Id Pemesanan', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');
        $this->form_validation->set_rules('tanggal_pesan', 'Tanggal Pesan', 'required|trim');
        $this->form_validation->set_rules('tanggal_pengambilan', 'Tanggal Pengembalian', 'required|trim');
        $this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required|trim|');
        $this->form_validation->set_rules('tipe_pembayaran', 'Tipe Pembayaran', 'required|trim');
        $this->form_validation->set_rules('jumlah_total', 'Jumlah Total', 'required|trim');
        $this->form_validation->set_rules('id_dp', 'Id Dp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('karyawan/pemesanan', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'nama_pelanggan' => htmlspecialchars($this->input->post('nama_pelanggan', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'foto' => 'default1.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_jabatan' => 3,
                'aktif' => 1,
            ];
            $this->db->insert('tbpelanggan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! you account has been created!</div>');
            redirect('karyawan/pelanggan');
        }
    }
}
