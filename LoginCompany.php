<?php  
include "LoginDACompany.php";

class LoginCompany{
    public $Name;
    public $pPassword;
    public $DA; //dataaccesslayer
   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
       $this->Name = (isset($_POST['Name'])) ? $_POST['Name']:'';
       $this->Password = (isset($_POST['Password'])) ? $_POST['Password']:''; 
      
   }
    public function getDA(){
        $this->DA = new LoginDACompany();
    }
}

//main 

    $R = new LoginCompany();
    $R->get_form_values();
    $R->getDA();

    //$DA = new LoginDA();
    $R->DA->startconnection();
    $R->DA->select_company_DB($R->Name,$R->Password);    
    
?>