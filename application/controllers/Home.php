<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $system_name;
    private $login_id;
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');    
        error_reporting(0);  
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

        $this->system_name = $this->db->get_where('settings', array('setting_type' => 'system_name'))->row()->description;
        $this->login_id = $this->session->userdata('login_id');
    }
    public function index()
	{
		$data['page_name']='home';
		$this->load->view('home/home');
	}

	public function food()
	{
		$data['page_name']='food';
		$this->load->view('home/layouts/main',$data);
	}
	public function ecomecers()
	{
		$data['page_name']='ecomecers';
		$this->load->view('home/layouts/main',$data);
	}
	public function grocery()
	{
		$data['page_name']='grocery';
		$this->load->view('home/layouts/main',$data);
	}
	public function real()
	{
		$data['page_name']='realestate';
		$this->load->view('home/layouts/main',$data);
	}
	public function testomonial()	
	{

		$this->load->view('backend/admin/testomonial');
	}
	/*public function testomonial_insert()
	{
		$post=$this->input->post();

		$data=[
			'name'=>$post['name'],
			'client'=>md5($post['clinet']) 	

		];
		$user=$this->crud_model->create_testomonial($data);
	}*/
	public function conditions($type){
        if($type=='terms'){
            $title='Terms & Conditions';
        }elseif($type=='privacy'){
            $title='Privacy Policy';
        }
        $page_data['page_title'] = $title;
        $page_data['page_name'] = 'conditions';
        $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => $type))->row()->description;
        $page_data['type'] = $type;
        $this->load->view('front/index', $page_data);
    }
    /*Added*/
	   public function open_page1($client_id)
    {
        /*$client_id = base64_decode($client_id);
        $theme_type = $this->crud_model->get_theme_type_by_client_id($client_id);

        switch ($theme_type) {
            case 1:
                
                break;
            case 2:
                redirect('grocery');
                break;
            case 3:
                redirect('ecommerce');
                break;
            // Add more cases for other theme types if needed
            default:
                redirect('default_page'); // Redirect to a default page if theme_type is not recognized
                break;
        }*/
        echo "string";
    }
    /*Added*/     
}
