<?php 


class model{
	public function connect ($databaseName = 
		'epiz_23395889_gain_experience'){
		  $dsn ="mysql:host=sql111.epizy.com;dbname=$databaseName";
		  $user = 'epiz_23395889';
		  $pass ='g5mvcx3b';
		  $option = array(\PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');

		  try{
			    $con = new \PDO($dsn,$user,$pass,$option);
			    $con ->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
			   return $con;
		   }
		  catch(\PDOException $e){
		    echo 'you fail to connect to your databse'.$e ->getMessage();
		    
		  }
	}

private function make_Sql_Statement(){
   	$sqlStatement ='';
      foreach (static::$table_schema as $value) {
      	$sqlStatement .=$value ." = ? , "; 
      }
      return trim($sqlStatement, ', ');
   }
 
public  function bulidNameParameteSql(){
    		$nameParms = '';
    		foreach(static ::$table_schema as $value ){
    		  $nameParms .= $value . ' = :' . $value .', ';
    		}
    	return trim($nameParms,', ') ;
  }
public function insert(){
	   $create = static::$table_name;
	   	 $satement = self::connect()->prepare("INSERT INTO $create SET ". self::bulidNameParameteSql());
  	   	foreach(static::$table_schema as $value){
                  $satement ->bindParam(":{$value}", $this->$value);
             }
        $satement->execute();

}
  public function fetch_all_data(){
  	
      $table_name = static::$table_name;
      $getCate = self::connect()->prepare("SELECT * FROM {$table_name}");
      $getCate ->execute();
      $StorDate = $getCate->fetchAll(\PDO::FETCH_ASSOC);
      return $StorDate;
      
   }


}

