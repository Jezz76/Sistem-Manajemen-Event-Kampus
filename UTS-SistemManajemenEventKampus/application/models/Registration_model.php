<?php
class Registration_model extends CI_Model {
  public function register($user_id, $event_id) {
    $this->db->insert('registrations', [
      'user_id' => $user_id,
      'event_id' => $event_id
    ]);
  }

  public function get_by_event($event_id) {
    $this->db->select('users.username');
    $this->db->from('registrations');
    $this->db->join('users', 'users.id = registrations.user_id');
    $this->db->where('event_id', $event_id);
    return $this->db->get()->result();
  }
}
