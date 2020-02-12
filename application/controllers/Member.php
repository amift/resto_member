<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation']);

		$this->load->model('Member_model', 'member');
		$this->load->model('Membership_model', 'membership');
	}

	public function index(){
		$invoke['db_data']=$this->member->get_data(TRUE);
		$this->load->view('__member/view',$invoke);
	}

	public function delete($id){
		$this->member->delete($id);
		redirect('member');
	}

	public function edit($id){
		$arr_jenis_kelamin = array('' => '-- Pilih Jenis Kelamin --', 'L' => 'Laki-laki','P' => 'Perempuan' );
		$arr_m_type = $this->membership->get_data_as_array('id, keterangan AS nama','-- Pilih Type --');

		$invoke['db_data']=$this->member->get_row(TRUE);
		$invoke['arr_jenis_kelamin']=$arr_jenis_kelamin;
		$invoke['arr_m_type']=$arr_m_type;

        $this->form_validation->set_rules('input_nama', 	        'Nama',          'trim|required|max_length[50]');	
        $this->form_validation->set_rules('input_jenis_kelamin', 	'Jenis kelamin', 'trim|required|max_length[1]');	
        $this->form_validation->set_rules('input_alamat', 	        'Alamat',        'trim|required|max_length[100]');	
        $this->form_validation->set_rules('input_telepon', 	        'Telepon',       'trim|required|max_length[20]');
        $this->form_validation->set_rules('input_type', 	        'Member Type', 'trim|required|max_length[1]');	

        if ($this->form_validation->run() == FALSE){
			$this->load->view('__member/edit',$invoke);
        }else{
        	$data_post = array(
							'nama'          =>$this->input->post('input_nama'),
							'jenis_kelamin' =>$this->input->post('input_jenis_kelamin'),
							'alamat'        =>$this->input->post('input_alamat'),
							'telepon'       =>$this->input->post('input_telepon'),
							'type'          =>$this->input->post('input_type'),
        				 );
			$this->member->update($data_post,$id);
			redirect(base_url('member'));
        }
	}

	public function new(){
		$arr_jenis_kelamin = array('' => '-- Pilih Jenis Kelamin --', 'L' => 'Laki-laki','P' => 'Perempuan' );
		$invoke['arr_jenis_kelamin']=$arr_jenis_kelamin;

		$arr_m_type = $this->membership->get_data_as_array('id, keterangan AS nama','-- Pilih Type --');
		$invoke['arr_m_type']=$arr_m_type;

        $this->form_validation->set_rules('input_nama', 	        'Nama',          'trim|required|max_length[50]');	
        $this->form_validation->set_rules('input_jenis_kelamin', 	'Jenis kelamin', 'trim|required|max_length[1]');	
        $this->form_validation->set_rules('input_alamat', 	        'Alamat',        'trim|required|max_length[100]');	
        $this->form_validation->set_rules('input_telepon', 	        'Telepon',       'trim|required|max_length[20]');
        $this->form_validation->set_rules('input_type', 	        'Member Type', 'trim|required|max_length[1]');	

        if ($this->form_validation->run() == FALSE){
			$this->load->view('__member/new',$invoke);
        }else{
        	$data_post = array(
							'nama'          =>$this->input->post('input_nama'),
							'jenis_kelamin' =>$this->input->post('input_jenis_kelamin'),
							'alamat'        =>$this->input->post('input_alamat'),
							'telepon'       =>$this->input->post('input_telepon'),
							'type'          =>$this->input->post('input_type'),
        				 );
			$this->member->insert($data_post);
			redirect(base_url('member'));
        }
	}
}