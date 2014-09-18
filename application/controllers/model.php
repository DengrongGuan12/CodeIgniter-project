<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/9/18
 * Time: 20:23
 */
class Model extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('menu');
    }
    function test(){
        $mymenu=$this->menu->show_menu();
        $data['menu']=$mymenu;
        $this->load->view('model_test_view',$data);
    }
}