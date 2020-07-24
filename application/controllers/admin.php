<?php

class Admin extends MY_Controller{
	public function index(){
		$this->load->view('login/login');
	}

	public function login(){
		$uname=$this->input->post('uname');
		$password=$this->input->post('password');

		$this->load->model('loginmodel');
		$id=$this->loginmodel->isvalidate($uname,$password);
		if($id){
				
			$this->session->set_userdata('id',$id);
			// return redirect('admin/welcome');
			$this->load->view('site/dash');
		}else{
			$this->session->set_flashdata('Login_failed','Invalid username/password!!!');
			return redirect('admin');
			// echo "can`t log you in";
		}
	}
}

?>