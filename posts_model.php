<?php
require_once 'model.php';
class posts_model extends model{
  public $title;
  public $description;
  public $date;
  public static $table_name = 'posts';


  public static $table_schema =array(
   
   'title',
   'description',
   'date'


 );


}