<?php
class Auth extends CI_Controller {

  public function login() {
    if ($this->input->post()) {
      $this->load->model('User_model');
      $user = $this->User_model->login(
        $this->input->post('username'),
        $this->input->post('password')
      );
      if ($user) {
        $this->session->set_userdata([
          'user_id' => $user->id,
          'username' => $user->username,
          'role' => $user->role,
          'logged_in' => TRUE
        ]);
        redirect('event');
      } else {
        $data['error'] = 'Username atau password salah.';
      }
    }
    $this->load->view('templates/header');
    $this->load->view('auth/login', isset($data) ? $data : []);
    $this->load->view('templates/footer');
  }

  public function register() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required');

    if ($this->form_validation->run() === TRUE) {
      $data = [
        'username' => $this->input->post('username'),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'email' => $this->input->post('email'),
        'telepon' => $this->input->post('telepon'),
        'role' => 'mahasiswa'
      ];
      $this->db->insert('users', $data);
      redirect('auth/login');
    }

    $this->load->view('templates/header');
    $this->load->view('auth/register');
    $this->load->view('templates/footer');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}
