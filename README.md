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

### Register page  
<img width="1641" height="774" alt="Screenshot 2025-09-21 230039" src="https://github.com/user-attachments/assets/8327a175-b959-4807-8430-841cd1fe9d1b" />

### Login page
<img width="1088" height="615" alt="Screenshot 2025-09-21 230104" src="https://github.com/user-attachments/assets/87f44393-e671-4612-a25b-763634d88178" />

### Forgot password page
<img width="817" height="483" alt="Screenshot 2025-09-21 230123" src="https://github.com/user-attachments/assets/44d27cdb-3d70-41fe-a56e-53b9a22ced90" />

### Reset password page
<img width="1161" height="634" alt="Screenshot 2025-09-21 230134" src="https://github.com/user-attachments/assets/35288468-dc60-4eaf-8be0-7a389a3cd85e" />

<img width="981" height="458" alt="Screenshot 2025-09-21 230146" src="https://github.com/user-attachments/assets/f8ee0c78-8c1a-48fd-afe3-b38787f053be" />

### Welcome page
<img width="902" height="548" alt="Screenshot 2025-09-21 230218" src="https://github.com/user-attachments/assets/e6e9af28-2c32-4f73-8f69-c786c4491b9b" />









