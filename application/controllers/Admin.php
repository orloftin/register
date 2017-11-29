<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		if ( $this->input->post('user') == 'admin' AND $this->input->post('password') == 'password' ) {
			$_SESSION['login'] = true;
		}else if( ! empty($_POST) ) {

			$this->db->where('user', $this->input->post('user'));
			$this->db->where('password', $this->input->post('password'));
			$data = $this->db->get('admin');
			$count = $data->num_rows();

			if (! empty($count)) {
				$_SESSION['login'] = true;	
			}

		}


		if (! empty($_SESSION['login'])) {
			redirect('admin/board','refresh');
		}


		$this->load->view('login');


	}


	public function logout()
	{
		$_SESSION['login'] = false;
		redirect('admin','refresh');

	}

	public function dount()
	{
		$this->db->where('gender', 'male');
		$data = $this->db->get('register');
		$countMale = $data->num_rows();

		$this->db->where('gender', 'female');
		$data = $this->db->get('register');
		$countFemale = $data->num_rows();


		echo json_encode( array( 
			array( 'label' => 'Male', 'value' => $countMale ) ,
			array( 'label' => 'Female', 'value' => $countFemale )
		 	)
		 );

	}

	public function bar()
	{
		$query = $this->db->query('SELECT province AS x, COUNT(province) AS y FROM  register GROUP BY province');
		$data = $query->result_array();

		echo json_encode( $data );

	}

	public function board()
	{
	
		if (empty($_SESSION['login'])) {
			redirect('regis/admin','refresh');
		}

		$data = $this->db->get('register');
		$info['dataList'] = $data->result();



		$this->load->view('board', $info);		
	}

	public function company()
	{
		if (empty($_SESSION['login'])) {
			redirect('regis/admin','refresh');
		}

		$data = $this->db->get('register');
		$info['dataList'] = $data->result();



		$this->load->view('company', $info);
	}


	public function report()
	{
		if (empty($_SESSION['login'])) {
			redirect('regis/admin','refresh');
		}

		$data = $this->db->get('register');
		$info['dataList'] = $data->result();



		$this->load->view('report', $info);
	}

}
