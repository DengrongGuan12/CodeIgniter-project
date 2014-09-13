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
}

?>