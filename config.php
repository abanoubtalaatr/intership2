<?php
function url_of_site(){
	return "http://localhost/gain_experience";
}
function main_path (){
	return realpath(dirname(__FILE__));
}
function library_path(){
	return main_path() . '/library';
}
function view_path (){
	return main_path() . "\\view";
}
function appearance_path (){
	return main_path() . "\appearance";
}
function style_path(){
	return main_path() . "\style";
}
function javascript_path(){
	return main_path() . "\javascript";
}
