<?php

if( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
 /**
     * Insert Method
     * @param tableName
     * @param dataObject
     */
    public function insert($tableName ,$data ){
        if ($this->db->insert($tableName, $data) ) {
            return $insert_id = $this->db->insert_id();
        }
        return false;
    }

    public function getAllfromTable( $tableName ) {
        $this->db->select('*');
        $this->db->from( $tableName );
        // $this->db->where( 'is_delete', 0 );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;        
    }



   public function getAllfromTableByCat( $cat ) {
      $this->db->select('*');
      $this->db->from( 'hotel' );
      $this->db->where( 'category', $cat);
      // $this->db->where( 'is_delete', 0 );
      $quary_result=$this->db->get();
      $result = $quary_result->result();
      return $result;
   }

   public function getAllfromTableBySearch( $search) {
      $this->db->select('*');
      $this->db->from( 'hotel' );
      $this->db->like( 'name', $search);
      $quary_result=$this->db->get();
      $result = $quary_result->result();
      return $result;
   }

   public function admin_login_check_info( $data ){
        $this->db->select('*');
        $this->db->from( 'admin' );
        $this->db->where( 'email', $data['email'] );
        $this->db->where( 'password', $data['password'] );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;  
    }

    public function delete($table, $id) {
    
        $this->db->where('id', $id);
        $this->db->delete($table);         

    }

    public function update($table, $id, $data) {
      
        $this->db->where('id', $id);
        $this->db->update($table, $data);

    }     

    public function getfromTableById( $tableName, $id ) {
        $this->db->select('*');
        $this->db->from( $tableName );
        $this->db->where( 'id', $id );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;        
    }

   public function getTableById(  $id ) {
      $query = $this->db->get_where('hotel',array('id'=>$id));
      return $query->num_rows() ? $query->row() : false;
   }
}