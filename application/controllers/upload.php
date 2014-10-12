<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/9
 * Time: 9:03
 */
class Upload extends CI_Controller {
    var $base;
    var $heads;
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->base=$this->config->item('base_url');
        $this->heads=$this->config->item('heads');
    }

    function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    function do_upload()
    {
        $config['upload_path'] = 'application/images/heads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name']='1.gif';
        $config['overwrite']=true;
        $config['max_size'] = '2000';
        $config['max_width']  = '0';
        $config['max_height']  = '0';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data(),'heads'=>$this->heads,'base'=>$this->base);

            $this->load->view('upload_success', $data);
        }
    }
}