<?php 
require_once 'controller.php';
require_once 'posts_model.php';
class news extends controller{
	
 public function __construct(){
 	self::fetch_date();
 }
  public function defaultAction(){
  	self::view();
  }
 public function notfound(){}
 public function addAction (){
 	self::view();
 }


  public function fetch_date(){
     
      $posts = new posts_model();
      $this->data['posts'] =  $posts->fetch_all_data();
      
    }

}