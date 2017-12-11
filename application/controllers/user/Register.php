<?php
class register extends CI_Controller {
    
	public function register()
	{
        // $this->load->library('session');
        
	   /*if($this->session->userdata('is_logged_in')){
			
			
				redirect('admin/dashboard');
			
		}else{
        	
			$this->load-view('') ;
			
        }*/
	}
    public function register_process(){
        
        $this->load->library('form_validation'); 

		$this->form_validation->set_rules('user_name','Username','trim|required|min_length[4]') ;
		$this->form_validation->set_rules('first_name','First Name','trim|required') ;
		$this->form_validation->set_rules('last_name','Last Name','trim|required') ;
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email') ;
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning"><a class="close" data-dismiss="alert">×</a><strong><span class="fa fa-exclamation"></span>', '</strong></div>');
		
		$user_name = $this->input->post('user_name');
		$email = $this->input->post('email');
		
		
		
		

		if($this->form_validation->run() == FALSE )
		{

			$this->load->view('pages/register');


		}
		else {

			//$this->load->model('user_tasks');
			$this->load->model('user_tasks');

			if($reg_user = $this->user_tasks->register_user())
			{
				 	
				
				$config['mailtype'] = 'html';

				//$this->email->initialize($config);
                
				$this->load->library('email',$config);
				
				
				
				
				
				
				
				$this->email->to($email);
				$this->email->from('noreply@paradigmfinance.com');
				$this->email->subject('Welcome  '.$user_name.'');
				$this->email->message('<p>Hi '.$user_name. '</p>' . '&nbsp <p>Thank You for registering we urge you to Login as soon as possible.</p><a href="'.  base_url() .'/verify/'. md5($email).'" >Activate<\a>');
				$r = $this->email->send();
				
				if (!$r){
					
					$this->email->print_debugger();
				
				}
				else {
				
					echo 'email sent' ;
				
				
				}
				
				

				$this->load->view('pages/register-email-sent');

			}
			else{

				
				$this->load->view('pages/register');

			}
			

		}
		
    }
}