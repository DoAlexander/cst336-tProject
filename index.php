<?php

$host = "localhost";
$dbname = "teamProject";
$username = "web_user";
$password = "cst336";

//Creates a database connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$sql[] = 'SELECT DISTINCT firstName, lastName, email FROM user ORDER by lastName, firstName';
$query = $dbConn->prepare($sql[0]);

$query->execute();

$records = $query->fetchAll();
function pprint() {
    global $records;
    foreach ($records as $line) {
        echo($line['firstName']." ".$line['lastName']." ".$line['email']." "."<br>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Doug's Assignment 3 </title>
        <meta charset="utf-8">
        <link href="./css/generic.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1 style="color=rgb(220,110,0);" id="title">Stealing your hearthstone information</h1>    
        </header>
        <nav>
        </nav>
        <main>
            <div>
                <?php pprint();?>
            </div>
        </main>
        <footer>
            &copy; Alexander, 2016. <br />
        </footer>
    </body>
</html>