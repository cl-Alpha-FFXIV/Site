<?php

class User{

    private $db;
    
    public function __construct($db){
        $this->db = $db; 
    }


    public function is_logged_in(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            return true;
        }        
    }

	private function get_user_hash($username){    

        try {

            //echo $this->create_hash('demo');

            $stmt = $this->db->prepare('SELECT password FROM blog_members WHERE username = :username');
            $stmt->execute(array('username' => $username));
            
            $row = $stmt->fetch();
            return $row['password'];

        } catch(PDOException $e) {
            echo '<p class="error">'.$e->getMessage().'</p>';
        }
    }
   
   public function login($username,$password){    

        $hashed = $this->get_user_hash($username);
        
        if($hashed == $password){
            
            $_SESSION['loggedin'] = true;
            return true;
        }        
    }
	
	public function logout(){
        session_destroy();
    }
    
}

?>