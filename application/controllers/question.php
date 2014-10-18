<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/15
 * Time: 21:10
 */
class Question extends CI_Controller{
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
    public function single_question($id=0){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/single_question.php'))
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

        $this->load->model();

        $this->load->view('templates/header', $data);
        $this->load->view('single_question', $data);
        $this->load->view('templates/footer', $data);


    }
    public function my_question($id=0){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/my_question.php'))
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
        $data['id']=$id;
        $data['title']=$this->qanda_model->getTitleById($id);
        $data['content']=$this->qanda_model->getContentById($id);
        $data['credit']=$this->qanda_model->getCreditById($id);
        $data['end']=$this->qanda_model->getIfEndById($id);
        $answers=array();
        $answers=$this->qanda_model->getAnswersByTo_id($id);
        $this->load->model('praise_model');
        $data['ifPraise']=$this->praise_model->ifPraise($name,$id);
        foreach(array_keys($answers) as $aid){
            $content=$answers[$aid];
            $answers[$aid]=array($this->praise_model->ifPraise($name,$id),$content);
        }
        $data['answers']=$answers;

        $data['praise_count']=$this->praise_model->getNameCountById($id);


        $this->load->view('templates/header', $data);
        $this->load->view('my_question', $data);
        $this->load->view('templates/footer', $data);

    }
    public function cancel_praise($id){
        $name=$this->session->userdata('name');
        $this->load->model('praise_model');
        $this->praise_model->deleteByNameId($name,$id);
        redirect('question/my_question/'.$id);
    }
    public function praise($id){
        $name=$this->session->userdata('name');
        $this->load->model('praise_model');
        $this->praise_model->insert($name,$id);
        redirect('question/my_question/'.$id);
    }
    public function delete_my_question($id){
        $name=$this->session->userdata('name');
        $this->load->model('qanda_model');
        $credit=$this->qanda_model->getCreditById($id);
        $this->load->model('user_model');
        $this->user_model->addCreditByName($name,$credit);
        $this->qanda_model->deleteById($id);
        $this->load->model('praise_model');
        $this->praise_model->deleteById($id);
        redirect("pages/myinfo/");

    }
}