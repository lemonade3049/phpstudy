<?php

function connectDb(): mysqli {
    $conn = new mysqli('localhost', 'root', 'yuan3049', 'testdb');

    if ($conn->connect_error) {
        echo 'connect error';
        throw new \mysql_xdevapi\Exception('can not connect to database');
    }
    return $conn;
}

function closeDb($conn): void{
    $conn->close();
}

$conn = connectDb();
$mysqli_result = $conn->query('select id, name from test');
var_dump($mysqli_result);
echo '</br>';
while ($row = $mysqli_result->fetch_assoc()) {
    echo $row['id'] . ' ' . $row['name'];
}
closeDb($conn);
