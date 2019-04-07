<?php  
include "LoginDA.php";

class Login{
    public $firstname;
    public $password;
    public $DA; //dataaccesslayer
   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
       $this->firstname = (isset($_POST['firstname'])) ? $_POST['firstname']:'';
       $this->password = (isset($_POST['password'])) ? $_POST['password']:'';
      
   }
    public function getDA(){
        $this->DA = new LoginDA();
    }
}

//main 

    $R = new Login();
    $R->get_form_values();
    $R->getDA();

    //$DA = new LoginDA();
    $R->DA->startconnection();
    $R->DA->select_user_DB($R->firstname,$R->password);    
    
?>