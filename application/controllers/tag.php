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
    public function all_questions($tag_id){

    }
}