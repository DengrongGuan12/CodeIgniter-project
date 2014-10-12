<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/10/2
 * Time: 13:27
 */
class Pages extends CI_Controller{
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
    public function views($page='home'){

        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
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
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
    public function login(){
       $name=$_POST['name'];
       $password=$_POST['password'];
        echo  $password;
       $this->load->model('user_model');
       $real_password=$this->user_model->getPasswordByName($name);
        echo $real_password;
        if($real_password===$password){
            $newdata=array(
                'status'=>'OK',
                'name'=>$name
            );
            $this->session->set_userdata($newdata);
            redirect('pages/views');
        }else{
            redirect('pages/views');
        }

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('pages/views');
    }
    public function sign(){
        $name=$_POST['name'];
        $password=$_POST['password'];


    }
    public function self_info($page='myinfo'){
        $status=$this->session->userdata('status');
        $name=$this->session->userdata('name');
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
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
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
}
?>