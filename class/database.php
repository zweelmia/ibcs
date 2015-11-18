<?php
class Database{
	
	public $conn;
	
	public function __construct($host,$user,$pass,$db){
		
		$this->conn=mysqli_connect($host,$user,$pass,$db) or die("Connection Fail!".mysqli_connect_error());
			
	}
	//this is getall
	
	
	public function getAll($table,$cols,$where){
		
		$sql="SELECT $cols FROM $table WHERE $where";
		//echo $sql;
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			return mysqli_fetch_assoc($result);	
		}
	}
	
	// this is update
			
		public function Delete($table,$where){
		$sql="DELETE FROM $table WHERE $where";
		
		$result=mysqli_query($this->conn,$sql);
		if(mysqli_affected_rows($this->conn)>0){
		return true;
		
		}
		else{
		return false;
		}
		}

		//this is getall

		public function getById($table,$cols,$where){
		
		$sql="SELECT $cols FROM $table WHERE $where";
		
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			
			return mysqli_fetch_assoc($result);
			
		}
		else{
			echo "empty Tabel";
		}
		
	}
	//this is updet

	public function Update($table,$cols,$where){
		
		$sql="UPDATE $table SET $cols WHERE $where";
		
			$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_affected_rows($this->conn)>0){
			
			return true;
			
		}
		else{
			return false;	
		}
		
	} 

	//this is insert

		public function Insert($table,$cols){
		
		$sql="INSERT INTO $table SET $cols";
		
			$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_affected_rows($this->conn)>0){
			
			return true;
			
		}
		else{
			return false;	
		}
		
	}
	
	
	
	
}


$obj=new Database("localhost","root","","php67");
//echo "<pre>";
//print_r($obj->getAll("employees","*"));
	
	?>