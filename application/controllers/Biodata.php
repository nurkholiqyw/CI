<?php 

class Biodata extends CI_controller{

	function __construct(){
		parent:: __construct();
	}

	function index(){
		$data['judul']="Biodata";
		$data['atas']="BiodataKu";
		$data['nama']="Nur Kholiq Yoga W";
		$data['alamat']="Jl.Suanan Ampel Gang 3 No 12";
		$data['jenis']="Laki - Laki";
		$data['sekolah']="SMK TI Pelita Nusantara";
		$this->load->view('profile',$data);
	}
}


 ?>