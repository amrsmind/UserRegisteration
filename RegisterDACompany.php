<?php
class RegisterDACompany{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('localhost',"root",'','usermanagement') or die("could not connect");
    }
    public function add_company_DB($Name,$Address,$Email,$Password,$numberOfEmployees){   
        
             ///insert the user to db 
        if($this->check_dublicate_registercompany($Email)){
            return false;
        }
            if(isset($_POST['registercompany_form'])){
             $query = "INSERT INTO company(Name,Address,Email,Password,numberOfEmployees) VALUES ('$Name','$Address','$Email','$Password','$numberOfEmployees')";
             $result = mysqli_query($this->db,$query);
}
             $query2 = "select ID from company where Email = '$Email'";
             $result2 = mysqli_query($this->db,$query2);

             $row = mysqli_fetch_assoc($result2);
            if(!empty($row)){
                session_start();
                $_SESSION['Login_Company'] = $row['ID'];
                header('Location:RegisterCompany.php?id='.$row['ID']);
            }
        return true;
    }
    
    public function check_dublicate_registercompany($Email){
        //check if email has registered before 
         $query = "select * from company where Email = '$Email' limit 1";

         $result = mysqli_query($this->db,$query);
         $company = mysqli_fetch_assoc($result);

         if($company){
             return true; //registered before
              }
        return false;

              //////////
    }
    
    
    
}


?>