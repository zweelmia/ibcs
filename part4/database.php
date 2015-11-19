<?php
class database{
	private $conn;
	
	public function __construct($host,$user,$pass,$db){
		$this->conn=mysqli_connect($host,$user,$pass,$db) or die("Connection Fail".mysqli_connect_error());
		
		session_start();
		
	}
	
	public function getAll($table,$cols){
		
		$sql="SELECT $cols FROM $table";
		
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
		}
		else{
			echo "empty Tabel";
		}
		
	}
	
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
	
		public function Login($table,$cols,$where){
		
		$sql="SELECT $cols FROM $table WHERE $where";
		
		$result=mysqli_query($this->conn,$sql);
		
		if(mysqli_num_rows($result)>0){
			
			$rows=mysqli_fetch_assoc($result);
			
			$_SESSION['user']=$rows['user'];
			
			return true;
			
		}
		else{
			 return false;
		}
		
	}
		
}

$obj=new database("localhost","root","","php61");