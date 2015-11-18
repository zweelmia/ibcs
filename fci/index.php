<?php
class database{
     public $conn;
     public function __construct($host,$user,$pass,$db){
     	$this->conn=mysqli_connect($host,$user,$pass,$db) or die("the cunnection fail".mysqli_connect_error());

     }

     public function getall($table,$cols){
     	$sql="SELECT $cols FROM $table";
     	echo($sql);
     	$result=mysqli_query($this->conn,$sql);
     		if(mysqli_num_rows($result)>0){
     			return mysqli_fetch_all($result,MYSQLI_ASSOC);
     		}
     	
     }

     public function getbyid($table,$cols,$where){
     	$sql="SELECT $cols FROM $table WHERE $where";
     	echo($sql);
     	$result=mysqli_query($this->conn,$sql);
     	if(mysqli_num_rows($result)>0){
     		return mysqli_fetch_assoc($result);
     	}

     }

     public function delete($table,$where){
     	$sql="DELETE FROM $table WHERE $where";
     	//echo($SQL);
     	$result=mysqli_query($this->conn,$sql);
     	if(mysqli_affected_rows($this->conn)>0){
			return true;
		}
		else{
			return false;	
		}
     }

     public function insert($table,$cols){
     	$sql="INSERT INTO $table SET $cols";
     	//echo($SQL);
     	$result=mysqli_query($this->conn,$sql);
     	if(mysqli_affected_rows($this->conn)>0){
			return true;
		}
		else{
			return false;	
		}
     }

     public function update($table,$cols,$where){
     	$sql="UPDATE $table SET $cols WHERE $where";
     	//echo($SQL);
     	$result=mysqli_query($this->conn,$sql);
     	if(mysqli_affected_rows($this->conn)>0){
			return true;
		}
		else{
			return false;	
		}
     }
     
}
$obj=new database("localhost","root","","fci");
echo "<pre>";
//print_r($obj->getall("student","*"));
//print_r($obj->getbyid("student","*","id=1"));
print_r($obj->update("student","name='zweel',age='30'","id=2"))?"update success":"update fail";
//print_r($obj->delete("student","id=1"))?"delete success":"delete fail";
//print_r($obj->INSERT("student","name='rahim',age='20',email='rahim34@gmail.com',mobile='01822057971'"))?"insert success":"insert fail";
echo "</pre>";


?>