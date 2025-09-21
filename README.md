# Registration and Login System with Password Reset

A **web-based authentication system** built using **HTML, CSS, PHP, and MySQL**.  
It allows users to **register, log in, reset forgotten passwords, and access a welcome page**.  



## Objective
The main goal of this project is to implement a secure user authentication system with:  
- User Registration  
- User Login  
- Forgot/Reset Password  
- Welcome page with logout option  


### User  
- **Attributes:** username,email,password(hashed),reset_token. 
- **Operations:** Register, Login, Password Reset.  



##  Modules
### 1. Registration  
- Register new users with username, email, and password.  
- Passwords are hashed before storing in the database.  

### 2. Login  
- Authenticate users with username and password.  
- Redirect to the welcome page on success.  

### 3. Forgot Password  
- Request password reset by entering a registered email.  
- Generate a reset token and show a reset link.  

### 4. Reset Password  
- Update password securely using the token link.  
- Clear token after reset.  

### 5. Welcome Page  
- Displays a welcome message after successful login.  
- Includes a logout link.  



## Technology 
- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** XAMPP(Apache + MySQL + PHP)  



## Architecture
- register.html → Registration form  
- register.php → Handles registration and stores user in MySQL  
- login.html → Login form  
- login.php → Authenticates user credentials  
- forgot_password.html→ Form to request password reset  
- forgot_password.php → Generates reset token and shows link  
- reset_password.php→ Updates password in the database  
- welcome.html→ Welcome page after login  
- styles.css → Styling for all forms/pages  



