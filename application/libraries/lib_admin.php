<?php
/*
 * Image CMS
 * lib_admin.php
 *
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Lib_admin {

 	public $CI;

 	function Lib_admin()
 	{
 		$this->CI =& get_instance();
 	}

 	/**
 	 * 	Initiating the basic parameters for administrator
	 *  Loads libraries
 	 */
 	function init_settings()
    {
        $this->CI->lang->load('dx_auth');
		$this->CI->load->library('DX_Auth');

		# Load admin model
		$this->CI->load->model('cms_admin');

  		# Set default admin template
 		$this->CI->config->set_item('template','administrator');

		$this->CI->load->library('form_validation');
		$this->CI->load->library('template');

		# Load language
// 		$this->CI->lang->load('main','russian');
// 		$this->CI->config->set_item('language','russian');
//		$this->CI->template->add_array($this->CI->lang->load('main','russian',TRUE));
                
                //$sett = $this->cms_admin->get_settings();
                //$sett = ShopCore::$ci->cms_admin->get_settings();
                $sett = $this->CI->db->where('s_name', 'main')->get('settings')->row();
                $folder = '/'.$sett->lang_sel;
 		$this->CI->config->set_item('language','russian');
                $this->CI->template->add_array($this->CI->lang->load('admin','admin'.$folder, TRUE));
                $this->CI->lang->load('admin', 'admin'.$folder);
                $this->CI->lang->load('controller', 'admin'.$folder);
                $this->CI->lang->load('basemodules', 'admin'.$folder);

		$this->CI->load->helper('javascript');
		$this->CI->load->helper('admin');
		$this->CI->load->helper('component');
 	}

	/**
	 * Use this function to write empty value in db insted of 0
	 *
	 * @access public
	 * @return string
	 */
 	function db_post($data)
 	{
		return ($this->CI->input->post($data)) ? $this->CI->input->post($data) : $data = '';
	}


    function log($message)
    {
        $data = array(
            'user_id'  => $this->CI->dx_auth->get_user_id(),
            'username' => $this->CI->dx_auth->get_username(),
            'message'  => $message,
            'date'     => time(),
        );

        $this->CI->db->insert('logs', $data);
    }

 }

 /* End of lib_admin.php */
