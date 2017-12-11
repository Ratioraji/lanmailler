<?php
class Message extends CI_Controller {

	
	public function message_inbox()
	{
        
		
	   if($this->session->userdata('is_logged_in')){
			
			$this->load->model('user_tasks');
			$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
			$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
			$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
			$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
			$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
			
			$perPage = 15 ;
			
			$urisegment = 2 ;
				
			$page = $this->uri->segment($urisegment) ;
			
			$start = $page   ; 
			
			
			
			$data['inbox'] = $this->user_tasks->fetch_UserInbox1($perPage , $start);
			
			$data['users'] = $this->LoadUsers() ;
			
			
			$data['links'] = $this->addPagination('message-inbox' , $data['num_inbox_all'] , $perPage , $urisegment ) ; 
			
			$this->load->view('common/header') ;
			$this->load->view('common/sidebar', $data) ;
			$this->load->view('pages/user-inbox' , $data) ;
			$this->load->view('common/footer') ;
		
			
		}else{
        	
			
				redirect('login');
			
        }
	}
	public function message_compose()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
				
			$this->load->model('user_tasks');
			$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
			$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
			$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
			$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
			$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
			
			$data['inbox'] = $this->user_tasks->fetch_UserInbox();
					
				$data['users'] = $this->LoadUsers() ;
				
				
				
				$this->load->view('common/header') ;
				$this->load->view('common/sidebar', $data) ;
				$this->load->view('pages/user-message' , $data) ;
				$this->load->view('common/footer') ;
					
			
		}else{
        	
			
				redirect('login');
			
        }
	}
	public function message_sent()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
			$this->load->model('user_tasks');
			$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
			$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
			$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
			$data['num_sent_all'] = $this->user_tasks->sent_no() ;
			$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
			$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
			
			
			$data['users'] = $this->LoadUsers() ;
			
			$perPage = 15 ;
			
			$urisegment = 2 ;
				
			$page = $this->uri->segment($urisegment) ;
			
			$start = $page   ; 
			
			$data['sent'] = $this->user_tasks->fetch_UserSent($perPage , $start);
			$data['links'] = $this->addPagination('message-inbox' , $data['num_sent_all'] , $perPage , $urisegment ) ; 
			
			
			
			$data['inbox'] = $this->user_tasks->fetch_UserInbox1($perPage , $start);
					
				$this->load->view('common/header') ;
				$this->load->view('common/sidebar', $data) ;
				$this->load->view('pages/user-sent-messages',$data) ;
				$this->load->view('common/footer') ;
				
			
		}else{
        	
			
				redirect('login');
			
        }
	}
	public function message_view()
	{
        
		
	   if($this->session->userdata('is_logged_in')){
			$message_id = $this->uri->segment(2);
		
			$this->load->model('user_tasks') ;
			$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
			$data['num_inbox'] = $this->user_tasks->ReadMessage($message_id) ;
			$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
			$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
			$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
			
			$data['inbox'] = $this->user_tasks->fetch_UserInbox();
				
			$data['users'] = $this->LoadUsers() ;
				
			$data['message_content'] = $this->user_tasks->fetch_MessageContent($message_id) ;
			if(isset($data['message_content'] ))
			{
				if(count($data['message_content']) > 0)
				{
					
					$username = $data['message_content']->sender_name ;
				
					
				}
				else 
				{
					$username = '';
				}
			}
			
			$data['sender_info'] = $this->user_tasks->GetuserInfo($username) ;
				
			$this->load->view('common/header') ;
			$this->load->view('common/sidebar', $data) ;
			$this->load->view('pages/user-message-view' ,$data) ;
			$this->load->view('common/footer') ;
				
			
		}else{
        	
			
				redirect('login');
			
        }
	}
	public function message_deleted()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
				$this->load->model('user_tasks');
				$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
				$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
				$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
				$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
				$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
			
				$data['users'] = $this->LoadUsers() ;
				
				$data['inbox'] = $this->user_tasks->fetch_UserInbox();
			
				$this->load->view('common/header') ;
				$this->load->view('common/sidebar', $data) ;
				$this->load->view('pages/user-deleted-messages',$data) ;
				$this->load->view('common/footer') ;
				
			
		}else{
        	
			
				redirect('login');
			
        }
	}
    public function message_flagged()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
				$this->load->model('user_tasks');
				$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
				$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
				$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
				$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
				$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
				
				$data['users'] = $this->LoadUsers() ;
				
				$data['inbox'] = $this->user_tasks->fetch_UserInbox();
				
				$this->load->view('common/header') ;
				$this->load->view('common/sidebar', $data) ;
				$this->load->view('pages/user-flagged-messages',$data) ;
				$this->load->view('common/footer') ;
				
			
		}else{
        	
			
				redirect('login');
			
        }
	}
    public function message_starred()
	{
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
				
				$this->load->model('user_tasks');
				$data['all_users_no'] = $this->user_tasks->allRegisteredusers() ;
				$data['num_inbox'] = $this->user_tasks->inbox_new_no() ;
				$data['num_inbox_all'] = $this->user_tasks->inbox_no() ;
				$data['num_deleted'] = $this->user_tasks->DeletedMessage_no() ;
				$data['num_starred'] = $this->user_tasks->StarredMessage_no() ;
				
				$data['users'] = $this->LoadUsers() ;
				
				$data['inbox'] = $this->user_tasks->fetch_UserInbox();
				
				$this->load->view('common/header') ;
				$this->load->view('common/sidebar', $data) ;
				$this->load->view('pages/user-stared-messages',$data) ;
				$this->load->view('common/footer') ;
				
			
		}else{
        	
			
				redirect('login');
			
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
    public function message_send() 
	{
		
		if($this->session->userdata('is_logged_in'))
		{	
			$sender = $this->session->userdata('usern') ;
			$reciever = $this->input->post('receiver') ;
			$TocopyUser = $this->input->post('copyuser') ;
			$attch = $this->input->post('attc') ;
			$mail_subject = $this->input->post('subject') ;
			$message_body = $this->input->post('message_body_content') ;
			
			if (isset($_FILES['attc']) && !empty($_FILES['attc']))
			{
				$this->load->library('upload');
				$config['upload_path'] = './assets/img/attachments';
				$config['allowed_types'] = 'jpg|jpeg|png|pdf|doc|docx';
				$config['file_name'] = mt_rand(1000,1000000).$_FILES['attc']['name'] ;
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('attc')) // Do upload of the file 
				{
				
					$flname = $this->upload->data('file_name'); // name of the file to be saved to db
					
				
				}
				else {
					
					$flname = 'Nill'; // name of the file to be saved to db
					
				}
			}
			else{
				
				
				$flname = 'Nill'; // name of the file to be saved to db
					
				
			}
			
			
			
			$this->load->model('user_tasks');
			
			$saveMessage = $this->user_tasks->saveMessage($flname) ;
			
			if($saveMessage)
			{
				
				echo 'Message Sent ';
			
				
			}
			else
			{
				
				echo 'Message not Sent ';
			
				
			}
			
		}
		else {
			
			
			
			echo '0' ;
			
		}

		


		
	}
	
	
	public function LoadUsers() 
	{
		
		if($this->session->userdata('is_logged_in'))
		{
			$this->load->model('user_tasks');
			$loader = $this->user_tasks->getUsers() ;
			
			return $loader ;
		
		}
		else{
			
			
			redirect('login');
			
		}
	}

	public function addPagination($url , $totalNum ,$perPage ,$UriSegment) {
		
		$this->load->library('pagination');
				
		$config['base_url'] = base_url() . $url ; 
		$config['total_rows'] =  $totalNum ; 
		$config['per_page'] =  $perPage ; 
		$config['uri_segment'] =  $UriSegment ; 
		$config['num_tag_open'] = '<li >';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open']  = '<li >';
		$config['next_tag_close']  = '</li >';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active" ><a href="#">';
		$config['cur_tag_close'] = '</li></a>';
		
		$this->pagination->initialize($config) ;
		
		$links = $this->pagination->create_links() ;
		
		return $links ;
		
	}



}


     
