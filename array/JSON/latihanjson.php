<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
</head>
<?php
$mov = '{
    "title": "Harry Potter",
        "year": "1997 - 2007",
        "released" : "26 June 1997",
        "runtime" : "2h15m",
        "genre" : "Fantasy",
        "director" : "David Yates",
        "writter" : "J. K. Rowling",
        "actors" : [ 
            "Daniel Radcliffe",
            "Emma Watson",
            "Bonnie Wright",
            "Tom Felton"
        ],

        "plot" : "The central Character in the series is Harry Potter , a boy who lives in the fictional town of little whinging , surrey with his aunt, uncle, and cousin - the dursley - and discovers at the age of eleven that he is a wizard ,  though he lives in  the ordinary world of non-magical people known as Muggles.",
        "language" : "English",
        "country" : "UK",
        "Awards" : [
            "Won Saturn Award Of The Best Costume Design",
            "Satelite Achievement",
            "BFCA Choice Award"
        ],
        "rating" : "IMDb 7.6",
        }';

        ?>
            <?php $data = json_decode($mov); ?>
            <head><title>a</title></head>
        <body>
            <b><center > Data Film</center></b><br>
            <?php echo "<center> $data->title </center>";?>
            <center><img src="images(4).jpeg" height=500 width=300></center>

        <br><?php echo $data->plot; ?><br>
        <br>
        <tr>
            <td><?php echo "Tahun Rilis :" .$data->year."<br>"; ?><td></tr>

            <br><tr>
                <td><b>Rating</b></td><td><b>:</b></td>
                <td><?php echo $data->rating; ?><td></tr>

            <tr>
            <td><b>Release</b></td><td><b>:</b></td>
                <td><?php echo $data->released; ?><td></tr>

            <tr>
            <td><b>Runtime</b></td><td><b>:</b></td>
                <td><?php echo $data->runtime; ?><td></tr>

            <tr>
            <td><b>Genre</b></td><td><b>:</b></td>
                <td><?php echo $data->genre; ?><td></tr>

            <tr>
            <td><b>Director</b></td><td><b>:</b></td>
            <td><?php echo $data->director; ?><td></tr>
            
            <tr>
            <td><b>Writter</b></td><td><b>:</b></td>
            <td><?php echo $data->writter; ?><td></tr>

            <tr>
            <td><b>Actors</b></td><td><b>:</b></td>
            <td><?php echo implode("-", $data->$actors); ?><td></tr>

            <tr>
            <td><b>language</b></td><td><b>:</b></td>
            <td><?php echo $data->language; ?><td></tr>

            <tr>
            <td><b>Country</b></td><td><b>:</b></td>
            <td><?php echo $data->country; ?><td></tr>

            <tr>
            <td><b>Awards</b></td><td><b>:</b></td>
            <td><?php echo implode("-", $data->$awards); ?><td></tr>

            <tr>
            <td><b>Rating</b></td><td><b>:</b></td>
            <td><?php echo $data->rating; ?><td></tr>

    </body>
    </html>