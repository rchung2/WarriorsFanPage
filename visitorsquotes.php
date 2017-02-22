<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        
        
        $servername = "setapproject.org";
        $username = "csc412";
        $password = "csc412";
        $dbname = "csc412";
        
        $dbconnection = mysql_connect($servername, $username, $password);
        
        if (!$dbconnection) {
            die("You failed to connect.");
        }
              
        $insert = "INSERT into quotes_robert (quote, name) VALUES (\" " . $_POST["quote"] . "\" , \"" . $_POST["name"] . "\");";
        
        $insertResults = mysql_db_query($dbname, $insert);
                
                if (!$insertResults){
                    echo "Database Error, could not inset succssfully.";
                    exit;
                }
                
        $selectQuery = "SELECT * from quotes_robert;";
        
        $selectQueryResults = mysql_db_query($dbname,$selectQuery);
        
        if (!$selectQueryResults)
        {
            echo "Could not query the database.";
            exit;
        }
        
        while ($row = mysql_fetch_assoc($selectQueryResults)) {
            echo $row["quote"];
            echo $row["name"];
            echo "<br>";
        }
        
        ?>
    </body>
</html>
