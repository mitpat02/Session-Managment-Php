<!DOCTYPE html>
<?php
/* DELETION without PDO Parameters can open you to an injection attack
 * 
 * Sam Scott, April 2015
 */
include "connect.php";

// delete poll, if parameter set
$deletecommand = "DELETE FROM book_info WHERE book_id=?";
$stmt = $dbh->prepare($deletecommand);
$userParams = array($_POST["id"]);
if ($stmt->execute($userParams) ) {
    $message = "ID received: {$_POST["id"]}. Number of rows deleted: {$stmt->rowCount()}.";
} else {
    $message = "Poll {$_POST["id"]} could not be deleted.";
}
?>
<html>
    <head>
        <title>Injected</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Result</h1>
        <p><?=$message?></p>
    </body>
</html>
