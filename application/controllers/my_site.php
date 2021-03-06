<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Site extends CI_Controller {

    public function index(){

        $this->home();
    }
	public function login(){
		$this->load->view("login");
	}
	public function login_validation(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		if($this->form_validation->run()){
			redirect(main/members);
		}
		else {$this->load->view("login");}
	}
	
    public function home(){
        $this->myStuff();
        $this->getValues();
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("site_content");
        $this->load->view("site_footer");
    }
    public function about(){
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("site_content_about");
        $this->load->view("site_footer");
    }

    public function myStuff(){
        $this->load->model("get_db");

        $results = ($this->get_db->getAll());

        foreach ($results as $row){
            echo $row->id;
            echo $row->name;
            echo '<br/>';
        }
    }

    public function getValues(){
        $this->load->model("get_db");
        $sss = array(
            'name' => 'New'
        );
        $this->get_db->myInsert($sss);
        echo "good";
    }


}
