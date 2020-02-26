<?php
	class Web extends CI_Controller
	{
		
		function __construct()
		{
			parent :: __construct();
		}
		function index(){
			$data['judul']="parsing data ke view";
			$data['isi']="ini adalah data dari controller";
			$this->load->view('hello',$data);
		}
	}
?>