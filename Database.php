	<?php 
	class Database {

	public $host = DB_HOST;
	public $host2 = DB_HOST_LAPTOP;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;

	public $link;
	public $link2;
	public $error;

	public function __construct() {
		
			//Call Connect Function
		$this->connect();

}
	/**
	 * Connector
	 */
	private function connect() {

/* WORKING but no objectorientation

		if ($check_pc = mysqli_connect ("127.0.0.1:3307", "root", "", "shoutit")) {
	
	echo "Connected to PC database";;
}
elseif ($check_laptop = mysqli_connect ("localhost", "root", "", "shoutit")){
	echo "Connected to Laptop";
}

if (isset($check_pc)) {
	$con = $check_pc;
}
elseif (isset($check_laptop)) {
	$con = $check_laptop;
}
*/


		/*
		$this->link = new mysqli($this->host,$this->username, $this->password, $this->db_name);
		$this->link2 = new mysqli($this->host2,$this->username, $this->password, $this->db_name);

*/
		if ($check_laptop = mysqli_connect("localhost", "root", "pswhXFxbUwCsFy2C", "blog")) 
		{
			$this->link = new mysqli($this->host2,$this->username, $this->password, $this->db_name);
			echo "Connected to PC database";
			exit;
			if(!$this->link){
				$this->error = "Connection to Laptop Failed: ".$this->link->connect_error;
				return false;
			}
			
			else{
				die("Kagge");
			}
		}

		elseif ($check_pc = mysqli_connect ("127.0.0.1:3307", "root", "pswhXFxbUwCsFy2C", "blog")){

			$this->link = new mysqli($this->host,$this->username, $this->password, $this->db_name);

		if (!$this->link)
		{
			$this->error = "Connection to PC Failed: ".$this->link->connect_error;
			return false;
				}
			}
		}
	

	
	/**
	 * Select
	 */

	public function select ($query){

		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if ($result->num_rows > 0){
			return $result;
		}
			else {
				return false;
			}
		}
	

	/**
	 * INsert
	 */
	
	public function insert(){
		$instert_row = $this->link->query($query) or die($this->linke->error.__LINE__);
			//Validate INsert
			if ($insert_row){
				header("Location: index.php?msg=".urlencode('Record added'));
			}

			else {
				die ('Error: ('.$this->link->errno .')'.$this->link->error);
			}
	}
	/**
	 * Delete
	 */
	
	public function delete () {
		$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
			//Validate delete
			if ($delete_row){
				header("Location: index.php?msg=".urlencode('Record Deleted'));
			}

			else {
				die ('Error: ('.$this->link->errno .')'.$this->link->error);
			}
	}
}
?>
