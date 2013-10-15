<?php


class Database
{
	private $db_host = '127.0.0.1';
	private $db_user = 'sarha';
	private $db_pass = 'sarha';
	private $db_name = 'sarha';
	
	public $dbconn;
	
	private $con = false;
	private $result = array();
	
	public function connect() { 
		if(!$this->con)
		{
			$this->dbconn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
			
			if($this->dbconn->connect_error)
			{
				trigger_error('Database connection failed: ' . $dbconn->connect_errno, E_USER_ERROR);
				$this->con = false;
				return false;
			} else 
			{
				$this->con = true;
				return true;
			}
				
			
		} else
		{
			return true;
		}
		
	}
	

	public function disconnect() { }
	public function select() { }
	public function insert() { }
	public function delete() {}
	public function update() {}
	
	
	public function query($query) {

		$rs = $this->dbconn->query($query);
		
		if($rs) {
			
			$rs->data_seek(0);
			$this->result = $rs->fetch_all(MYSQLI_ASSOC);
			
			return true;
		} else {
			trigger_error('Error ' . $dbconn->error, E_USER_ERROR);
			array_push($this->result, mysql_error());
			return false;
		}
	}
	
	public function getResult() {
		$val = $this->result;
		$this->result = array();
		return $val;
	}
	
	
	
	
	
}