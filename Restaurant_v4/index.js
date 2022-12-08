const express = require("express");
const bodyParser = require("body-parser");
const cors = require ("cors");
const app = express();
const mysql = require("mysql");

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "password",
    database: "reservations",
});
app.use(cors());
app.use(express.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get("/", (req, res) => {
    const sqlInsert = "INSERT INTO reservations {name, date, time, spots} VALUES {'marin', '2022-12-08', '12:30:00', 4} }";
    db.query(sqlInsert, (err, result) => {
        res.send("Hello");
    })
});

db.connect(function (err) {
    if (err) {
        console.log(err);
    }
    else {
        console.log("connected");
    }
});

app.listen(3001, () => {
    console.log("running on port 3001");
});