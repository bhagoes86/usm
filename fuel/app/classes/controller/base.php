<?php

class Controller_Base extends Controller_Template 
{
	public $data 		= array();
	public $template 	= 'template/layouts/default';
	public $module;

	/**
	 * Run param before controller is execute
	 * 
	 * @return [type] [description]
	 */
	public function before ()
	{
		parent :: before();

		$this->data['module'] = strtolower($this->module);
	}

	/**
	 * Index page
	 * 
	 * @return [type] [description]
	 */
	public function index ()
	{
		$this->template->title = $this->module.' / Index';
		$this->template->content = View::forge(strtolower($this->module).'/index', $this->data);
	}

	/**
	 * Create page
	 * 
	 * @return [type] [description]
	 */
	public function create ($file = 'form')
	{
		$this->template->title = $this->module.' / Create';
		$this->template->content = View::forge(strtolower($this->module).'/'.$file, $this->data);
	}

	/**
	 * Update page
	 * 
	 * @return [type] [description]
	 */
	public function update ($file = 'form')
	{
		$this->template->title = $this->module.' / Update';
		$this->template->content = View::forge(strtolower($this->module).'/'.$file, $this->data);
	}

	/**
	 * View page
	 * 
	 * @return [type] [description]
	 */
	public function view ($file = 'view')
	{
		$this->template->title = $this->module.' / View';
		$this->template->content = View::forge(strtolower($this->module).'/'.$file, $this->data);
	}

	/**
	 * Delete page
	 * 
	 * @return [type] [description]
	 */
	public function delete ()
	{
		$this->template->title = $this->module.' / Delete';
		$this->template->content = View::forge(strtolower($this->module).'/delete', $this->data);
	}
}