<?php
class Event_model extends CI_Model {
  public function getAll() {
    return $this->db->get('events')->result();
  }

  public function getById($id) {
    return $this->db->get_where('events', ['id' => $id])->row();
  }

  public function insert($data) {
    $this->db->insert('events', $data);
  }

  public function update($id, $data) {
    $this->db->where('id', $id)->update('events', $data);
  }

  public function delete($id) {
    $this->db->delete('events', ['id' => $id]);
  }

  public function get_peserta($id_event) {
    $this->db->select('users.username, users.email, users.telepon');
    $this->db->from('event_user');
    $this->db->join('users', 'users.id = event_user.user_id');
    $this->db->where('event_user.event_id', $id_event);
    return $this->db->get()->result();
  }
}
