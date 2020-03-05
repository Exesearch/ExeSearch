<?php
/**
* This file creates tables that are needed for treasure hunt game.
* @author kenta
*
*/

require('./connection.php');

$sql = [
  "CREATE TABLE IF NOT EXISTS quiz (
    quizID INT PRIMARY KEY AUTO_INCREMENT,
    contents VARCHAR(250),
    points int NOT NULL,
    locationID INT,
    FOREIGN KEY(lcoationID) REFERENCES FROM locations(id)
  );",
  "CREATE TABLE IF NOT EXISTS locations(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30)
  );",
  "CREATE TABLE IF NOT EXISTS users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(45) NOT NULL,
    password VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL,
    groupID INT,
    FOREIGN KEY(groupID) REFERENCES FROM team(groupID)
  );",
  "CREATE TABLE IF NOT EXISTS team(
    groupID INT PRIMARY KEY AUTO_INCREMENT,
    groupName VARCHAR(30),
    score INT DEFAULT 0,
    member1 INT NOT NULL,
    member2 INT NOT NULL,
    member3 INT NOT NULL,
    member4 INT NOT NULL,
    member5 INT NOT NULL,
    member6 INT,
    member7 INT,
    member8 INT,
    member9 INT,
    member10 INT,
    FOREIGN KEY(member1) REFERENCES users(ID),
    FOREIGN KEY(member2) REFERENCES users(ID),
    FOREIGN KEY(member3) REFERENCES users(ID),
    FOREIGN KEY(member4) REFERENCES users(ID),
    FOREIGN KEY(member5) REFERENCES users(ID),
    FOREIGN KEY(member6) REFERENCES users(ID),
    FOREIGN KEY(member7) REFERENCES users(ID),
    FOREIGN KEY(member8) REFERENCES users(ID),
    FOREIGN KEY(member9) REFERENCES users(ID),
    FOREIGN KEY(member10) REFERENCES users(ID)
  );"
];

$len= count($sql);

for($i = 0; $i < $len; $i++){
  if ($conn->query($sql[$i]) === TRUE)
  {
      //echo "Table created successfully <br/>";
  }
  else
  {
      echo "Error creating table: " . $conn->error;
  }
}

$conn->close();


 ?>
