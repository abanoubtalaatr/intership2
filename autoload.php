<?php
namespace gain_experience\library;
	spl_autoload_register(function ($class_name) {      
       $class_name = str_replace('gain_experience', '', $class_name);
       if(file_exists(main_path() . $class_name.'.php')){
       	 require_once main_path() . $class_name.'.php';
       }  
});

