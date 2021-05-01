<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1>You are here</h1>
<?php
                $Name =$_GET["name1"];
                $Password =$_GET["pass1"];

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "DEbase";

                

                if($Name =="saw"){
                        $conn = new mysqli($servername, $username, $password,$dbname);

                if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                }
                        $sql = "SELECT names,passwords FROM main01 WHERE names='saw'";
                        // $sql = "SELECT names,passwords FROM main01";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                      echo "username: " . $row["names"]. " - password: " . $row["passwords"];
                                }
                              } else {
                                echo "0 results";
                              }
                              $conn->close();
                 }
                 elseif ($Name =="max"){
                        $conn = new mysqli($servername, $username, $password,$dbname);

                if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                }
                        $sql = "SELECT names,passwords FROM main01 WHERE names='max'";
                        // $sql = "SELECT names,passwords FROM main01";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                      echo "username: " . $row["names"]. " - password: " . $row["passwords"];
                                }
                              } else {
                                echo "0 results";
                              }
                              $conn->close();
                 }
                 elseif($Name =="damn"){
                        $conn = new mysqli($servername, $username, $password,$dbname);

                if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                }
                        $sql = "SELECT names,passwords FROM main01 WHERE names='damn'";
                        // $sql = "SELECT names,passwords FROM main01";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                      echo "username: " . $row["names"]. " - password: " . $row["passwords"];
                                }
                              } else {
                                echo "0 results";
                              }
                              $conn->close();
                 }         
?>

</body>
</html>