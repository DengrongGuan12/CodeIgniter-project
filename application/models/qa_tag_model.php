<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/10/25
 * Time: 23:18
 */
class Qa_tag_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function insert($qa_id,$tag_id){
        $data=array(
            'qa_id'=>$qa_id,
            'tag_id'=>$tag_id
        );
        $this->db->insert('qa_tag',$data);
    }

}