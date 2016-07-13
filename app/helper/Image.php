<?php 

namespace App\Helper;

class Image{
	

	protected   $errors ;

	public function upload($name) 
	{

		  $errors= [];

	      $file_name = $_FILES[$name]['name'];
	      $file_size =$_FILES[$name]['size'];
	      $file_tmp =$_FILES[$name]['tmp_name'];
	      $file_type=$_FILES[$name]['type'];
	      $file_ext=strtolower(end(explode('.',$_FILES[$name]['name'])));
	      
	      $expensions= array("jpeg","jpg","png");
	      
	      if(in_array($file_ext,$expensions)=== false){
	         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	      }
	      
	      if($file_size > 2097152){
	         $errors[]='File size must be excately 2 MB';
	      }

	      $this->errors = $errors;

	      
	      if(empty($errors)==true){
	         move_uploaded_file($file_tmp,"images/".$file_name);
	         return $file_name;
	      }else{

	      	return false;

	      }
	}

	public function getError()
	{
		

		return $this->errors;

	}

}