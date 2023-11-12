<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select data from book_info_table
$sql = "SELECT title, author, literature_OX, tag1, tag2 FROM book_info_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Title: " . $row["title"]. " - Author: " . $row["author"]. " - Literature: " . $row["literature_OX"]. " - Tag1: " . $row["tag1"]. " - Tag2: " . $row["tag2"]. "<br>";
  }
} else {
  echo "No results in book_info_table";
}

// Select data from exercise_info_table
$sql = "SELECT name, part FROM exercise_info_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Part: " . $row["part"]. "<br>";
  }
} else {
  echo "No results in exercise_info_table";
}

// Select data from certificate_table
$sql = "SELECT name, target, field FROM certificate_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Target: " . $row["target"]. " - Field: " . $row["field"]. "<br>";
  }
} else {
  echo "No results in certificate_table";
}

$conn->close();
?>
