<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends CI_Model {

	var $table='membership_type';
	var $table_view='';

	public function __construct(){
		parent::__construct();
		$this->load->database();
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

	public function insert($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

    public function get_data_as_array($fields=null,$opt=null){
        if ($fields!=null) {
            $result=$this->db
            			 ->select($fields)
            			 ->get($this->table)
            			 ->result();
        }
        $options = array();
        if ($opt!=null){
            $options[''] = $opt;
        }
        foreach($result as $key){
                $options[$key->id] = $key->nama;
        }
        return $options;
    }
}
