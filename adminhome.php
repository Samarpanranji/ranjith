<?php
include 'connect.php';

// Delete complaint
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_complaint_id'])) {
    $deleteId = (int) $_POST['delete_complaint_id'];
    $conn->query("DELETE FROM complaints WHERE id = $deleteId");
}

// Delete feedback
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_feedback_id'])) {
    $deleteId = (int) $_POST['delete_feedback_id'];
    $conn->query("DELETE FROM feedback WHERE id = $deleteId");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>E-Complaint and Feedback System - Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 0;
    }

    header {
      background-color: #2f4f4f;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    nav {
      background-color: #333;
      width: 100%;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    nav .left,
    nav .right {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    nav li {
      list-style: none;
    }

    nav a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 14px 20px;
    }

    nav a:hover {
      background-color: #111;
    }

    nav a.active {
      background-color: #f90202ff;
    }

    main {
      padding: 20px;
    }

    h2.section-title {
      margin: 20px 0 10px;
      color: #2f4f4f;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 40px;
      background-color: #fff;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #2f4f4f;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    button {
      background: red;
      color: white;
      border: none;
      padding: 6px 10px;
      cursor: pointer;
      border-radius: 4px;
    }

    button:hover {
      opacity: 0.85;
    }

    .datetime-column {
      width: 140px;
      white-space: nowrap;
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: flex-start;
      }

      nav .left, nav .right {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
      }

      nav a {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>E-Complaint and Feedback System</h1>
  </header>

  <nav>
    <ul>
      <div class="left">
        <li><span style="color:white; font-size: 20px; font-weight: bold;">Admin Dashboard</span></li>
      </div>
      <div class="right">
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="logout.php">Logout</a></li>
      </div>
    </ul>
  </nav>

  <main>

    <h2 class="section-title">Received Complaints</h2>
    <?php
    $result = $conn->query("SELECT * FROM complaints ORDER BY id DESC");
    if ($result && $result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Details</th>
                    <th class='datetime-column'>Date & Time</th>
                    <th>Action</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            $created_at = isset($row['created_at']) ? date("d-m-Y h:i A", strtotime($row['created_at'])) : '-';
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['subject']) . "</td>
                    <td>" . htmlspecialchars($row['details']) . "</td>
                    <td class='datetime-column'>$created_at</td>
                    <td>
                      <form method='post' action='' onsubmit=\"return confirm('Are you sure you want to delete this complaint?');\">
                        <input type='hidden' name='delete_complaint_id' value='{$row['id']}'>
                        <button type='submit'>Delete</button>
                      </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No complaints found.</p>";
    }
    ?>

    <h2 class="section-title">Received Feedback</h2>
    <?php
    $result = $conn->query("SELECT * FROM feedback ORDER BY id DESC");
    if ($result && $result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th class='datetime-column'>Date & Time</th>
                    <th>Action</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            $created_at = isset($row['created_at']) ? date("d-m-Y h:i A", strtotime($row['created_at'])) : '-';
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>" . htmlspecialchars($row['name']) . "</td>
                    <td>" . htmlspecialchars($row['email']) . "</td>
                    <td>" . htmlspecialchars($row['message']) . "</td>
                    <td class='datetime-column'>$created_at</td>
                    <td>
                      <form method='post' action='' onsubmit=\"return confirm('Are you sure you want to delete this feedback?');\">
                        <input type='hidden' name='delete_feedback_id' value='{$row['id']}'>
                        <button type='submit'>Delete</button>
                      </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No feedback found.</p>";
    }

    $conn->close();
    ?>

  </main>

</body>
</html>
