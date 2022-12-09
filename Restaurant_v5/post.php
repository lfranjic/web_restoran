<?php
      $link = mysqli_connect("localhost", "root", "", "reservations");
      
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      
      $name = mysqli_real_escape_string($link, $_REQUEST['username']);
      $password = mysqli_real_escape_string($link, $_REQUEST['password']);
      $email = mysqli_real_escape_string($link, $_REQUEST['email']);
      $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
      
      $sql = "INSERT INTO users (name, password, mail, phone) VALUES ('$name', '$password', '$email', '$phone')";
      if(mysqli_query($link, $sql)){
          echo "Records added successfully.";
      } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      
      mysqli_close($link);
?>