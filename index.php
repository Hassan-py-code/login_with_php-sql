

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    
   <header>
     <a href="#" class="logo">logo</a>

     <nav>
         <a href="#">Home</a>
         <a href="#">About</a>
         <a href="#">Collection</a>
         <a href="#">Contact</a>
     </nav>

     <div class="user_auth">
         <div class="profile-box" style="display: none;">

             <div class="avatar-circle">
                 C
             </div>
             <div class="dropdown">
                 <a href="#">My Account</a>
                 <a href="#">Logout</a>
             </div>
         </div>
         <button type="button" class="login-btn-modal">login</button>
     </div> 

   </header>

   <section>
         <H1>Hi frontend</H1>
   </section>

   <div class="alert-box" style="display: none;">
     <div class="alert success">
           <i class="fa-solid fa-circle-check"></i>
           <span>Registration Successful</span>
     </div>
   </div>

   <div class="auth-modal">
         
          <button type="button" class="close-btn-modal" ><i class="fa-solid fa-xmark"></i></button>


      <div class="form-box login">
         <h2>login</h2>
         <form action="auth_process.php" method="post">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class="fa-regular fa-envelope"></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
             <button type="submit" name="login_btn" class="btn">login</button>
             <p>Don't have an account <a href="#" class="register-link">Register</a></p>
         </form>
      </div>

        
      <div class="form-box register">
         <h2>Register</h2>
         <form action="auth_process.php" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Name" required>
               <i class="fa-regular fa-user"></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
             <button type="submit" name="register_btn" class="btn">Register</button>
             <p>Already have an account <a href="#" class="login-link">login</a></p>
         </form>
      </div>

   </div>

  <script src="main.js"></script>
</body>
</html>