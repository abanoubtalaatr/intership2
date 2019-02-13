<?php
require_once 'posts_model.php';

class post extends controller{


public function __construct(){
	self::default();

}
public function defaultAction(){}
public function notfound(){}


public function default(){
	if(isset($_POST['title']) AND isset($_POST['description'])
	 && $_POST['title'] !=='' && $_POST['description'] !==''){

		$post = new posts_model();
		$post->title = $_POST['title'];
		$post->description = $_POST['description'];
		$post->date = date('Y/m/d h:i:s a', time());

		$post->insert();
	}
  
  }
	
}