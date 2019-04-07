<?php
class RegisterDA{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('localhost',"root",'','usermanagement') or die("could not connect");
    }
    public function add_user_DB($firstname,$lastname,$email,$password,$age,$gender){   

             ///insert the user to db 
        if($this->check_dublicate_register($email)){
            return false;
        }
            if(isset($_POST['register_form'])){
             $query = "INSERT INTO user(FirstName,LastName,Email,password,Age,Gender) VALUES ('$firstname','$lastname','$email','$password','$age','$gender')";
             $result = mysqli_query($this->db,$query);
}
             $query2 = "select ID from user where Email = '$email'";
             $result2 = mysqli_query($this->db,$query2);

             $row = mysqli_fetch_assoc($result2);
            if(!empty($row)){
                session_start();
                $_SESSION['Login_User'] = $row['ID'];
                header('Location:Register.php?id='.$row['ID']);
            }
        return true;
    }
    
    public function check_dublicate_register($email){
        //check if email has registered before 
         $query = "select * from user where Email = '$email' limit 1";

         $result = mysqli_query($this->db,$query);
         $user = mysqli_fetch_assoc($result);

         if($user){
             return true; //registered before
              }
        return false;

              //////////
    }
    
    
    
}


?>