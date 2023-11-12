<?php
$servername = "localhost:3306";
$username = "root";
$password = "nimda01384@";
$dbname = "recommend_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select data from book_info_table
$sql = "SELECT * FROM book_info_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["other_column"]. "<br>";
  }
} else {
  echo "0 results";
}

// Select data from exercise_info_table
$sql = "SELECT * FROM exercise_info_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["other_column"]. "<br>";
  }
} else {
  echo "0 results";
}

// Select data from certificate_table
$sql = "SELECT * FROM certificate_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["other_column"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>