<?
/**
 * UserInjfo
 */
include "/array.php";
class User 
{
	var $id;
	var $login;
	var $password;
	var $nickname;
	var $email;
	var $date_registration;
	function userSetAllInfo($id){

	}
	function userGetInfoArray($request,$db){
		$sql = mysql_query($request ,$db);
		$arr= mysql_fetch_row($sql);
		global $user_arr;
		if($arr)
	  		foreach ($arr as $k => $val) {
				$array[$user_arr[$k]] = $val;
	  		}
		return $array;
	}
	function getId(){
		return $this->id;
	}
	function getLogin(){
		return $this->login;
	}
	function getPassword(){
		return $this->id;
	}
	// function getPa
}
?>