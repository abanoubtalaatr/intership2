<?php 

require_once 'main.php';
require_once 'news.php';
require_once 'profile.php';
require_once 'remove.php';
require_once 'about.php';
require_once 'contact.php';
require_once 'projects.php';
require_once 'admin.php';
require_once 'dashboard.php';
require_once 'back_project.php';
require_once 'back_news.php';
require_once 'back_news_add.php';
require_once 'back_news_all.php';
require_once 'back_project_add.php';
require_once 'back_project_all.php';
require_once 'post.php';
require_once 'tasks.php';
class manageSite{
  public $pageName ='main' ;
  public $action = 'default';
  public $the_rest_of_link =[];
  public $name_of_account = '';

 
   public function __construct(){
         self::parseurl();
   }
   public function parseurl(){
     $url = explode ('/',trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'),3);

      
       if(isset($url[0]) && $url[0] !==''){
            $this->pageName = $url[0];

       }
       if(isset($url[1]) && $url[1]!=='' ){
           $this->action = $url[1];
       }

      if(isset($url[2]) && $url[2]!=='' ){
        $this->the_rest_of_link = $url[2];
       }
    
   }
   public function get_page(){
    $class_page = $this->pageName;

     $actionName = $this->action . "Action";

     $page = new $class_page();
       
     $page->set_pageName($this->pageName);  
     $page->set_action($this->action);
     $page->set_the_rest_of_link($this->the_rest_of_link);

     $page->$actionName();
  
    
  }
  

}