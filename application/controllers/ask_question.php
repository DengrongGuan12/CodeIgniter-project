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

        $this->load->model('tag_model');
        $data['tags']=$this->tag_model->getAllTags();
        $this->load->model('user_model');
        $data['credit']=$this->user_model->getCreditByName($name);




        $this->load->view('templates/header', $data);
        $this->load->view('ask', $data);
        $this->load->view('templates/footer', $data);
    }
    public function getData(){
        $name=$this->session->userdata('name');
        $content = $_POST['content'];
//        echo($content);

        $title=$_POST['title'];
//        echo($title);
        $credit=$_POST['credit'];
        $this->load->model('qanda_model');
        $id=$this->qanda_model->insertQuestion($title,$content,$name,$credit);
//        echo($id);
        echo($this->qanda_model->getContentById($id));


    }
}