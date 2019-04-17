<?php
class LoginDAAdmin{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('localhost',"root",'','usermanagement') or die("could not connect");
    }
    public function select_admin_DB($firstname,$password){   

            if(isset($_POST['loginadmin_form'])){
            $query = "SELECT * FROM admin WHERE firstname = '$firstname' AND password = '$password'";
            $result = mysqli_query($this->db,$query);


            if(!empty($row = mysqli_fetch_assoc($result))){
                session_start();
                $_SESSION['Login_Admin'] = $row['ID'];
                header('Location:LoginAdmin.php?id='.$row['ID']);
            }
}

        return true;
    }
    
   
    
    
    
}


?>