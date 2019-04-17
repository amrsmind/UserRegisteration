<?php  
include "RegisterDACompany.php";

class RegisterCompany{
    public $Name;
    public $Address;
    public $Email;
    public $Password;
    public $numberOfEmplyees;
    public $DA; //dataaccesslayer
   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
     if(isset($_POST['registercompany_form'])){
       $this->Name =$_POST['Name'];
       $this->Address = $_POST['Address'];
       $this->Email = $_POST['Email'];
       $this->Password = $_POST['Password'];
       $this->numberOfEmplyees =  $_POST['numberOfEmployees'];
   }
   if (isset($_POST['logincompany_form'])){
   	  $this->name =$_POST['name'];
   	  $this->password = $_POST['password'];
   }
   }
    public function getDA(){
        $this->DA = new RegisterDACompany();
    }
}

//main 

    $R = new RegisterCompany();
    $R->get_form_values();
    $R->getDA();

    //$DA = new RegisterDA();
    $R->DA->startconnection();
    $R->DA->add_company_DB($R->Name,$R->Address,$R->Email,$R->Password,$R->numberOfEmplyees);    
    
?>