<?php
include "connect.php";

// do the insert
$command = "SELECT * FROM book_info ORDER BY book_id";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

if ($success) {
    $msg = "Display Successful!";
} else {
    $msg = "Display Failed…";
} 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Page</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
              }
        </style>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="container">
            <h1> Book Records</h1>
            <p><?= $msg ?></p>
            <p><?= $stmt->rowCount() ?> rows were selected.</p>
            <table border="1">
                <tr><th>Book Id</th><th>Book Name</th><th>Author</th><th>Price</th><th>Description</th></tr>
               <?php
               $lastNames = Array();
               while ($row = $stmt->fetch()) {
                    echo "<tr><td>{$row["book_id"]}</td><td>{$row["book_name"]}</td><td> {$row["author"]}</td><td> {$row["price"]}</td><td> {$row["description"]}</td></tr>";

                    array_push($lastNames, $row["book_name"]);                        
                 } ?>
            </table>
            <?php
            echo "<br><br><b>BOOK NAME</b> ";
            echo "<ul>";
            foreach ($lastNames as $lastName) {
               echo "<li>$lastName</pli>";
            }
            echo "</ul><br>";
            
            ?>
            
            <br><i style='color:blue'><?= $command ?></i><br>
            <p><a href="main.html">back</a></p>
        </div>
    </body>
</html>