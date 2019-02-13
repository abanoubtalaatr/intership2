<?php
require_once 'model.php';
class tasks_model extends model{
  public $id_for_task;
  public $title;
  public $description;
  public $id_for_receiver_task;
  public $date_of_send_task;
  public $date_of_end_task;
  public static $table_name = 'tasks';


  public static $table_schema =array(
   
   'id_for_task',
   'title',
   'description',
   'id_for_receiver_task',
   'date_of_send_task',
   'date_of_end_task'


 );


}