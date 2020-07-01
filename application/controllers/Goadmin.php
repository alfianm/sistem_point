<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goadmin extends CI_Controller {

	 public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false ) {
            $data['title'] = "Login";
            $this->load->view('goadmin/login', $data);
        }else{
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('t_user', ['username'=> $username])->row_array();
        if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('backend/dashboard');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!!</div>');
                    redirect('goadmin');
                }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username yang anda masukkan salah!!!</div>');
            redirect('goadmin');
        }
    }

    public function register()
    {
        $data['title'] = "Register";
        $this->load->view('goadmin/register', $data);
    }

    public function addcustomer()
    {
        $post = $this->input->post();

        $customer = [
            "nama" => $post['nama'],
            "alamat" => $post['alamat'],
            "no_hp" => $post['no']
        ];

        $this->db->insert('t_customer', $customer);
        $id = $this->db->insert_id();

        $data = [
            "id_customer" => $id,
            "username" => $post['username'],
            "password" => password_hash($post['password'], PASSWORD_DEFAULT),
            "level" => 'customer'
        ];

        $success = $this->global->insert('t_user', $data);
        if ($success) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat registrasi berhasil. Silahkan Sign In.</div>');
            redirect('goadmin/register');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal melakukan registrasi, periksa datanya lagi.</div>');
            redirect('goadmin/register');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_customer');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');;

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terimakasih. anda berhasil logout.</div>');
        redirect('goadmin');
    }
}
