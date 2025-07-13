<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Complaint and Feedback System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Arial, sans-serif;
      background: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
    }

    header {
      background-color: rgba(47, 79, 79, 0.9);
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    nav {
      background-color: rgba(0, 0, 0, 0.7);
      overflow: hidden;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: flex-end;
    }

    nav li a {
      display: block;
      color: white;
      padding: 14px 16px;
      text-decoration: none;
      text-align: center;
      transition: background 0.3s;
    }

    nav li a:hover {
      background-color: #111;
    }

    nav li a.active {
      background-color: rgba(252, 3, 3, 1);
    }

    main {
      padding: 60px 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .form-box {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 550px;
      flex: 1;
      backdrop-filter: blur(10px);
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #2f4f4f;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
      height: 120px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #2f4f4f;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #1e3636;
    }

    /* Floating Buttons */
    .float-btn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      z-index: 999;
    }

    .float-btn a {
      background-color: #2f4f4f;
      color: white;
      padding: 14px;
      border-radius: 50%;
      text-align: center;
      font-size: 18px;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s;
    }

    .float-btn a:hover {
      background-color: #ff4b5c;
    }

    @media (max-width: 768px) {
      main {
        flex-direction: column;
        padding: 20px;
      }

      .form-box {
        max-width: 100%;
      }

      .float-btn {
        right: 15px;
        bottom: 15px;
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
      <li><a href="index.php">Home</a></li>
      
      <li><a class="active" href="index.php">Logout</a></li>
    </ul>
  </nav>

  <main>
    <!-- Feedback Form -->
    <div class="form-box" id="feedback">
      <h2>Submit Feedback</h2>
      <form method="post" action="submit_feedback.php">
        <label for="fname">Your Name</label>
        <input type="text" id="fname" name="name" placeholder="Enter your name" required>

        <label for="femail">Your Email</label>
        <input type="email" id="femail" name="email" placeholder="Enter your email" required>

        <label for="fmessage">Feedback Message</label>
        <textarea id="fmessage" name="message" placeholder="Write your feedback here..." required></textarea>

        <button type="submit">Submit Feedback</button>
      </form>
    </div>

    <!-- Complaint Form -->
    <div class="form-box" id="complaint">
      <h2>Submit Complaint</h2>
      <form method="post" action="submit_complaint.php">
        <label for="cname">Your Name</label>
        <input type="text" id="cname" name="name" placeholder="Enter your name" required>

        <label for="cemail">Your Email</label>
        <input type="email" id="cemail" name="email" placeholder="Enter your email" required>

        <label for="subject">Complaint Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Subject of your complaint" required>

        <label for="cdetails">Complaint Details</label>
        <textarea id="cdetails" name="details" placeholder="Describe your complaint..." required></textarea>

        <button type="submit">Submit Complaint</button>
      </form>
    </div>
  </main>

  <!-- Floating Buttons -->
  <div class="float-btn">
    <a href="#feedback" title="Feedback"><i class="fas fa-comment-dots"></i></a>
    <a href="#complaint" title="Complaint"><i class="fas fa-exclamation-circle"></i></a>
  </div>

</body>
</html>
