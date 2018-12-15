<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends Public_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->library('auth');
    if ($this->auth->is_logged_in()) {
      redirect('dashboard');
    }
  }

  public function index()
  {
    $data['type'] = 'success';
    $this->load->view('public/login', $data);
  }

  public function process()
  {
    $data = [];
    if ($this->form_validate()) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      if ($this->auth->logged_in($username, $password)) {
        $data['type'] = 'success';
        redirect('dashboard');
      }
      else {
        $data['type'] = "error";
        $data['message'] = 'Username and/or password are not valid';
      }
    }
    else {
      $data['type'] = 'error';
      $data['message'] = validation_errors();
    }
    $this->load->view('public/login', $data);
  }

  public function form_validate()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'username', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_error_delimiters('<li>', '</li>');
    return $this->form_validation->run();
  }
} 

