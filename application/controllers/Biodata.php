<?php
	class Biodata extends CI_Controller
	{
		
		function __construct()
		{
			parent :: __construct();
			$this->load->helper('url');
		}
		function index(){
			$data['judul']="Biodata";
			$data['nama']="Muhammad Asla Labiib Badaly";
			$data['alamat']="Manyaran,Banyakan,Kediri";
			$data['kelamin']="Laki Laki";
			$data['sekolah']="SMK TI Pelita Nusantara Kediri";
			$this->load->view('profil',$data);
		}
	}
?>