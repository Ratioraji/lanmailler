<?php
class Dashboard extends CI_controller {
    /*
    
        This page handles all operation on the dashboard page 
        
        
        
    
    
    
    
    */
    
    public function dashboard_page() 
    
    {
        if($this->session->userdata('is_logged_in')){
            
            
            $this->load->view('common/header');
			$this->load->view('common/sidebar');
			$this->load->view('pages/dashboard.php');
			$this->load->view('common/footer');
            
        }
        
        else {
            
            
            redirect('admin/login');
        }
        
    }
    
    
}



?>