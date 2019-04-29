<?php  
include "RegisterDAUser.php";

class RegisterUser{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $age;
    public $gender;
    public $DA; //dataaccesslayer
   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
     if(isset($_POST['register_form'])){
       $this->firstname =$_POST['firstname'];
       $this->lastname = $_POST['lastname'];
       $this->email = $_POST['email'];
       $this->password = $_POST['password'];
       $this->age =  $_POST['age'];
       $this->gender = $_POST['gender'];
   }
   if (isset($_POST['login_form'])){
   	$this->firstname =$_POST['firstname'];
   	 $this->password = $_POST['password'];
   }
   }
    public function getDA(){
        $this->DA = new RegisterDAUser();
    }
    public function returninterestsname(){
        $tempinterests = $this->DA->returninterestsname();
        return $tempinterests;
    }
}

//main 

    $R = new RegisterUser();
    $R->get_form_values();
    $R->getDA();

    //$DA = new RegisterDA();
    $R->DA->startconnection();
    $R->DA->add_user_DB($R->firstname,$R->lastname,$R->email,$R->password,$R->age,$R->gender);    
    
?>