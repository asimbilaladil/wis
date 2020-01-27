<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('AdminModel');
        
      
    }	
	   public function index()
    {
        print_r("Welcome to Api Server");
    }



    public function getHotel() {

      $data['hotel'] = $this->AdminModel->getAllfromTable('hotel');
      echo json_encode($data['hotel']);

    }

    public function getPackage() {

      $data['package'] = $this->AdminModel->getAllfromTable('package');
      echo json_encode($data['package']);

    }    
    public function getHotelByID() {

      $id = $this->input->get('id');
      $data['hotel'] = $this->AdminModel->getfromTableById('hotel', $id);
      echo json_encode($data['hotel']);

    }  
    public function getPackageByID() {

      $id = $this->input->get('id');
      $data['package'] = $this->AdminModel->getfromTableById('package', $id);
      echo json_encode($data['package']);

    }      
        

   	
}
