<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
    }

    public function index()
    {
        // var_dump($this->session->flashdata('error'));
        // die;
        $this->load->view('auth');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('error', $errors);
            redirect('auth');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Auth_Model->get_user($username);

            if ($user) {
                if (password_verify($password, $user->password)) {
                    $sess_array = [
                        'id'    => $user->id,
                        'username'  => $user->username,
                        'logged_in' => TRUE
                    ];
                    $this->session->set_userdata($sess_array);
                    $this->session->set_flashdata('login', 'Login berhasil selamat datang ' . $user->username);
                    redirect('');
                } else {
                    $this->session->set_flashdata('error', 'Username atau password salah');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('auth');
            }
        }
    }

    public  function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Logout berhasil');

        redirect('auth');
    }
}
