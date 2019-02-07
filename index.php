<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
        <h1>Le nostre prenotazioni</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Prenotazione</th>
                        <th>ID Ospite</th>
                    </tr>
                </thead>
                <tbody>
                <?php include 'database.php'; ?>
                <?php foreach ($rooms as $room) { ?>
                <tr>
                    <td><?php echo $room['prenotazione_id']; ?></td>
                    <td> <a href="http://localhost/php/php-mysql/dettaglio-ospite.php?idospite=<?php echo $room['ospite_id']; ?>" target="_blank"> <?php echo $room['ospite_id']; ?></a></td>
                </tr>
                <?php  } ?>
                </tbody>   
            </table>
    </body>  
</html>
