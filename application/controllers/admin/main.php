<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Admin_Controller {
	//展示后台首页
	Public Function index(){
		$this->load->view('index.html');
	}

	//展示头部
	Public Function top(){
		$this->load->view('top.html');
	}

	Public Function menu(){
		$this->load->view('menu.html');
	}

	Public Function drag(){
		$this->load->view('drag.html');
	}

	Public Function content(){
		$this->load->view('main.html');
	}
}