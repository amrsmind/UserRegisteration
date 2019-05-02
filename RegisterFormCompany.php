<html>
<!-- registerForm-->    
<head>
    </head>
    <body>
        <div class="container">
            <div class="header">
             <h2>RegisterCompany</h2>
        </div>
        <form action="RegisterCompany.php" method="post">
            
        <div>  
        <label for="Name">Name</label>
        <input type="text" name="Name" required>
        </div>
        
        <div>  
        <label for="Location">Location</label>
        <input type="text" name="Location" required>
        </div>
            
        <div>  
        <label for="email">Email</label>
        <input type="email" name="Email" required>
        </div>
            
                    
        <div>  
        <label for="password">Password</label>
        <input type="password" name="Password" required>
        </div>    
            
        <div>  
        <label for="Employeenumber">Number Of Employees</label>
        <input type="text" name="Employeenumber" required>
        </div>
            
                               
        <div>  
        <label for="interests">interests</label>
        <input type="text" name="array[]" >
        <input type="text" name="array[]" >
        <input type="text" name="array[]" >
        <input type="text" name="array[]" >
        <input type="text" name="array[]" >
        </div>    
            
            
            
            
        <input type="submit" value="Create" name="registercompany_form">    
            
        <p>Already have one?<a href="LoginFormCompany.php">Log In</a></p>    
            
            
            
        </form> 
        
        </div>
    
    </body>
</html>
   