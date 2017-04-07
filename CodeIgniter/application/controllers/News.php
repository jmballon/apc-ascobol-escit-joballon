<?php
class News extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Members archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
        
        if (empty($data['news_item']))
        {
            show_404();
        }
 
        $data['Complete_Name'] = $data['news_item']['Complete_Name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Membership Form';
 
        $this->form_validation->set_rules('Complete_Name', 'Complete Name', 'required');
        $this->form_validation->set_rules('Nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('Email_Address', 'Valid Email Address', 'required');
		$this->form_validation->set_rules('Home_Address');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Cellphone_Number', 'Valid Cellpone Number', 'required');
		$this->form_validation->set_rules('Comments');
		
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a membership form';        
        $data['news_item'] = $this->news_model->get_news_by_id($id);
        
        $this->form_validation->set_rules('Complete_Name', 'Complete_Name', 'required');
        $this->form_validation->set_rules('Nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('Email_Address', 'Valid Email Address', 'required');
		$this->form_validation->set_rules('Home_Address');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Cellphone_Number', 'Valid Cellpone Number', 'required');
		$this->form_validation->set_rules('Comments');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($id);
        
        $this->news_model->delete_news($id);        
        redirect( base_url() . 'index.php/news');        
    }
}