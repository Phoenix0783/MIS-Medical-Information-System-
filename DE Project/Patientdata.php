<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successfully Registered</title>
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="database-style.css">
</head>
<body>
        <h1>Successfully registered</h1>
<?php

                $Name =$_GET["name"];
                $Disease =$_GET["disease"];

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "DEbase";

                $conn = new mysqli($servername, $username, $password,$dbname);

                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $stmt = $conn->prepare("INSERT INTO padata1 (Patient_name,Diseaes) VALUES (?,?)");
                $stmt->bind_param("ss", $name1,$diseases1);


                $name1=$Name;
                $diseases1=$Disease;
                $stmt->execute();

                $stmt->close();
                $conn->close();           
?>

</body>
</html>