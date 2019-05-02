<?php  
include "LoginDACompany.php";

class LoginCompany{
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
      if(isset($_POST['logincompany_form'])){
       $this->Email = $_POST['Email'];
       $this->password = $_POST['password']; 
      }
      
   }
    public function getDA(){
        $this->DA = new LoginDACompany();
    }
        public function select_company(){
        $this->DA->select_company_DB($this->Email,$this->password);
    }
}

//main 

    $R = new LoginCompany();
    $R->get_form_values();
    $R->getDA();

    //$DA = new LoginDA();
    $R->DA->startconnection();
    $R->select_company();
  
    
?>