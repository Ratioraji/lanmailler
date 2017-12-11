<?php
class Register extends CI_Controller {

	public function register_page()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
			
			
				redirect('message-inbox');
			
		}else{
        	
			$this->load->view('pages/register') ;
			
        }
	}
    public function register_process()
	{
	
        $this->load->library('form_validation'); 

		$this->form_validation->set_rules('user_name','Username','trim|required|min_length[4]') ;
		$this->form_validation->set_rules('first_name','First Name','trim|required') ;
		$this->form_validation->set_rules('last_name','Last Name','trim|required') ;
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email') ;
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[4]') ;
		$this->form_validation->set_rules('pass2','Retype password ','trim|required|matches[pass]') ;
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning"><a class="close" data-dismiss="alert">×</a><strong><span class="fa fa-exclamation"></span>', '</strong></div>');
		
		$user_name = $this->input->post('user_name');
		$email = $this->input->post('email');
		
		
		
		if($this->form_validation->run() == FALSE )
		{

			$this->load->view('pages/register');
			
			

		}
		else {

			$file_upld = 'userimg-';

			$config['upload_path']          = './upload/user_image';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['file_name']           =  $file_upld.rand(100,100000);
			
			
			$this->load->library('upload', $config);

			$upload_fl = $this->upload->do_upload('userimg') ;
			
			$flname = $this->upload->data('file_name'); // name of the file to be saved to db

			if ( !$upload_fl )
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('pages/register', $error);
			}
			else
			{
					$this->load->model('user_tasks'); // load model that perform task or registering users 
					
					
					$reg_user = $this->user_tasks->register_user($flname) ;
					if($reg_user)
					{
						if($reg_user === '000')
						{
							
							$data['upsuc'] = '<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><strong><span class="fa fa-exclamation"></span>Username or email Already Exist</strong></div>' ;
						
						}
						else {
							
							$data['upsuc']  = '<div class="alert alert-success"><a class="close" data-dismiss="alert">×</a><strong><span class="fa fa-check"></span>Registeration successfull</strong></div>' ;
						
							
						}
						
						$this->load->view('pages/register' , $data);

					}
					else{
							
						$data['upsuc'] = '<div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><strong><span class="fa fa-exclamation"></span>Registeration not successfull</strong></div>';
						
						$this->load->view('pages/register' , $data);

					}
					
			}
			

		}
	}
    
    



}


     
