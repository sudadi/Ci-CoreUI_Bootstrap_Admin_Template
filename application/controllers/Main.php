<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
      $data = ['page'=>'dashboard'];
      $this->load->view('main', $data);
	}
    
    public function colors() {
      $data = ['page'=>'colors'];
      $this->load->view('main', $data);
    }
    
    public function typography() {
      $data = ['page'=>'typography'];
      $this->load->view('main', $data);
    }
    
    public function base($page) {
      $data = ['page'=>'base/'.$page];
      $this->load->view('main', $data);
    }
    
    public function buttons($page) {
      $data = ['page'=>'buttons/'.$page];
      $this->load->view('main', $data);
    }
    
    public function charts() {
      $data = ['page'=>'charts'];
      $this->load->view('main', $data);
    }
    
    public function icons($page) {
      $data = ['page'=>'icons/'.$page];
      $this->load->view('main', $data);
    }
    
    public function notifications($page) {
      $data = ['page'=>'notifications/'.$page];
      $this->load->view('main', $data);
    }
    
    public function widgets() {
      $data = ['page'=>'widgets'];
      $this->load->view('main', $data);
    }
    
    public function extras($page) {
      $data = ['page'=>$page];
      $this->load->view('extras', $data);
    }
}
