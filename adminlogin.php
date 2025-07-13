<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
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

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
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

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 120px);
      padding: 20px;
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      padding: 30px;
      width: 100%;
      max-width: 400px;
      color: #fff;
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
      color: #999;
    }

    .input-group input {
      width: calc(100% - 40px);
      padding: 10px 10px 10px 35px;
      background-color: white;
      color: black;
      border: none;
      border-radius: 8px;
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

    .or {
      text-align: center;
      margin: 20px 0;
    }

    @media (max-width: 480px) {
      .container {
        padding: 20px;
      }

      .input-group input {
        width: calc(100% - 40px);
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
    <li style="float:left"><h1 style="color:white;margin:10px;font-size:18px;">Admin Login</h1></li>
    <li style="float:right"><a href="index.php">Home</a></li>
  </ul>
</nav>

<main>
  <div class="container" id="adminLogin">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="username" id="username" placeholder="Username" required>
        <label for="username">Username</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <p class="recover"><a href="#">Recover Password</a></p>
      <input type="submit" class="btn" value="Sign In" name="login">
    </form>
    <p class="or">------------------</p>
  </div>
</main>

<?php if (isset($error)): ?>
  <script>
    alert("<?php echo $error; ?>");
  </script>
<?php endif; ?>

</body>
</html>
