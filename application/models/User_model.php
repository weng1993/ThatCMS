<?php
class User_model extends CI_Model {
        
        public function __construct()
        {
                $this->load->database();
                
        }
    
        
        public function check_user(){
            
            $username = $this->input->post('Username');
            $password = $this->input->post('Password');
            
            
            $query = $this->db->get_where('users', array('un'=>$username,'pwd'=>$password));
            if(empty ($query->result_array() )){
                echo "password invalid";
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                return false;
            }
            else{
                $row =$query->row();
                $newdata = array(
                        'username'  => $row->un,
                        'uid'=>$row->ID,
                        'email'     => $row->em,
                        'logged_in' => TRUE
                );
                
                $this->session->set_userdata($newdata);
                //echo 'session set.';
                return true;
            }
          //  return true;
        }
}