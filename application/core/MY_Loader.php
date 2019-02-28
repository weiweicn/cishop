<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Loader extends CI_Loader {
	protected $_theme = 'default/';

	//开启皮肤功能
	Public Function switch_themes_on(){
		$this->_ci_view_paths = array(FCPATH . THEMES_DIR . $this->_theme => TURE);
	}

	//关闭皮肤功能
	Public Function switch_themes_off(){
		//just do nothing
	}
}