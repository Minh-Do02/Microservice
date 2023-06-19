<?php
$username = "root";
$password = "root";
$database = "root";
$mysqli = new mysqli("db", $username, $password, $database);

echo "<b> <center>Liste des tables dans la base de donnée $database</center> </b> <br> <br>";

$sql = "SHOW TABLES FROM $database";
$result = $mysqli->query($sql);
if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

$query = "SELECT * FROM test";
echo "<b> <center>Database Output</center> </b> <br> <br>";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["data"];

        echo '<b>'.$field1name.'</b><br />';
    }

/*freeresultset*/
$result->free();
}
