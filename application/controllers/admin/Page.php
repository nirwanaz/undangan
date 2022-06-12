<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function home(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('home'); // load view home.php
	}

	public function fitur(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('fitur'); // load view berita.php
	}
	public function bundle(){
		$this->render_backend('bundle');
	}

	public function pengguna(){
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
			show_404(); // Redirect ke halaman 404 Not found

		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('membership'); // load view pengguna.php
	}

	public function template(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('template'); // load view kontak.php
	}
}
