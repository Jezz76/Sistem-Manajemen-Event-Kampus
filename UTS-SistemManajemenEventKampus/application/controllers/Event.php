<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

  public function __construct() {
    parent::__construct();
    if (!$this->session->userdata('user_id')) {
      redirect('auth/login');
    }
    $this->load->model('Event_model');
    $this->load->model('User_model');
  }

  public function index() {
    $user_id = $this->session->userdata('user_id');
    $data['user'] = $this->User_model->get_by_id($user_id);
    $events = $this->Event_model->getAll();

    foreach ($events as &$event) {
      $check = $this->db->get_where('event_user', [
        'user_id' => $user_id,
        'event_id' => $event->id
      ])->row();

      $event->sudah_daftar = $check ? true : false;
    }

    $data['events'] = $events;

    $this->load->view('templates/header', $data);
    $this->load->view('event/index', $data);
    $this->load->view('templates/footer');
  }

  public function create() {
    $user = $this->User_model->get_by_id($this->session->userdata('user_id'));
    if ($user->role !== 'admin') show_error('Hanya admin yang dapat membuat event.', 403);

    if ($this->input->post()) {
      $data = [
        'nama' => $this->input->post('nama'),
        'tempat' => $this->input->post('tempat'),
        'waktu' => $this->input->post('waktu')
      ];
      $this->Event_model->insert($data);
      redirect('event');
    }

    $this->load->view('templates/header');
    $this->load->view('event/create');
    $this->load->view('templates/footer');
  }

  public function edit($id) {
    $user = $this->User_model->get_by_id($this->session->userdata('user_id'));
    if ($user->role !== 'admin') show_error('Hanya admin yang dapat mengedit event.', 403);

    $data['event'] = $this->Event_model->getById($id);

    if ($this->input->post()) {
      $update = [
        'nama' => $this->input->post('nama'),
        'tempat' => $this->input->post('tempat'),
        'waktu' => $this->input->post('waktu')
      ];
      $this->Event_model->update($id, $update);
      redirect('event');
    }

    $this->load->view('templates/header');
    $this->load->view('event/edit', $data);
    $this->load->view('templates/footer');
  }

  public function delete($id) {
    $user = $this->User_model->get_by_id($this->session->userdata('user_id'));
    if ($user->role !== 'admin') show_error('Hanya admin yang dapat menghapus event.', 403);

    $this->Event_model->delete($id);
    redirect('event');
  }

  public function daftar($id_event) {
    $user_id = $this->session->userdata('user_id');
    if (!$this->User_model->sudah_terdaftar($user_id, $id_event)) {
      $this->db->insert('event_user', ['user_id' => $user_id, 'event_id' => $id_event]);
    }
    redirect('event');
  }

  public function batal($id_event) {
    $user_id = $this->session->userdata('user_id');
    $this->db->where(['user_id' => $user_id, 'event_id' => $id_event])->delete('event_user');
    redirect('event');
  }

  public function peserta($id_event) {
    $user = $this->User_model->get_by_id($this->session->userdata('user_id'));
    if ($user->role !== 'admin') show_error('Hanya admin yang dapat melihat peserta.', 403);

    $data['peserta'] = $this->Event_model->get_peserta($id_event);
    $this->load->view('templates/header');
    $this->load->view('event/peserta', $data);
    $this->load->view('templates/footer');
  }
}
