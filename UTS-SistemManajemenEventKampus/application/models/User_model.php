<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function login($username, $password) {
    $user = $this->db->get_where('users', ['username' => $username])->row();
    if ($user && password_verify($password, $user->password)) {
      return $user;
    }
    return null;
  }

  public function get_by_id($id) {
    return $this->db->get_where('users', ['id' => $id])->row();
  }

  public function get_all() {
    return $this->db->get('users')->result();
  }

  public function sudah_terdaftar($user_id, $event_id) {
    $this->db->where('user_id', $user_id);
    $this->db->where('event_id', $event_id);
    return $this->db->get('event_user')->num_rows() > 0;
  }
}
