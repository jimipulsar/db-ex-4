<?php

    $servername = 'localhost';
    $username = 'admin';
    $password = 'alabatrum';
    $dbname = 'hotel';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore '. $conn->connect_error);
    }

    $sql = 'SELECT * FROM `prenotazioni_has_ospiti`';
    $result = $conn->query($sql);
    $rooms = [];
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $rooms[] = $row;
        }
    }
    $ospitiSql = 'SELECT * FROM `ospiti`';
    $result = $conn->query($ospitiSql);
    $ospiti = [];
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $ospiti[] = $row;
        }
    }

    
?>
