<?php   
class Login extends CI_Controller {
    
    
        public function __construct(){
                
                parent:: __construct();
                $this->load->model('user_model');
                $this->load->helper('cookie');
                $this->load->helper('url_helper');
        }
    
    
        
        public function index(){
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'ThatCMS Login Page';

                $this->form_validation->set_rules('Username', 'Username', 'required');
                $this->form_validation->set_rules('Password', 'Password', 'required');

                if (($this->form_validation->run()  === FALSE) || ($this->user_model->check_user() === FALSE))
                {
                    $this->load->view('login');
                }
                else
                {
                  //  echo "login succuessful";
                    redirect('posts');
                }
        }
    
    
 
        public function logout(){
            
                $this->session->unset_userdata('logged_in');
                session_destroy();
                redirect('login');
                
        }
            

    
}