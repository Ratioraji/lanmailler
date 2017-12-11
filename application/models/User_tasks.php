<?php
/**
 * 
 */
class User_tasks extends CI_Model
{
	
	public function __construct()
	{
		# connect to db 
		$this->load->database();

		#load form helper 
		$this->load->helper('form') ;
	}

	public function activate_user() {
	
		
		$this->db->select('email');
		$this->db->from('user_info');
		$query = $this->db->get();
		
		
		return $query->result() ;
		
	
	}
	
	public function fetch_UserSent($limit ,$start){
		
		
		$credentials = array('sender_name ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$this->db->limit($limit ,$start);
		$query = $this->db->get('messages');
				
		return $query->result() ;
		
		
		
		
	}
	
	public function login_user($username,$pass) 
	{
		
		
		$credentials = array('user_name ='=>$username,'password ='=>$pass);/* 
		$credentials2 = array('email ='=>$username,'password ='=>$pass); */
		$this->db->where($credentials,FALSE);/* 
		$this->db->or_where($credentials2,FALSE); */
		$query= $this->db->get('users');
		
		$nums = $query->num_rows() ;
		
		if($nums === 1 )
		{	
			echo $nums ;
			return true ;
		}
		else {
			
			
			return false ;
		}


	}
	public function GetuserInfo($username) 
	{
		$credentials = array('user_name ='=>$username);
		$credentials2 = array('email ='=>$username);
		$this->db->where($credentials,FALSE);
		$this->db->or_where($credentials2,FALSE);
		$query= $this->db->get('users');
		
		return $query->row() ;
		
	}
	
	public function register_user($user_img){

		//check if email and username have not been registered before 
		$usname = $this->input->post('user_name');
		$emal = $this->input->post('email');
		
		$sql = "select * from users where user_name='$usname' or email='$emal'" ;
		
		$query = $this->db->query($sql);
		
		$nums = $query->num_rows() ;
		
		if( $nums > 0 )
		{
			/* 
			echo '<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username or Email already taken";	
			echo '</strong></div>';
			 */
			//$this->session->set_flashdata('error_Code','00Reg');
			
			$stat_ero = '000' ; 
			
			return $stat_ero ;
		}
		else{

			$add_new_user = array(

				'user_name' => $this->input->post('user_name'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('pass')),
				'display_pics' => $user_img 
			);

			$insert_db = $this->db->insert('users',$add_new_user);

			return $insert_db ;

		}
		


	}
    
   public function getUsers() {
	   
		$query = $this->db->get('users');
		
		
		return $query->result() ;
		
	   
	   
   }
	
	public function saveMessage($attch) {
		
			if(!empty($this->input->post('copyuser'))){
				
				
				$cop_user = $this->input->post('copyuser') ;
			}
			else {
				
				
				$cop_user = 'Nill';
				
			}
			$add_new_message = array(

				'subject' => $this->input->post('subject'),
				'body' => $this->input->post('message_body_content'),
				'attach_id' => $attch ,
				'sender_name' => $this->session->userdata('usern'),
				'recieve_name' => $this->input->post('receiver'),
				'copy_name' => $cop_user ,
				'del_stat' => '0' ,
				'draft_stat' => '0' ,
				'send_stat' => '1' ,
				'read_Stat' => '0' 
			);

			$insert_db = $this->db->insert('messages',$add_new_message);

			return $insert_db ;
		
		
	}
  
	public function fetch_UserInbox(){
		
		
		$credentials = array('recieve_name ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$query = $this->db->get('messages');
				
		return $query->result() ;
		
		
	}
	
	public function fetch_UserInbox1($limit ,$start){
		
		
		$credentials = array('recieve_name ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$this->db->limit($limit ,$start);
		$query = $this->db->get('messages');
				
		return $query->result() ;
		
		
	}
	
	
	public function fetch_MessageContent($mid){
		
		
		$credentials = array('message_id ='=> $mid );
		$this->db->where($credentials,FALSE);
		$query = $this->db->get('messages');
				
		return  $query->row()  ;
		
		
	}

	public function ReadMessage($message_id) {
		
		$read = '1' ;
		$not_read = '0' ;
		
		$this->db->set('read_stat',$read);
		$this->db->where('message_id',$message_id);
		$query = $this->db->update('messages');

		
		$nums = $this->inbox_new_no() ;
		
		
		return $nums  ;
		
		
		
	}
	public function inbox_no() {
		
		
		$credentials = array('recieve_name ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$query2= $this->db->get('messages');
		
		return $query2->num_rows()  ; 
		
		
	}
	public function sent_no() {
		
		
		$credentials = array('sender_name ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$query2= $this->db->get('messages');
		
		return $query2->num_rows()  ; 
		
		
	}
	public function inbox_new_no() {
		
		
		$credentials = array('recieve_name ='=>$this->session->userdata('usern'),'read_stat ='=>0);
		$this->db->where($credentials,FALSE);
		$query2= $this->db->get('messages');
		
		return $query2->num_rows()  ; 
		
		
	}
	public function DeletedMessage_no() {
		
		$credentials = array('delete_by ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$query2= $this->db->get('deleted_message');
		
		return $query2->num_rows()  ; 
		
		
		
	}
	
	public function allRegisteredusers(){
		
		$query = $this->db->get('users');
		
		return $query->num_rows() ;
		
		
		
	}
	public function StarredMessage_no() {
		
		$credentials = array('starred_by ='=>$this->session->userdata('usern'));
		$this->db->where($credentials,FALSE);
		$query2= $this->db->get('starred_message');
		
		return $query2->num_rows()  ; 
		
		
		
	}



 public function register_user_admin(){

		//check if email and username have not been registered before 
		$usname = $this->input->post('user_name');
		$passw = $this->input->post('email');

		
		//$this->db->where('username =',$usname , FALSE);
		//$this->db->or_where('email =',$passw , FALSE);
		
		
		$sql = "select * from user_info where username='$usname' or email='$passw'" ;
		
		$query = $this->db->query($sql);
		
		$nums = $query->num_rows() ;
		
		if( $nums > 0 )
		{

			echo '<div class="alert alert-danger text-center"><a class="close" data-dismiss="alert">×</a><strong>';
			  echo "Username or Email already taken";	
			echo '</strong></div>';
			
			//$this->session->set_flashdata('error_Code','00Reg');
			

		}
		else{
                
				$add_new_user = array(

					'username' => $this->input->post('user_name'),
					'firstname' => $this->input->post('first_name'),
					'lastname' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
					'account_status' => '0'
                );

				$insert_db = $this->db->insert('user_info',$add_new_user);

				return $insert_db ;

		}
		


	}
	
	public function save_userimg($finame) {


		//$trackid = $this->input->post('ptracker');
		$trackid = $_SESSION['username'];
		//$trackid = $this->input->post('');

		$this->db->set('user_img',$finame);
		$this->db->where('username',$trackid);
		$query = $this->db->update('user_info');

		return $query ;
	}

	public function get_userid($username)
	{
		
		
		$this->db->where('username',$trackid);
		$query = $this->db->get('user_info');
		
		echo $query->row() ;
		
		
	}
	
}


?>