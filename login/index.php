<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Admin Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" name="phone_number" id="phone_number" placeholder="phone_number" required>
            <label for="password">Phone number</label>
        </div>
        <div class="input-group">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <input type="address" name="pincode" id="pincode" placeholder="pincode" required>
            <label for="pincode">Pincode</label>
        </div>
        <div class="input-group">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <input type="address" name="district" id="district" placeholder="district" required>
            <label for="district">District</label>
        </div>
        <div class="input-group">
            <i class="fa fa-address-card" aria-hidden="true"></i>
            <input type="address" name="streetname" id="streetname" placeholder="district" required>
            <label for="streetname">Street name</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>
    
    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="loginEmail" placeholder="Email" required>
          <label for="loginEmail">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="loginPassword" placeholder="Password" required>
          <label for="loginPassword">Password</label>
        </div> 
        <div class="select-container">
          <select name="mode" class="select-box"required>
            <option value="">Select an Option</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select>

        </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="links">
          <p>Don't have an account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>