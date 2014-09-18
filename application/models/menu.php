<?php
/**
 * Created by IntelliJ IDEA.
 * User: gdr
 * Date: 2014/9/18
 * Time: 20:17
 */
class Menu{
    function show_menu(){
        $obj=& get_instance();
        $obj->load->helper('url');
        $menu=anchor('start/hello/fred',"Say hello to fred |");
        $menu.=anchor('start/hello/gdr12','Say hello to gdr12 |');
        return $menu;

    }
}