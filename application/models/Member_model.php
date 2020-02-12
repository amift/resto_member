<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model {

	var $table='member';
	var $table_view='member_v';

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

    public function get_row($isTableView=null,$keyword=null){
        if ($isTableView!=null) {
            $this->table=$this->table_view;
        }
        if ($keyword!=null) {
            $this->db->where($keyword);
        }        
        return $this->db->get($this->table)->row();
    }

    public function get_data($isTableView=null,$keyword=null){
        if ($isTableView!=null) {
        	$this->table=$this->table_view;
        }
        if ($keyword!=null) {
            $this->db->where($keyword);
        }        
        return $this->db->get($this->table)->result();
    }

    public function delete($id){
        $this->db->where('id',$id)->delete($this->table);
    }

	public function insert($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

    public function update($post_data,$id){
        $this->db->where('id',$id)->update($this->table, $data);
    }    
}
