<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/10/29
 * Time: 10:14
 */
class Answer_question extends CI_Controller{
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
    //回答问题，参数为问题id
    public function answer($id){
        if($this->session->userdata('status')!='OK'){
            redirect('pages/loginpage');
        }else{
            $status=$this->session->userdata('status');
            $name=$this->session->userdata('name');
            if ( ! file_exists(APPPATH.'/views/answer.php'))
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

            $this->load->model('qanda_model');
            $data['title']=$this->qanda_model->getTitleById($id);
            $data['qid']=$id;

            $this->load->view('templates/header', $data);
            $this->load->view('answer', $data);
            $this->load->view('templates/footer', $data);


        }


    }
    public function getData(){
        $qid=$_POST['qid'];
        $content=$_POST['content'];
        $name=$this->session->userdata("name");
        $this->load->model("qanda_model");
        $this->qanda_model->insertAnswer($content,$name,$qid);
        echo("submit-success");


    }
}