<?php

class controller{
  public  $pageName;
  public  $action;
  public  $the_rest_of_link;
  public $data = [];

 
  public function set_pageName($pageName){
    $this->pageName = $pageName;
  }
  public function set_action ($action){
    $this->action = $action;
  }
  public function set_the_rest_of_link($rest){
    $this->the_rest_of_link = $rest;
  }

   public function view(){

       require_once 'header.php';
       require_once 'default_'.$this->pageName."_view.php";
       require_once $this->pageName .'_js.php';
       require_once 'footer_js.php'; 
      

}

}