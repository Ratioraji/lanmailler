<?php
class Login extends CI_Controller {

    //$this->load->library('session');
	    
    public function login_page(){
       
        //$this->load->library('session');
	   if($this->session->userdata('is_logged_in')){
			
           
           redirect('message-inbox');
			
		}else{
        	
			$this->load->view('pages/login');
			
        }
	}
    public function sign_out() {
	
		// Logs user signout to system logger 
		
        
        session_destroy();
        
        
		
		redirect('login') ;
	
	}
    public function login_process(){
        
        $this->load->model('user_tasks');

		$username = $this->input->post('uemail');
		$password = md5($this->input->post('passd')) ;
        
       // $adminus = ;
        //$adminpas = ;

		$is_reg_user = $this->user_tasks->login_user($username,$password);

		if($is_reg_user)
		{

			//save user session data : done by Ci session library by deafault 
			
			// get user id of user from db to set when session is set to be able to get it later 
			
			$ses_data = array(
				'usern' => $username,
				'is_logged_in' => TRUE
			);
			$this->load->library('session'); 
			
			
			$this->session->set_userdata($ses_data);
			
			redirect('message-inbox');

		}
		else {

			//set a session of error to be used on the login page as error indacator
			$this->session->set_flashdata('error_Code','00LOGIN');

			redirect('login');
		}
        
    }
}



/*
class Login extends CI_Controller {

	public function login()
	{
	   if($this->session->userdata('is_logged_in')){
			
			
				redirect('admin/dashboard');
			
		}else{
        	
			$this->login() ;
			
        }
	}
    public function login_process(){
        
        $this->load->model('user_tasks');

		$username = $this->input->post('uemail');
		$password = $this->hash_password($this->input->post('passd')) ;


		$is_reg_user = $this->user_tasks->login_user($username,$password);

		if($is_reg_user)
		{

			//save user session data : done by Ci session library by deafault 
			
			$ses_data = array(
				'usern' => $username,
				'is_logged_in' => TRUE
			);
			$this->load->library('session'); 
			
			
			$this->session->set_userdata($ses_data);
			
			

			redirect('admin/dashboard');

		}
		else {

			//set a session of error to be used on the login page as error indacator
			$this->session->set_flashdata('error_Code','00LOGIN');

			redirect('admin/index');
		}
        
    }
}*/