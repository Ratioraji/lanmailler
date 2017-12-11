<?php
class Forgetpass extends CI_controller(){
    
    public function forgot_pass_page() {
        
        // $this->load->library('session');
        
	   if($this->session->userdata('is_logged_in')){
			
			
				redirect('admin/dashboard');
			
		}else{
        	
			$this->load-view('pages/forgot-password') ;
			
        }
        
        
    }
    
    public function send_reset_mail(){
        
        
        
        /****** start mail user reset password link ***********/
        $config['mailtype'] = 'html';

        //$this->email->initialize($config);

        $this->load->library('email',$config);

        $this->email->to($email);
        $this->email->from('noreply@paradigmfinance.com');
        $this->email->subject('Welcome  '.$user_name.'');
        $this->email->message('<div style="padding:10px;max-width:600px;"><p>Hi '.$user_name. '</p>' . '&nbsp <p>we sorry you forgot your password kindly follow the link below to reset .</p><a href="'.  base_url() .'/verify/'. md5($email).'" >Reset Password<\a> <p style="font-size:8pt;text-align:center;" >if you didnt request a password reset, kindly ignore this mail and report to the IT unit immediately</p></div>');
        $r = $this->email->send();
        
        /****** end mail user reset password link ***********/ 

        if (!$r){

            $this->email->print_debugger();

        }
        else {

            echo 'email sent' ;


        }
        
        
        
    }
    
    
    public function fogot_pass_return(){
        
        
        $this->load->view('pages/forgot-pass-return');
        
    }
    
    public function fogot_pass_set_new_pass(){
        
        
        
        
    }
    
    
    
}