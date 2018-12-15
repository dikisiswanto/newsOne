<?php 

/**
 * 
 */
class Categories extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin', 'admin');
	}

	public function index()
	{
		$this->var['title'] = 'All Categories';
		$this->var['query'] = $this->admin->get_all_categories();
		$this->var['module'] = 'admin/category_lists';
		$this->load->view('admin/index', $this->var);
	}

	public function create()
	{
		$cat_title = $this->input->post('cat_title');
		if (trim($cat_title)) {
			$data['cat_title'] = $cat_title;
			$data['cat_slug'] = url_title(strtolower($this->input->post('cat_title')), '-');
			$data['is_delete'] = 0;
			$this->admin->insert_new_cat($data);
		}
		redirect('categories');
	}

	public function update()
	{
		$cat_title = $this->input->post('cat_name');
		if (trim($cat_title)) {
			$id = $this->input->post('id');
			$data['cat_title'] = $cat_title;
			$data['cat_slug'] = url_title(strtolower($cat_title), '-');
			$this->admin->update_cat($data, $id);
		}
		redirect('categories');
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		if ($id && $id > 0) {
			$this->admin->delete_cat($id);
		}
		
		redirect('categories');
	}
}
