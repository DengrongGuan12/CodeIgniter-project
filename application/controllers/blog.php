<?php
/**
* 
*/
class Blog extends CI_Controller
{
	// function Blog(){
	// 	parent::Controller();
	// }
	function __construct(){
		parent::__construct();

		// $this->load->scaffolding('entries');
		$this->load->helper('url');
		$this->load->helper('form');
	}
	function index(){
		$data['title']="My Blog Title";
		$data['heading']="My Blog Heading";
		$data['todo']=array('clean house','eat lunch','call man');
		$data['query']=$this->db->get('entries');
		// echo "Hello World";
		$this->load->view('blog_view',$data);
	}
	function comments(){
		$data['title']="My Comment Title";
		$data['heading']="My Comment Heading";
		$this->db->where('entry_id',$this->uri->segment(3));
		$data['query']=$this->db->get('comments');
		$this->load->view('comment_view',$data);
	}
	function shoes($scandals,$id){
		echo "parameters:";
		echo $scandals;
		echo $id;
	}
	function comment_insert(){
		$this->db->insert('comments',$_POST);

		redirect('blog/comments/'.$_POST['entry_id']);
	}
    /*
     * 数据库查询语句的用法
     */
    function query_test(){
        $this->db->select('url','name','clientid','people.surnam
        e AS client');
        $this->db->where('clientid', '3');
        $this->db->limit(5);
        $this->db->from('sites');
        $this->db->join('people', 'sites.clientid = people.id');
        $this->db->orderby("name", "desc");
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            print $row->url;
            print $row->name;
            print $row->client;
        }

    }
    function insert_test(){
        $data = array(
            'url' => 'www.mynewclient.com',
            'name' => 'BigCo Inc',
            'clientid' => '33',
            'type' => 'dynamic'
        );
        $this->db->insert('sites', $data);
        $new_id_number = $this->db->insert_id();
    }
    function delete_test(){
        $this->db->where('id', '2');
        $this->db->delete('sites');
    }
    function update_test(){
        $data = array(
            'url' => 'www.mynewclient.com',
            'name' => 'BigCo Inc',
            'clientid' => '33',
            'type' => 'dynamic'
        );
        $this->db->where('id', '1');
        $this->db->update('sites', $data);
    }
}

?>