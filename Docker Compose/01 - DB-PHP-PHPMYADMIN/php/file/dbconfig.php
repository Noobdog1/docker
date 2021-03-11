<?php

$con = mysqli_connect("db","root","Wiosna2424","cdvdb");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


        mysqli_query($con, "CREATE TABLE `cdvdb`.`index_content` (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,header VARCHAR(255) NOT NULL,text VARCHAR(255) NOT NULL);") ;   
       
        mysqli_query($con, "INSERT INTO `index_content` (`id`, `header`, `text`) VALUES (NULL, 'Header', 'Lorem ipsum');");
        
        $result = mysqli_query ( $con, "SELECT * FROM `index_content`;") ;  

  ?>