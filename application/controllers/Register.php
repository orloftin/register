<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		$info = array();

        if ( $this->input->post('id') ) {

            // check phone number             
            // $this->db->where('register_id !=', $this->input->post('id') );
            // $this->db->where('phone', $this->input->post('phone'));
            // $query = $this->db->get( 'register' );
            // $data = $query->row();

            // if ( !empty( $data ) ) {

            //     echo '<script>alert( "มีเบอร์ดทรอยู่แล้ว" );</script>';

            // }

            $dataPost = $_POST;
            unset($dataPost['id']);

            $this->db->where('register_id', $this->input->post('id') );
            $this->db->update('register', $dataPost);

            echo '<script>alert( "Save Data Success !!" );</script>';

            

        }


        if ( $this->input->get('search') ) {
            
            $this->db->where('phone', $this->input->get('search'));
            $query = $this->db->get( 'register' );
            $data = $query->row();

            if ( empty( $data ) ) {
                
                echo '<script>alert( "ไม่พบข้อมูล" ); window.location = "/"</script>';

            }

            $inArray = array('data1','data2','data3','data4','data5','data6','data7','data8','data9','data10','data11','gender');

            foreach ($data as $key => $value) {
                
                if ( in_array( $key, $inArray ) ) {
                    $option[$key] = $value;  
                }else{
                    $list[$key] = $value;
                }

            }

            $info['id'] = $list['register_id'];
            unset($list['register_id']);
            unset($list['create_at']);



            $info['list'] = $list; 
            $info['option'] = $option; 

            $this->load->view('register', $info);

            return true;
        }



		if ( ! empty($_POST) ) {
			
			if ( $this->input->post('phone') ) 
			{
				$this->db->where('phone', $this->input->post('phone'));
				
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
