<?php
class LoginDAUser{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('127.0.0.1:3307',"root",'','usermanagement') or die("could not connect");
    }
    public function select_user_DB($Email,$password){   

            if(isset($_POST['login_form'])){
            $query = "SELECT * FROM user WHERE Email = '$Email' AND password = '$password'";
            $result = mysqli_query($this->db,$query);


            if(!empty($row = mysqli_fetch_assoc($result))){
                session_start();
                $_SESSION['Login_User'] = $row['ID'];
                header('Location:LoginUSer.php?id='.$row['ID']);
            }
                else{
                    return false;
                }
}

        return true;
    }
    
   
    
    
    
}


?>