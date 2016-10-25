<?php
class Post_model extends CI_Model {
        
        public function __construct()
        {
                $this->load->database();
        }
    
        
        public function get_posts($uid = FALSE)
        {
            if ($uid != FALSE)
            {
                    $query = $this->db->get_where('posts', array('uid'=>$uid));
                    return $query->result_array();
            }
        }     
        public function get_post($pid = FALSE)
        {
            if ($pid != FALSE)
            {
                    $query = $this->db->get_where('posts', array('pid'=>$pid));
                    return $query->row_array();
            }
        }
        public function delete_posts($uid = FALSE)
        {
            
            $data = $this->db->get_where('posts', array('uid'=>$uid))->result_array();
            
            foreach($data as $post_item){
                if ($this->input->post($post_item['pid'])=='accept'){
                   // echo  $post_item['pid'].' deleted';
                    //BUG note: it does go here, but the data is not actually deleted.
                    $this->db->delete('posts', array('pid', $post_item['pid']));
                }
            }
        }
    
        public function edit_post($pid = FALSE)
        {
                $data = array(
                    'title' => $this->input->post('title'),
                    //'slug' => $slug,
                    'text' => $this->input->post('text')
                );

                $this->db->where('pid', $pid);
                $this->db->update('posts', $data);
                return $this->db->update('posts', $data);
        }
    
        public function set_post($uid = FALSE)
        {
                //$slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                    'title' => $this->input->post('title'),
                    //'slug' => $slug,
                    'uid' => $uid,
                    'text' => $this->input->post('text')
                );

                return $this->db->insert('posts', $data);
        }
        
    
        
}