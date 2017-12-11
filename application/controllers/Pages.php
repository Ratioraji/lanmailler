<?php
class Pages extends CI_Controller {

	public function view($page = 'login')
	{
	//echo FCPATH; exit; //APPPATH
			if ( ! file_exists(FCPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}

			$data['title'] = ucfirst($page); // Capitalize the first letter

			if ($page == 'login' || $page == 'register' || $page == 'register-email' || $page == 'register-email-sent' || $page == 'register-success' || $page == 'register-upload'|| $page == 'forgot-password' || $page == 'register-return' || $page == 'register-admin-verify'|| $page == 'register-admin' || $page == 'register-success' ){
				$this->load->view('pages/'.$page, $data);
			}
			else{
			$this->load->view('common/header', $data);
			$this->load->view('common/sidebar', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('common/footer', $data);
			}
	}
}