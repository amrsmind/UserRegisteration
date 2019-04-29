<?php
class LoginDA{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('localhost',"root",'','usermanagement') or die("could not connect");
    }
    public function select_user_DB($firstname,$password){   

            if(isset($_POST['login_form'])){
            $query = "SELECT * FROM user WHERE firstname = '$firstname' AND password = '$password'";
            $result = mysqli_query($this->db,$query);


            if(!empty($row = mysqli_fetch_assoc($result))){
                session_start();
                $_SESSION['Login_User'] = $row['ID'];
                header('Location:Login.php?id='.$row['ID']);
            }
}

        return true;
    }
    
   
    
    
    
}


?>