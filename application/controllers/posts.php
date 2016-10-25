<?php
class Posts extends CI_Controller{
    
        public function __construct(){

                parent:: __construct();
                $this->load->model('post_model');
        }
    
        public function index(){
                
                $this->checkstatus();
                

                $uid = $this->session->userdata('uid');
                
                $data['title'] = 'Post List';
                $data['posts']=$this->post_model->get_posts($uid);
                $this->load->view('templates/header', $data);
                $this->load->view('posts/index', $data);
                $this->load->view('templates/footer');
        }
    

        public function view($pid = NULL)
        {
                
                $data['post_item'] = $this->post_model->get_post($pid);

                if (empty($data['post_item']))
                {
                        show_404();
                }

                $data['title'] = $data['post_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('posts/view', $data);
                $this->load->view('templates/footer');
        }
    
        public function create()
        {

                $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('posts/create');
                    $this->load->view('templates/footer');

                }
                else
                {
                    $this->post_model->set_post($this->session->userdata('uid'));
                    $this->load->view('posts/success');
                    $this->load->view('templates/footer');
                    
                }
        }
        public function delete()
        {
                $data['title'] = 'Delete Success Page';
                $uid = $this->session->userdata('uid');
                $this->post_model->delete_posts($uid);
                          
                $this->load->view('templates/header', $data);
                $this->load->view('posts/success');
                $this->load->view('templates/footer');

        }
        private function checkstatus(){
                if (!($this->session->userdata('logged_in'))){
                    redirect('login');
                }
        }
            
}