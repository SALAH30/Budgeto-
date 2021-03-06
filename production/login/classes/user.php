<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();
    
    	$this->_db = $db;
    }

	private function get_user_hash($username){	

		try {
			$stmt = $this->_db->prepare('SELECT motpasse , id FROM user WHERE nomuser = :username AND active="Yes" ');
			$stmt->execute(array('username' => $username));
			
			$row = $stmt->fetch();
			$tab = array($row['id'] , $row['motpasse']);
			return $tab;

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}



	public function login($username,$password){


		$hashed = $this->get_user_hash($username);

		if($this->password_verify($password,$hashed[1]) == 1){
		    $_SESSION['iduser']=$hashed[0];
		    $_SESSION['loggedin'] = true;
		    return array(true , $hashed[0]);
		} 
		else return array(false , false);	
	}
		
	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}		
	}

	public function delete($username){
		
		try {
			$stmt = $this->_db->prepare('DELETE  FROM user WHERE nomuser = :username ');
			$stmt->execute(array('username' => $username));

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}
	
}


?>