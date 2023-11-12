const mysql = require("mysql");
const express = require("express");
const app = express();

const db = mysql.createConnection({
  host: "127.0.0.1",
  user: "your_username",
  password: "your_password",
  database: "recommend_info",
});

db.connect((err) => {
  if (err) throw err;
  console.log("Connected to the database!");
});

app.get("/books", (req, res) => {
  db.query("SELECT * FROM Book_info_table", (err, result) => {
    if (err) throw err;
    res.send(result);
  });
});

app.get("/exercises", (req, res) => {
  db.query("SELECT * FROM exercise_info_table", (err, result) => {
    if (err) throw err;
    res.send(result);
  });
});

app.get("/certificates", (req, res) => {
  db.query("SELECT * FROM certificate_table", (err, result) => {
    if (err) throw err;
    res.send(result);
  });
});

app.listen(3306, () => {
  console.log("Server is running on port 3000");
});
