<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index() {
      $this->load->view('header');
      $this->load->view('contact');
      $this->load->view('footer');
	}
	
	public function email() {
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$email = $this->input->post('email');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		
		$this->load->library('email');
		$this->email->from($email, $fname . ' ' . $lname);
		$this->email->to('m.moazzam12@gmail.com');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
}
