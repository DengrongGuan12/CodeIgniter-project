<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/9
 * Time: 19:18
 */
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function insert_user(){
        $head='default.gif';
        $credit=20;
        $data=array(
            'name'=>$this->input->post('name'),
            'password'=>$this->input->post('password'),
            'head'=>$head,
            'credit'=>$credit
        );



    }
    public function getPasswordByName($name){
        $password='';
        $query = $this->db->get_where('user', array('name' => $name));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $password=$row['password'];
        }
        return $password;

    }
}