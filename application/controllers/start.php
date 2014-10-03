<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/9/18
 * Time: 17:31
 */
class Start extends CI_Controller{
    var $base;
    var $css;
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->base=$this->config->item('base_url');
        $this->css=$this->config->item('css');

    }
    function hello($name='default name'){
        $data['css']=$this->css;
        $data['base']=$this->base;
        $data['mytitle']='welcome to this site!';
        $data['mytext']="Hello, $name,now we are getting dynamic!";
        $this->load->view('testview',$data);
    }
}
?>