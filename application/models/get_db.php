<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Get_db extends CI_Controller {

    public function getAll(){
        $query = $this->db->query("SELECT * FROM test");
        return $query->result();
    }
    public function myInsert($data){
        $this->db->insert("test", $data);
    }


}