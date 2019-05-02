<?php
class RegisterDACompany{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('127.0.0.1:3307',"root",'','usermanagement') or die("could not connect");
    }
    public function add_company_DB($Name,$Address,$Email,$Password,$numberOfEmployees){   
        
        if($this->check_dublicate_registercompany($Email)){
            return 0;
        }
            if(isset($_POST['registercompany_form'])){
             $query = "INSERT INTO company(Name,Email,password,Location,EmployeeNumber) VALUES ('$Name','$Email','$Password','$Address','$numberOfEmployees')";
             $result = mysqli_query($this->db,$query);
}
             $query2 = "select ID from company where Email = '$Email'";
             $result2 = mysqli_query($this->db,$query2);

             $row = mysqli_fetch_assoc($result2);
            if(!empty($row)){
                return $row['ID'];
                /*session_start();
                $_SESSION['Login_User'] = $row['ID'];
                header('Location:RegisterFormUser.php?id='.$row['ID']);*/
            }
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
    
        public function addinterests_db($id,$array){
        $num = count($array);
        if(isset($_POST['registercompany_form'])){
                for($i=0;$i<$num;$i++){
             $query = "INSERT INTO interests VALUES ('$array[$i]','$id',TRUE)";
             $result = mysqli_query($this->db,$query);
}
        }
    }
    
    
    
}


?>