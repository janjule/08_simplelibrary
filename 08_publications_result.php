<!doctype html>
<html lang="cs">
<head>
    <link rel="stylesheet" type="text/css" href="styly.css">
    <meta charset="UTF-8">
    <title>Formulář - vložení publikace</title>
</head>
​
<body>
<h3>Uložení publikace</h3>

<?php 
$link = mysqli_connect("localhost", "root", "", "simplelibrary");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$numpages = $_POST['numpages'];
$edition = $_POST['edition'];
$published = $_POST['published'];
$created_at = Date("Y-m-d H:i:s");

if (mysqli_query($link, "INSERT INTO publications
                (isbn,        title,    numpages,         edition,      published,    created_at) 
                VALUES 
        ('".$isbn."', '".$title."', '".$numpages."', '".$edition."', '".$published."', '".$created_at."')
        ")
        === TRUE) {
        printf("<h1>Data byla úspěšně uložena do databáze.</h1>");
}   else {
        printf("<h1>Data NEBYLA uložena do databáze.</h1>");
}


mysqli_close($link);

?> 

</body>
</html>
