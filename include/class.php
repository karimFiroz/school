<?php
class MyClass{
		public $con;
		
		public function __construct(){
			$this->con=new Mysqli('localhost','root','','test');
			if($this->con->connect_error){
				die("error:".$this->con->connect_error);
				}
			}
		public function query($sql){
			return $this->con->query($sql);
		}
	}
?>	