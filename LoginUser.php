<?php  
include "LoginDAUser.php";

class LoginUser{
    public $Email;
    public $password;
    public $DA; //dataaccesslayer
   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
      if(isset($_POST['login_form'])){
       $this->Email = $_POST['Email'];
       $this->password = $_POST['password']; 
      }
      
   }
    public function getDA(){
        $this->DA = new LoginDAUser();
    }
    public function select_user(){
        $this->DA->select_user_DB($this->Email,$this->password);
    }
}

//main 

    $R = new LoginUser();
    $R->get_form_values();
    $R->getDA();

    //$DA = new LoginDA();
    $R->DA->startconnection();
    $R->select_user();
    
?>