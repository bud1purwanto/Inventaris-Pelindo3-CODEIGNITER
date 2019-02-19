<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		if($this->session->userdata('logged_in_admin') || $this->session->userdata('logged_in_user')){
			if ($this->session->userdata('logged_in_admin')) {
				$session_data = $this->session->userdata('logged_in_admin');
			} else {
				$session_data = $this->session->userdata('logged_in_user');
			}

			$data['id_user'] = $session_data['id_user'];
      $this->load->model('Inventaris_Model');
      $this->load->model('Kontrak_Model');
      $this->load->model('Peminjaman_Model');
      $this->load->model('User_Model');
		}else{
			$this->session->set_flashdata('login_lagi', 'Anda sudah logout, silahkan login lagi!');
			redirect('login','refresh');
		}
  }

  function index()
  {
    $title['title'] = 'Dashboard';
    $data=[
      'active_controller' => 'dashboard',
      'active_function' => 'index'
    ];
    $data['inventaris_list'] = $this->Inventaris_Model->getInventarisLimit();
    $data['hitungInventaris']=$this->Inventaris_Model->hitungInventaris();
    $data['kontrak_list'] = $this->Kontrak_Model->getKontrakLimit();
    $data['hitungKontrak']=$this->Kontrak_Model->hitungKontrak();
    $data['hitungPeminjaman']=$this->Peminjaman_Model->hitungPeminjaman();
    $this->load->view('global/01_header', $title);
    $this->load->view('global/_template', $data);
  }

  public function gantiPassword()
  {
    $data['title'] = "Ganti Password";
    
    $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|min_length[4]');
    $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|min_length[4]');
    $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password Baru', 'required|min_length[4]|matches[password_baru]');
    if ($this->form_validation->run()==FALSE) {
      $this->load->view('user/edit_password', $data);
    } else {
      $pass = $this->input->post('password_lama');
      $password = md5($pass);
      $getPassword = $this->User_Model->getPasswordtoChange();
      foreach ($getPassword as $key) 
      {
              $cocok = $key->password;
          }
          if ($password == $cocok) {
            $this->User_Model->updatePassword();
            $this->session->set_flashdata('password', 'Password Berhasil Diedit');
            redirect('dashboard', 'refresh');
          } else {
            $this->session->set_flashdata('password', 'Password Lama Salah!');
            $this->load->view('user/edit_password', $data);
          }
          
    }
  }
}
