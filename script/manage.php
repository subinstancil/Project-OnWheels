<?php
class connect{
	public function db_connect()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("vcs");
	}
	public function execute($q)
	{

             $r=mysql_query($q);
             return $r;
	}
	public function exist($v,$c,$t)
	{
		$r=mysql_query("select * from $t where $c='$v'");
		return mysql_num_rows($r);
	}
}
class secure{
	public $error;
	public function valid($a)
	{
		$a=stripcslashes($a);
		$a=htmlspecialchars($a);
		$a=strip_tags($a);
		
		return $a;
	}
	public function name($a)
	{
		if(empty($a))
		{
			$this->error[0]="Invalid Name";
		}
		if(!preg_match("/^[a-zA-Z]{1}+[a-z A-Z]{2,16}$/",$a))
		{
			$this->error[0]="Invalid Name";
		}
	} 
	public function mob($a)
	{
		if(empty($a))
		{
			$this->error[1]="Invalid Mobile";
		}
		if(!preg_match("/^[7-9]{1}+[0-9]{9}$/",$a))
		{
			$this->error[1]="Invalid Mobile";
		}
	}
	public function num($a)
	{
		if(empty($a))
		{
			$this->error[2]="Invalid Number";
		}
		if(!is_numeric($a)){
			$this->error[2]="Invalid number";
		}
	}
	public function email($a)
	{
		if(empty($a))
		{
			$this->error[3]="Invalid Email";
		}
		if(!filter_var($a,FILTER_VALIDATE_EMAIL))
		{
			$this->error[3]="Invalid Email";
		}
	}
}



?>