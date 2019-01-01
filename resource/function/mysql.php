<?
/**
 * MySql User - connetc and exit function.
 */
class MySqlUser
{
	public $db;
	public $server = "localhost";
	public $login = "root";
	public $password = "";
	public $name_db = "cyberbattle";
	
	public function close(){
		mysql_close($this->$db);
	}
	public function connect(){		
  		$this->$db = mysql_connect($this->$server,$this->$login,$this->$password);
  		mysql_select_db($this->$name_db,$this->$db);
	}
}
?>