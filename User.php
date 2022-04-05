<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
    }

    public function index(){
        $data['user']=$this->users_model->getAllUser();
        $this->load->view('user_list.php', $data);
    }

    public function register(){
        $this->load->view('addform.php');
    }

    public function insert(){
        $user['nama']=$this->input->post('nama');
        $user['nim']=$this->input->post('nim');
        $user['jurusan']=$this->input->post('jurusan');
        $user['email']=$this->input->post('email');
        $user['password']=$this->input->post('password');

        $query=$this->users_model->insertuser($user);
        if($query){
            header('location:'.base_url().$this->index());
        }
    }

    public function edit($id){
        $data['user'] = $this->users_model->getUser($id);
        $this->load->view('editform', $data);
    }

    public function update($id){
        $user['nama']=$this->input->post('nama');
        $user['nim']=$this->input->post('nim');
        $user['jurusan']=$this->input->post('jurusan');
        $user['email']=$this->input->post('email');
        $user['password']=$this->input->post('password');

        $query = $this->users_model->updateuser($user, $id);

        if ($query) {
            header('location:'.base_url().$this->index());
        }
    }

    public function delete($id){
        $user['nama']=$this->input->post('nama');
        $user['nim']=$this->input->post('nim');
        $user['jurusan']=$this->input->post('jurusan');
        $user['email']=$this->input->post('email');
        $user['password']=$this->input->post('password');

        $query = $this->users_model->deleteuser($user, $id);

        if ($query) {
            header('location:'.base_url().$this->index());
        }
    }

    public function add_user(){
        $this->load->view('addform.php');
    }
}

?>