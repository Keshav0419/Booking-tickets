<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $visit_date = $_POST['visit_date'];
  $tickets = $_POST['tickets'];

  // Create a new MySQLi connection
  $conn = new mysqli('localhost', 'root', '', 'keshav');

  // Check the connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  } else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO data (name, email, visit_date, tickets) VALUES (?, ?, ?, ?)");

    // Bind parameters ('s' for string)
    $stmt->bind_param("sssi", $name, $email, $visit_date, $tickets);

    // Execute the statement
    if ($stmt->execute()) {
      echo "Your booking has been confirmed.<br/>";
      echo "Thank you for joining us!";
    } else {
      echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
  }
?>