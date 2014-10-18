<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/15
 * Time: 16:33
 */
class Qanda_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function getQidByName($name=""){
        $ids=array();
        $this->db->where('user_name',$name);
        $this->db->where('to_id',0);
        $this->db->select('id');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('qanda', 4, 0);
//        $query = $this->db->get_where('qanda', array('name=' => $name));
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                array_push($ids,$row->id);
//                echo $row->id;
            }
        }
        return $ids;
    }
    public function getTitleById($id=0){
        $this->db->select('title');
        $query = $this->db->get_where('qanda', array('id' => $id));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $title=$row['title'];
        }
        return $title;

    }
    public function getContentById($id=0){
        $this->db->select('content');
        $query = $this->db->get_where('qanda', array('id' => $id));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $content=$row['content'];
        }
        return $content;

    }
    public function getTo_idByName($name){
        $to_ids=array();
        $query = $this->db->query("SELECT id, to_id FROM qanda WHERE user_name = '$name' AND to_id!= 0 ORDER BY id desc LIMIT 4");
//        $this->db->where('user_name',$name);
//        $this->db->where('to_id!=',0);
//        $this->db->select('id,to_id');
//        $this->db->order_by("id", "desc");
//        $query = $this->db->get('qanda', 4, 0);
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $to_ids[$row->id]=$row->to_id;
//                echo $row->id;
            }
        }
        return $to_ids;


    }
    public function getQidByTo_id($to_id){
        while(TRUE){
            $id=$to_id;
            $this->db->where('id',$to_id);
            $this->db->select('to_id');
            $query=$this->db->get('qanda');
            if ($query->num_rows() > 0)
            {
                $row = $query->row_array();
                $to_id=$row['to_id'];
            }
            if($to_id==0){
                break;
            }
        }
        return $id;


    }
    public function getCreditById($id){
        $this->db->select('credit');
        $query = $this->db->get_where('qanda', array('id' => $id));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $credit=$row['credit'];
        }
        return $credit;

    }
    //获取第一层的所有回答的id和内容
    public function getAnswersByTo_id($id){
        $answers=array();
        $this->db->select('id,content');
        $query = $this->db->get_where('qanda', array('to_id' => $id));
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $answers[$row->id]=$row->content;
//                echo $row->id;
            }

        }
        return $answers;

    }
    public function getIfEndById($id){
        $this->db->select('end');
        $query = $this->db->get_where('qanda', array('id' => $id));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $end=$row['end'];
        }
        return $end;
    }
    public function deleteById($id){
        $this->db->where('id', $id);
        $this->db->delete('qanda');
    }
    public function getUserById($id){
        $this->db->select('user_name');
        $query = $this->db->get_where('qanda', array('id' => $id));
        if ($query->num_rows() > 0)
        {
            $row = $query->row_array();
            $user_name=$row['user_name'];
        }
        return $user_name;
    }

}
?>