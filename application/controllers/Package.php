<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('AdminModel');
        $this->load->library('session');

        if ( empty($_SESSION['id']) ) {
            redirect('Login/');
        }
        
      
    }	
	     
    public function index() {
        $data['package'] = $this->AdminModel->getAllfromTable('package');
        $this->loadView('package/index', $data);
    }

    public function add() {
          $this->loadView('package/add', null);
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->AdminModel->delete('package', $id);
        redirect('Package');    
    }    
    public function save(){
        if($this->input->post()) {

            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $startTime = $this->input->post('startTime');
            $endTime = $this->input->post('endTime');
            $language = $this->input->post('language');
            $stops =$this->input->post('stops');
            $places =$this->input->post('places');
            $description =$this->input->post('description');
            $admin_id =$this->session->userdata('admin_id');



          // # File uploading configuration
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            $this->upload->do_upload('image');

            if ($this->upload->do_upload('image')) {

               $upload_detail = $this->upload->data();
               $filePath = 'uploads/'.$upload_detail['file_name'];
               $data = array(
                  'name' => $name,
                  'price' =>  $price,
                  'start_time' => $startTime,
                  'end_time' => $endTime,
                  'description' => $description,
                  'language' => $language,
                  'stops' => $stops,
                  'places' => $places,
                  'image' => $filePath
               );

               $this->AdminModel->insert('package', $data);

            } else {
                $error = array('error' => $this->upload->display_errors());
            }

        }
        redirect('Package');        
    }
    public function view(){
        $id = $this->input->get('id');
        $data['package'] = $this->AdminModel->getfromTableById('package', $id);

        $this->loadView('package/view', $data);


    } 


    /**
     * Load view 
     * @param 1 : view name
     * @param 2 : data to be render on view. If no data pass null
     */
    function loadView($view, $data) {
        //error_reporting(0);
        $this->load->view('common/header');
        $this->load->view('common/sidebar');

        $this->load->view($view, array('data' => $data));
        $this->load->view('common/footer');

    }   	
}
