<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/9/22
 * Time: 21:22
 */
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    function index(){
        $this->load->view('login_view');
    }
    function checklogin(){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $this->db->where('id',$name);
        $query=$this->db->get('security');
        $success=false;
        if($query->num_rows()>0){
            foreach($query->result() as $row){
                if($row->password==$password){
                    $success=true;
                    $newdata=array(
                        'status' => 'OK'
                    );
                    $this->session->set_userdata($newdata);
                    redirect('blog');
                    break;
                }
            }
        }else{
            redirect('login');
        }
        if(!$success){
            redirect('login');
        }


    }
}
?>