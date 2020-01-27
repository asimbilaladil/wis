<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('AdminModel');
        $this->load->library('session');

        if ( empty($_SESSION['id']) ) {
            redirect('Login/');
        }

      
    }	
	   public function index()
    {
        $data['hotel'] = $this->AdminModel->getAllfromTable('hotel');
        $this->loadView('hotel/index', $data);
    }

    public function add()
    {
          $this->loadView('hotel/add', null);
    }
    public function delete(){
        $id = $this->input->get('id');
        $this->AdminModel->delete('hotel', $id);
        redirect('Hotel');    
    }    
    public function save(){
        if($this->input->post()) {

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $description = $this->input->post('description');
            $category =$this->input->post('category');
            $contact =$this->input->post('contact');
            $admin_id =$this->session->userdata('admin_id');



          // # File uploading configuration
           $upload_path        = './uploads/';
           $config['upload_path'] = $upload_path;
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $config['encrypt_name'] = true;
           $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

               $upload_detail = $this->upload->data();
               $filePath = $upload_detail['file_name'];
               $data = array(
                  'name' => $name,
                  'email' =>  $email,
                  'address' => $address,
                  'description' => $description,
                  'admin_id' => $admin_id,
                  'category' => $category,
                  'contact' => $contact,
                  'image' => $filePath
               );

               $this->AdminModel->insert('hotel', $data);
               redirect('Hotel');

           } else {
              echo $error = array('error' => $this->upload->display_errors());
            }

        }


    }
    public function view(){
        $id = $this->input->get('id');
        $data['hotel'] = $this->AdminModel->getfromTableById('hotel', $id);

        $this->loadView('hotel/view', $data);


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
