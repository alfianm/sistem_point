<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goadmin extends CI_Controller {

	 public function index()
    {
        // if ($this->session->userdata('username')) {
        //     redirect('p-admin/dashboard','refresh');
        // }

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
        $user = $this->db->get_where('tbl_user', ['username'=> $username])->row_array();
        if ($user) {
            if($user['is_actived'] == 1 ) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'username' => $user['username'],
                        'image' => $user['image']
                    ];
                    $this->session->set_userdata($data);
                    redirect('p-admin/dashboard');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukkan salah!!</div>');
                    redirect('goadmin');
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum aktif, silahkan hubungi admin!!</div>');
            redirect('goadmin');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username yang anda masukkan salah!!!</div>');
            redirect('goadmin');
        }
    }
}
