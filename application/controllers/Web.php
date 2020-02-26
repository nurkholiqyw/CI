<?php 
/**
 * 
 */
class Web extends CI_controller{
	
	function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['judul']="parsing Data Ke View";
		$data['isi']="Ini adalah data dari controller";
		$this->load->view('hello',$data);
	}

	function komentar(){
		echo "Ini Adalah Fungsi komentar";
	}

	function nama(){
		echo "Kholiq";
	}
}

 ?>