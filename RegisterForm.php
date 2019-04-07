<html>
<!-- registerForm-->    
<head>
    </head>
    <body>
        <div class="container">
            <div class="header">
             <h2>Register</h2>
        </div>
        <form action="Register.php" method="post">
            
        <div>  
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" required>
        </div>
        
        <div>  
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" required>
        </div>
            
        <div>  
        <label for="email">Email</label>
        <input type="email" name="email" required>
        </div>
            
                    
        <div>  
        <label for="password">Password</label>
        <input type="password" name="password" required>
        </div>    
            
        <div>  
        <label for="age">Age</label>
        <input type="text" name="age" required>
        </div>   
            
        <div>  
        <label for="gender">Gender</label>
        <input type="text" name="gender" required>
        </div>
            
        <input type="submit" value="Sign In" name="register_form">    
            
        <p>Already a user?<a href="LoginForm.php">Log In</a></p>    
            
            
            
        </form> 
        
        </div>
    
    </body>
</html>
   