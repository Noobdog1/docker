

<h1>php test</h1>

<?php 
require_once("dbconfig.php");




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { 

        echo '<h1> ';
            echo $row["header"]; 
        echo '</h1>';

        echo '<p>'; 
            echo $row["text"];
        echo '</p>';
        
        

    }


}

  