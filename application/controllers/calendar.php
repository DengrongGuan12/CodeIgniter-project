<?php
/**
 * Created by IntelliJ IDEA.
 * User: soft
 * Date: 2014/10/7
 * Time: 16:51
 */
class Calendar extends CI_Controller{
    public function index(){
        $this->load->library('calendar');

        echo $this->calendar->generate();
    }
}