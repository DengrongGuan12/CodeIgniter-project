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
    public function insert_user($name,$password,$date){
        $success=1;
        $this->db->select('name');
        $query = $this->db->get('user');
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                if($row->name==$name){
                    $success=0;
                    break;
                }
            }
        }
        if($success==0){
            return 0;
        }else{
            $head='default.gif';
            $credit=20;
            $data=array(
                'name'=>$name,
                'password'=>$password,
                'head'=>$head,
                'credit'=>$credit,
                'date'=>$date
            );
            return $this->db->insert('user',$data);
        }




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