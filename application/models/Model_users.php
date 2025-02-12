<?php

class Model_users extends CI_Model {

    public $table ="x_tbluser";
    
    function save($foto) {
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'nama_bidang'   => $this->input->post('nama_bidang', TRUE),
			//'tpt_bayar'   => $this->input->post('tpt_bayar', TRUE),
            'foto'            => $foto
        );
        $this->db->insert($this->table,$data);
    }
    
    function update($foto) {
        if(empty($foto)){
            // jangan update field foto
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'nama_bidang'     => $this->input->post('nama_bidang', TRUE)
			//'tpt_bayar'   => $this->input->post('tpt_bayar', TRUE)
        );
        }else{
            // update field foto
        $data = array(
            'nama_lengkap'    => $this->input->post('nama_lengkap', TRUE),
            'username'        => $this->input->post('username', TRUE),
            'password'        => md5($this->input->post('password', TRUE)),
            'id_level_user'   => $this->input->post('id_level_user', TRUE),
            'nama_bidang'   => $this->input->post('nama_bidang', TRUE),
			//'tpt_bayar'   => $this->input->post('tpt_bayar', TRUE),
            'foto'            => $foto
        );
        }
        $id_user   = $this->input->post('id_user');
        $this->db->where('id_user',$id_user);
        $this->db->update($this->table,$data);
    }

}