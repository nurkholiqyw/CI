<?php 
/**
 * 
 */
class Hitung extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//load helper URL dan FROM
		$this->load->helper(array('url','form'));
	}

	function index(){
		$this->load->view('menu_hitung');
	}

	function perkalian()
	{
		$data['judul']="Perkalian menggunakan form";
		$data['angka1']=(int)$this->input->post('angka1',true);
		$data['angka2']=(int)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']*$data['angka2'];
		$this->load->view('perkalian',$data);
	}

	function pembagian()
	{
		$data['judul']="pembagian menggunakan form";
		$data['angka1']=(int)$this->input->post('angka1',true);
		$data['angka2']=(int)$this->input->post('angka2',true);
		if ($data['angka2']>0) {
			$data['hasil']=$data['angka1']/$data['angka2'];
		}else{
			$data['hasil']='Angka Tidak Boleh 0';
		}
		$this->load->view('pembagian',$data);
	}
}


 ?>