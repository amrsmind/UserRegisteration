<?php
class RegisterDAUser{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('127.0.0.1:3307',"root",'','usermanagement') or die("could not connect");
    }
    public function add_user_DB($firstname,$lastname,$email,$password,$age,$gender){   //return id
        
             ///insert the user to db 
        if($this->check_dublicate_register($email)){
            return 0;
        }
            if(isset($_POST['register_form'])){
             $query = "INSERT INTO user(FirstName,LastName,Email,password,Age,Gender) VALUES ('$firstname','$lastname','$email','$password','$age','$gender')";
             $result = mysqli_query($this->db,$query);
}
             $query2 = "select ID from user where Email = '$email'";
             $result2 = mysqli_query($this->db,$query2);

             $row = mysqli_fetch_assoc($result2);
            if(!empty($row)){
                return $row['ID'];
                /*session_start();
                $_SESSION['Login_User'] = $row['ID'];
                header('Location:RegisterFormUser.php?id='.$row['ID']);*/
            }
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
    public function returninterestsname(){
        $query = "SELECT distinct Name FROM interests";
        $result = mysqli_query($this->db,$query);
        $options = "";
        while($row = mysqli_fetch_array($result)){
            $options = $options."<option value='$row[0]'>$row[0]</option>";
        } 
        return $options;
    }
    public function addinterests_db($id,$array){
        $num = count($array);
        if(isset($_POST['register_form'])){
                for($i=0;$i<$num;$i++){
             $query = "INSERT INTO interests VALUES ('$array[$i]','$id',FALSE)";
             $result = mysqli_query($this->db,$query);
}
        }
    }
    
}


?>