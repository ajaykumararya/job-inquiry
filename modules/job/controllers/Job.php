<?php
class Job extends Admin_Controller{
    function __construct(){
        parent :: __construct();
    }
    function category(){
        $this->view('category');
    }

    function sub_category(){
        $this->view('sub-category');
    }

    function add(){
        $this->view('add');
    }

    function list(){
        $this->view('list');
    }
}
