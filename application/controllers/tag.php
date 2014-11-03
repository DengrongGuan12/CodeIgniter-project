<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/27
 * Time: 19:30
 */
class Tag extends CI_Controller{
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
    //根据标签id显示该标签下的所有问题
    public function all_questions_of_tag($tag_id){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/all_questions_of_tag.php'))
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

        $this->load->model('qa_tag_model');
        $qids=$this->qa_tag_model->getQidsByTagid($tag_id);

        $this->load->model('qanda_model');
        $title=array();
        $date=array();
        $user=array();
        foreach($qids as $id){
            $title[$id]=$this->qanda_model->getTitleById($id);
            $date[$id]=$this->qanda_model->getDateById($id);
            $user[$id]=$this->qanda_model->getUserById($id);
        }
        $data['ids']=$qids;
        $data['titles']=$title;
        $data['dates']=$date;
        $data['users']=$user;

        $this->load->model('tag_model');
        $data['tag']=$this->tag_model->getNameById($tag_id);

        $this->load->view('templates/header', $data);
        $this->load->view('all_questions_of_tag', $data);
        $this->load->view('templates/footer', $data);



    }
    public function all_tags(){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/all_tags.php'))
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
        $tags=$this->tag_model->getAllTags();
        $data['tags']=$tags;
        $q_count_of_tag=array();
        $this->load->model('qa_tag_model');
        foreach(array_keys($tags) as $id){
            $q_count_of_tag[$id]=count($this->qa_tag_model->getQidsByTagid($id));
        }
        $this->load->model('sort');
        $sorted_ids=$this->sort->quick_sort(array_keys($tags),$q_count_of_tag);
        $data['sorted_ids']=$sorted_ids;
        $data['count']=$q_count_of_tag;



        $this->load->view('templates/header', $data);
        $this->load->view('all_tags', $data);
        $this->load->view('templates/footer', $data);

    }
    public function hot_tags(){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/hot_tags.php'))
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
        $tags=$this->tag_model->getAllTags();
        $data['tags']=$tags;

        $tag_praises=array();
        foreach(array_keys($tags) as $tag_id){
            $tag_praises[$tag_id]=0;
        }
        $this->load->model('praise_model');
        $this->load->model('qa_tag_model');
        $hot_qids=$this->praise_model->getHotQids();
        foreach(array_keys($hot_qids) as $qid){
//            echo($qid);
            $tag_ids=$this->qa_tag_model->getTagIdsByQid($qid);
            foreach($tag_ids as $tag_id){
//                echo($tag_id);
                $tag_praises[$tag_id]+=$hot_qids[$qid];
            }

        }
        $data['tag_praises']=$tag_praises;
        //快排
        $this->load->model('sort');
        $sorted_ids=$this->sort->quick_sort(array_keys($tags),$tag_praises);
        $data['sorted_ids']=$sorted_ids;



        $this->load->view('templates/header', $data);
        $this->load->view('hot_tags', $data);
        $this->load->view('templates/footer', $data);
    }
}