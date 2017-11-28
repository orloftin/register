<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		$info = array();

		if ( ! empty($_POST) ) {
			
			if ( $this->input->post('phone') ) 
			{
				$this->db->where('phone', $this->input->post('phone'));
				$data = date("Y-m-d H:i:s");
				$data = $this->db->get('register');
				$count = $data->num_rows();

				if (empty($count)) {


					$this->db->insert('register', $_POST);

					echo $this->load->view('success_page');


				}else{
					echo 'ข้อมูลเบอร์ซำกรุณาใส่ข้อมูลใหม่';
				}


			}

		}
		
		$this->load->view('register', $info);

		
	}

}

?>