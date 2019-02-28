<?php defined('BASEPATH') OR exit('No direct script access allowed');

//前台父控制器
class Home_Controller extends CI_Controller {
	Public Function __construct(){
		parent::__construct();
		$this->load->switch_themes_on();
	}
}

//后台父控制器
class Admin_Controller extends CI_Controller {
	Public Function __construct(){
		parent::__construct();
		$this->load->switch_themes_off();
	}
}