<?php  
include "RegisterDACompany.php";

class RegisterCompany{
    public $id;
    public $Name;
    public $Address;
    public $Email;
    public $Password;
    public $numberOfEmployees;
    public $DA; //dataaccesslayer
    public $interests;

   
   public function get_form_values(){
       /*$firstname = mysqli_real_escape_string($_POST['firstname']);
       $lastname = mysqli_real_escape_string($_POST['lastname']);
       $email = mysqli_real_escape_string($_POST['email']);
       $password = mysqli_real_escape_string($_POST['password']);
       $age = mysqli_real_escape_string($_POST['age']);
       $gender = mysqli_real_escape_string($_POST['gender']);*/
     if(isset($_POST['registercompany_form'])){
       $this->Name =$_POST['Name'];
       $this->Address = $_POST['Location'];
       $this->Email = $_POST['Email'];
       $this->Password = $_POST['Password'];
       $this->numberOfEmployees =  $_POST['Employeenumber'];
       $this->interests  = $_POST['array']; 
 
           
   }
   }
    public function getDA(){
        $this->DA = new RegisterDACompany();
    }
        public function addinterests(){
        $this->DA->addinterests_db($this->id,$this->interests);
    }
    public function add_company(){
           $this->id = $this->DA->add_company_DB($this->Name,$this->Address,$this->Email,$this->Password,$this->numberOfEmployees);    
    }
    
}

//main 

    $R = new RegisterCompany();
    $R->get_form_values();
    $R->getDA();

    //$DA = new RegisterDA();
    $R->DA->startconnection();
    $R->add_company();
    $R->addinterests(); 
    
?>