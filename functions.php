<?php
// Function to fix a string of user input
function fix_string($input, $nl2br = true, $parsehtml = false, $trim = true)
{
	// Parse HTML
	if ($parsehtml)
		$input = htmlspecialchars($input, ENT_QUOTES);
	else
		$input = htmlentities($input, ENT_QUOTES);

	// New line to line break
	if ($nl2br)
		$input = nl2br($input);

	// Trim input
	if ($trim)
		$input = trim($input);
	
	// Return string
	return $input;
}

//Error handling class to make things easier
class Error
{
	public $errorCount;
	private $errors;
	public $header;
	public $footer;
	
	//Construction
	 function __construct(){
		$this->errorCount = 0;
		$this->errors = array();
		$this->header = "<b>There were one or more errors.</b><br/>";
		$this->footer = "<i>Contact a website administrator if you continue to have problems.</i><br/><br/>";
	}
	public function Error(){
		$this.__construct();
	}
	
	//Change the header text
	public function setHeader($n){
		$this->header = $n;
	}
	
	public function setFooter($n){
		$this->footer = $n;
	}
	
	//Add the error text to the error array
	public function add($error){
		$this->errors[$this->errorCount] = $error;
		$this->errorCount+=1;
	}
	
	//Have errors?
	public function hasErrors(){
		return ($this->errorCount>0);
	}
	
	///Output errors.
	public function output(){
		$output = $this->header;
		for($i = 0; $i<$this->errorCount; $i++)
		{
			$output = $output.
			"<div class='error'>".$this->errors[$i]."</div>";
		}
		$output = $output.$this->footer;
		return $output;
	}
	
	public function clear(){
		$this->errorCount = 0;
		unset($this->errors);
		$this->errors = array();
		$this->header = "<b>There were one or more errors.</b><br/>";
		$this->footer = "<i>Contact a website administrator if you continue to have problems.</i><br/><br/>";
	}
}

class DB{
	public $connected;
	public $errors;
	private $conn;
	private $db;
	
	//Construction
	 function __construct(){
		$this->connected = false;
		$this->error = new Error;
		$this->error->setHeader("<b>DATABASE ERROR</b>");
	}
	public function Error(){
		$this.__construct();
	}
	
	//Connect to default database by default
	public function connect($db = DATABASE){
		$this->conn=mysql_connect(DB_HOST,DB_USER,DB_PASS);
		if($this->conn !== false) //If success
		{
			//Try to select database
			$this->connected = true;
			$this->db = mysql_select_db($db);
			if($this->db === false)
			{
				$this->error->add("Unable to select mysql database.");
				$connected = false;
			}
		}
		else
		{
			$this->error->add("Unable to connect to mysql database.");
		}
	}
	
	//Query if connected
	public function query($query){
		if($this->connected)
		{
			$result = @mysql_query($query);
			if($result === false)
			{
				$this->error->add("Mysql error: ".mysql_error());
			}
			return $result;
		}
		else
		{	
			return false;
		}
	}
	
	//Close
	public function close(){
		if($this->connected)
		{
			mysql_close($this->conn);
		}
	}
}
?>

