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
        <label for="firstname">Name</label>
        <input type="text" name="Name" required>
        </div>
        
        <div>  
        <label for="lastname">Address</label>
        <input type="text" name="Address" required>
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
        <label for="age">Number Of Employees</label>
        <input type="text" name="numberOfEmployees" required>
        </div>   
            
            
        <input type="submit" value="Create" name="registercompany_form">    
            
        <p>Already have one?<a href="LoginFormCompany.php">Log In</a></p>    
            
            
            
        </form> 
        
        </div>
    
    </body>
</html>
   