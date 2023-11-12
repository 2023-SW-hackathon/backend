const mysql = require("mysql");
const express = require("express");
const app = express();

const db = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "nimda013584@",
  database: "recommend_info",
});

db.connect((err) => {
  if (err) throw err;
  console.log("Connected to the database!");
});

app.get("/books/:id", (req, res) => {
  db.query(
    `SELECT * FROM Book_info_table WHERE id = ${req.params.id}`,
    (err, result) => {
      if (err) throw err;
      res.send(result);
    }
  );
});

app.get("/exercises/:id", (req, res) => {
  db.query(
    `SELECT * FROM exercise_info_table WHERE id = ${req.params.id}`,
    (err, result) => {
      if (err) throw err;
      res.send(result);
    }
  );
});

app.get("/certificates/:id", (req, res) => {
  db.query(
    `SELECT * FROM certificate_table WHERE id = ${req.params.id}`,
    (err, result) => {
      if (err) throw err;
      res.send(result);
    }
  );
});

app.listen(3000, () => {
  console.log("Server is running on port 3000");
});
