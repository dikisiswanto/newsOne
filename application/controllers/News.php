<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class News extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin', 'admin');
	}

	public function index()
	{
		$this->var['title'] = 'View All Posts';
		$this->var['query'] = $this->admin->get_all_posts();
		$this->var['module'] = 'admin/all_posts';
		$this->load->view('admin/index', $this->var);
	}

	public function create()
	{
		$id = (int) $this->uri->segment(3);

		$this->var['title'] = $id && $id > 0 ? 'Edit Post Entry' : 'Add New Post';
		$this->var['module'] = 'admin/add_post';
		$this->var['message'] = $this->save();
		$this->var['query'] = $id && $id > 0 && ctype_digit((string) $id) ? 
													$this->admin->get_post_row_obj($id) : ($this->var['message']['type'] == 'error' ? 
													$this->var['message']['query'] : false); 
		$this->var['categories'] = $this->admin->get_all_categories();
		$this->var['action'] = site_url('news/create/save/'.$id);
		$this->load->view('admin/index', $this->var);
	}

	
	public function delete()
	{
		$id = $this->input->post('id', true);
		if ($id && $id > 0) {
			$this->admin->delete_post($id);
		}

		redirect('news');
	}

	/*
	* @return array
	* save post on create and update action if validation passed
	*/

	public function save()
	{
		$id = (int) $this->uri->segment(4);
		
		if ($this->form_validate()) {
			$news_data = [];
			$news_data['post_title'] = $this->input->post('post_title');
			$news_data['post_content'] = $this->input->post('post_content');
			$news_data['post_cat_id'] = $this->input->post('post_cat_id');
			$news_data['post_slug'] = url_title(strtolower($this->input->post('post_title')), '-');
			$news_data['is_delete'] = 0;

			if ($id && $id > 0) {
				$update = $this->admin->update_post($news_data, $id);
				if($update){
					$data['message'] = 'Berita berhasil diubah';
					$data['type'] = 'success';
				}
				else {
					$data['message'] = "Berita gagal diubah";
					$data['type'] = 'error';
				}
			}
			else {
				$news_data['created_at'] = date('Y-m-d H:i:s');
				$insert = $this->admin->insert_new_post($news_data);
				if($insert){
					$data['message'] = 'Berita berhasil ditambahkan';
					$data['type'] = 'success';
				}
				else {
					$data['message'] = "Berita gagal ditambahkan";
					$data['type'] = 'error';
				}
			}	
		}
		else {
			$news_data['post_title'] = $this->input->post('post_title');
			$news_data['post_content'] = $this->input->post('post_content');
			$news_data['post_cat_id'] = $this->input->post('post_cat_id');
			$news_data['created_at'] = 'Now';
			$data['message'] = validation_errors();
			$data['type'] = 'error';
			$data['query'] = (object) $news_data;
		}
		return $data;
	}

	/**
	* @return bool
	* @access public
	* form validation for create and update
	*/
	public function form_validate()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('post_title', 'post title', 'required');
		$this->form_validation->set_rules('post_content', 'post content', 'required');
		$this->form_validation->set_rules('post_cat_id', 'post category', 'required', array('required' => 'The %s must be selected.'));
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		return $this->form_validation->run();

	}
}
