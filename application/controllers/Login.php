<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login_view');
	}
	
	public function signin()
	{
        $this->load->library("form_validation");
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('pass','password','required');
        if($this->form_validation->run()){
            $email=$this->input->post('email');
            $password=$this->input->post('pass');
            $this->load->model('loginmodel');
            $id = $this->loginmodel->isvalidate($email,$password);
            if($id){
                    $this->load->library('session');
                    $this->session->set_userdata('id',$id);
                    return redirect('dashboard/home');
            }else{
                echo "detail not matched";
            }
        }else{
            $this->load->view('login_view');
        }
    }


	public function signup()
	{
		$this->load->view('signup_view');
		if($this->input->post('signin')){
			$this->load->library("form_validation");
	        $this->form_validation->set_rules('email','email','required|valid_email');
    	    $this->form_validation->set_rules('pass','password','required');
			if($this->form_validation->run())
			{
				$data['name']=$this->input->post('name');
				$data['email']=$this->input->post('email');
            	$data['password']=$this->input->post('pass');
				$this->load->model('loginmodel');
				$result = $this->loginmodel->savedata($data);
        	    if($result)
				{
					redirect('dashboard/home');
	            }else
				{
    	            echo "Unable to create";
        	    }
			}else
			{
				echo "Please enter the valid details";
			}
		}
	}
}
