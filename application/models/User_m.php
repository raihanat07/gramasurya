<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('username' , $post['username']);
        $this->db->where('password' , sha1($post['password']));
        $query = $this->db->get();
        return $query;
	}

    public function get($id = null){
        $this->db->from('user');
        if($id != null){
            $this->db->where('id_user' , $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah_user($post){
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        $params['level'] = $post['level'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $this->db->insert('user' , $params);
    }

    
}
