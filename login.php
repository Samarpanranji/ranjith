<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
      background-size: cover;
    }

    header {
      background-color: #2f4f4f;
      padding: 10px;
      text-align: center;
      color: white;
    }

    header h1 {
      margin: 10px 0;
      font-size: 32px;

    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav li {
      float: left;
    }

    nav li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav li a:hover {
      background-color: #111;
    }

    nav li a.active {
      background-color: #4CAF50;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 40px 20px;
      min-height: calc(100vh - 120px);
    }

    .container {
      max-width: 400px;
      width: 100%;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      color: #fff;
      margin-bottom: 40px;
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
    }

    .input-group {
      position: relative;
      margin: 20px 0;
    }

    .input-group i {
      position: absolute;
      top: 12px;
      left: 10px;
      color: #ccc;
    }

    .input-group input {
      width: 85%;
      padding: 10px 10px 10px 35px;
      background-color: white;
      border: none;
      border-radius: 8px;
      color: black;
      outline: none;
      display: block;
      margin: 0 auto;
    }

    .input-group input::placeholder {
      color: #555;
    }

    .input-group label {
      display: block;
      margin-top: 5px;
      font-size: 12px;
      color: #ccc;
    }

    .btn {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .or {
      text-align: center;
      margin: 20px 0;
    }

    .links {
      text-align: center;
    }

    .links p {
      margin: 10px 0 5px;
    }

    .links button {
      padding: 8px 20px;
      border: none;
      border-radius: 6px;
      background-color: #2196F3;
      color: white;
      cursor: pointer;
    }

    .links button:hover {
      background-color: #1976D2;
    }

    .recover {
      text-align: right;
      margin: 10px 0;
    }

    .recover a {
      color: #ffc107;
      text-decoration: none;
      font-size: 13px;
    }

    .recover a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>E-COMPLAINT AND FEEDBACK SYSTEM</h1>
  </header>

  <nav>
    <ul>
      <li style="float:left"><h1 style="color:white; margin: 10px;">User Login</h1></li>
      <li style="float:right"><a href="index.php">Home</a></li>
    </ul>
  </nav>

  <main>
    <!-- Register Form -->
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
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
        <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>

      <p class="or">------------------</p>

      <div class="links">
        <p>Already Have an Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <!-- Sign In Form -->
    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
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
        <p class="recover"><a href="#">Recover Password</a></p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>

      <p class="or">------------------</p>

      <div class="links">
        <p>Don't have an account yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
  </main>

  <!-- Toggle Script -->
  <script>
    const signUpBtn = document.getElementById("signUpButton");
    const signInBtn = document.getElementById("signInButton");
    const signInDiv = document.getElementById("signIn");
    const signUpDiv = document.getElementById("signup");

    signUpBtn.onclick = () => {
      signInDiv.style.display = "none";
      signUpDiv.style.display = "block";
    }

    signInBtn.onclick = () => {
      signUpDiv.style.display = "none";
      signInDiv.style.display = "block";
    }
  </script>
</body>
</html>
