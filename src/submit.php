<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get datas
    $name = $_POST["name"];
    $email = $_POST["email"];


    // Display data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
  }

?>