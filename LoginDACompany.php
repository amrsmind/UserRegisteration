<?php
class LoginDACompany{
    private $db;
    
    public function startconnection(){
        $this->db = mysqli_connect('localhost',"root",'','usermanagement') or die("could not connect");
    }
    public function select_company_DB($Name,$Password){   

            if(isset($_POST['logincompany_form'])){
            $query = "SELECT * FROM company WHERE Name = '$Name' AND Password = '$Password'";
            $result = mysqli_query($this->db,$query);


            if(!empty($row = mysqli_fetch_assoc($result))){
                session_start();
                $_SESSION['Login_Company'] = $row['ID'];
                header('Location:LoginCompany.php?id='.$row['ID']);
            }
}

        return true;
    }
    
   
    
    
    
}


?>