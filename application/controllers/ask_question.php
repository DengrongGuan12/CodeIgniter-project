<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/21
 * Time: 14:57
 */
class Ask_question extends CI_Controller{
    var $base;
    var $css;
    var $js;
    var $images;
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->base=$this->config->item('base_url');
        $this->css=$this->config->item('css');
        $this->js=$this->config->item('js');
        $this->images=$this->config->item('images');
        $this->heads=$this->config->item('heads');

    }
    public function ask(){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/ask.php'))
        {
            // 页面不存在
            show_404();
        }
        $data['status']=$status;
        $data['name']=$name;
        $data['base']=$this->base;
        $data['css']=$this->css;
        $data['js']=$this->js;
        $data['images']=$this->images;
        $data['heads']=$this->heads;

        $this->load->view('templates/header', $data);
        $this->load->view('ask', $data);
        $this->load->view('templates/footer', $data);
    }
    public function getData(){
        $str = $_POST['content'];

        echo $str;

    }
}