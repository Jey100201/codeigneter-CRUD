<?php 
class users_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertuser($user){
        return $this->db->insert('user',$user);
    }

    public function getAllUser(){
        $query=$this->db->get('user');
        return $query->result();
    }

    public function getUser($id){
        $query = $this->db->get_where('user',array('id'=>$id));
        return $query->row_array();
    }

    public function updateuser($user, $id){
        $this->db->where('user.id', $id);
        return $this->db->update('user', $user);
    }

    public function deleteuser($user,$id){
        $this->db->where('user.id',$id);
        return $this->db->delete('user');
    }

    public function add_user($user){
        return $this->db->insert('user',$user);
    }
}

