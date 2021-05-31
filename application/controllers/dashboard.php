<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MY_Controller {

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
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
		parent::__construct();
	}

	public function home()
	{
        $userid = $this->session->userdata('id');
		$this->load->model('CRUD');
        $result['data'] = $this->CRUD->selectdata($userid);
        $this->load->view('home_view',$result);
	}

	public function add()
	{
		$data['userid'] = $this->session->userdata('id');
		$this->load->view('add_view');
		if($this->input->post('save'))
		{
			$data['company'] = $this->input->post('Company');
			$data['Buy'] = $this->input->post('Buy');
			$data['Sell'] = $this->input->post('Sell');
			$data['Shares'] = $this->input->post('Shares');

			$this->load->model('CRUD');
	        $result = $this->CRUD->savedata($data);
			if($result==true)
			{
				redirect('dashboard/home');
			}else{
				echo "failed to save";
			}
		}
	}

	
	public function delete()
	{
		$id=$this->input->get('id');
		if($id)
		{
			$this->load->model('CRUD');
			$result = $this->CRUD->deletedata($id);
			if($result==true)
			{
				redirect('dashboard/home');							
			}
			else
			{
				echo "unable to delete";
			}
		}
	}

	public function update()
	{
		$shareid = $this->input->get('id');
		$this->load->model('CRUD');
		$result['data'] = $this->CRUD->displaydata($shareid);
		$this->load->view('update_view',$result);
		if($this->input->post('update'))
		{
			$data['shareid'] = $this->input->post('Shareid');
			$data['company'] = $this->input->post('Company');
			$data['buy'] = $this->input->post('Buy');
			$data['sell'] = $this->input->post('Sell');
			$data['shares'] = $this->input->post('Shares');

			$this->load->model('CRUD');
	        $result = $this->CRUD->updatedata($data);
			if($result==true)
			{
				redirect('dashboard/home');
			}else{
				echo "failed to save";
			}			
		}

	}

}
