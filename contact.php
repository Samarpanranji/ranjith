<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Information</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: #fff;
    }

    .header {
      width: 100%;
      padding: 15px 20px;
      background:background-color: #2f4f4f;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.4);
    }

    .back-button {
      background-color: #ffdd57;
      color: #000;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .back-button:hover {
      background-color: #e6c84a;
    }

    .contact-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px;
      width: 90%;
      max-width: 450px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
      text-align: left;
      margin-top: 100px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #ffffff;
    }

    .info p {
      font-size: 16px;
      margin: 10px 0;
    }

    .info strong {
      display: inline-block;
      width: 80px;
      color: #f0f0f0;
    }

    .info a {
      color: #ffdd57;
      text-decoration: none;
    }

    .info a:hover {
      text-decoration: underline;
    }

    @media (max-width: 500px) {
      .contact-box {
        padding: 20px;
      }

      .info strong {
        width: 100%;
        margin-bottom: 5px;
      }

      .info p {
        display: flex;
        flex-direction: column;
      }

      .back-button {
        font-size: 14px;
        padding: 8px 16px;
      }
    }
  </style>
</head>
<body>

  <div class="header">
    <button class="back-button" onclick="history.back()">← Back</button>
  </div>

  <div class="contact-box">
    <h2>Contact Information</h2>
    <div class="info">
      <p><strong>Name:</strong> Ranjith K r</p>
      <p><strong>Email:</strong> <a href="mailto:ranjith@example.com">ranjith@example.com</a></p>
      <p><strong>Phone:</strong> +91-9876543210</p>
      <p><strong>GitHub:</strong> <a href="https://github.com/Samarpanranji" target="_blank">https://github.com/Samarpanranji</a></p>
      <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/yourprofile" target="_blank">linkedin.com/in/yourprofile</a></p>
    </div>
  </div>

</body>
</html>
