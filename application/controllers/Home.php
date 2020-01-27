<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   public function __construct() {
      parent::__construct();

      $this->load->model('AdminModel');

   }

   public function index() {

      $this->load->view('header');
      $this->load->view('home');
      $this->load->view('footer');
   }

   public function search($cat) {


         $result['result'] = $this->AdminModel->getAllfromTableByCat($cat);

      $this->load->view('header');

      $this->load->view('list', $result);
      $this->load->view('footer');
   }

   public function searchList() {

         $keyword = $this->input->get_post('search');
         $result['result'] = $this->AdminModel->getAllfromTableBySearch($keyword);

      $this->load->view('header');

      $this->load->view('list', $result);
      $this->load->view('footer');
   }

   public function detail($id) {


      $this->load->view('header');
      $result['result'] = $this->AdminModel->getTableById( $id);
      $this->load->view('post', $result);
      $this->load->view('footer');
   }

   public function package() {

      $data['result'] = $this->AdminModel->getAllfromTable('package');
      $this->load->view('header');
      $this->load->view('package', $data);
      $this->load->view('footer');
   }

   public function explore() {

      $this->load->view('header');
      $this->load->view('explore');
      $this->load->view('footer');
   }
}
