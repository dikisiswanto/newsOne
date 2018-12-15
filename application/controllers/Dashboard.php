<?php defined('BASEPATH') or exit('No direct script access allowed');
	
	/**
	 * Class Dashboard for admin purpose
	 * @author Diki Siswanto - D42116316
	 */
	class Dashboard extends Admin_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_admin', 'admin');
		}

		public function index()
		{
			$this->var['title'] = 'News Dashboard';
			$this->var['module'] = 'admin/home';
			$this->var['post_numrows'] = $this->admin->get_post_numrows();
			$this->var['category_numrows'] = $this->admin->get_category_numrows();
			$this->var['user_numrows'] = $this->admin->get_user_numrows();
			$this->load->view('admin/index', $this->var);
		}

		public function about()
		{
			$this->var['title'] = 'About';
			$this->var['module'] = 'admin/about';
			$this->load->view('admin/index', $this->var);
		}

	}
 ?>