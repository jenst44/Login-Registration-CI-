<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler(true);
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function create()
	{
		$this->load->model('user');
		if($this->user->validate_reg($this->input->post()) == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
		}
		else
		{
			$this->user->create($this->input->post());
			$user = $this->user->find_user($this->input->post());
			$this->session->set_userdata('user_info', $user);
			redirect('/home');
		}
		redirect('/');
	}

	public function login()
	{
		$this->load->model('user');
		if($this->user->validate_login($this->input->post) == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
		}
		$user = $this->user->find_user($this->input->post());
		if($user)
		{
			$this->session->set_userdata('user_info', $user);
			redirect('/home');
		}
		redirect('/');
	}

	public function home()
	{
		$this->load->view('homepage', array('success' => $this->session->userdata('success')));
	}
}
