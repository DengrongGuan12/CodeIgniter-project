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

    }
    public function views($page='home'){

        $status=$this->session->userdata('status');
        $email=$this->session->userdata('email');
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // 页面不存在
            show_404();
        }
        $data['status']=$status;
        $data['email']=$email;
        $data['base']=$this->base;
        $data['css']=$this->css;
        $data['js']=$this->js;
        $data['images']=$this->images;
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
    public function login(){
       $email=$_POST['email'];
        $password=$_POST['password'];
        if($email=='123@qq.com' && $password=='12345'){
            $newdata=array(
                'status'=>'OK',
                'email'=>$email
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
        echo($_POST['email']);
        echo("<br />");
        echo($_POST['password1']);
    }
}
?>