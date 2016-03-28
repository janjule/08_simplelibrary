<!doctype html>
<html lang="cs">
<head>
    <link rel="stylesheet" type="text/css" href="styly.css">
    <meta charset="UTF-8">
    <title>Formulář - vložení publikace</title>
</head>
​
<body>
<h1>Uložení publikace</h1>

<?php 
$link = mysqli_connect("localhost", "root", "", "simplelibrary");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
$isbn = $_POST['isbn'];

if ($result = mysqli_query($link, "SELECT * FROM genres")) {
    printf("Select returned %d rows.", mysqli_num_rows($result));

    /* free result set */
    mysqli_free_result($result);
}


if (mysqli_query($link, 
        "INSERT INTO genres (title) 
                VALUES ('".$isbn."')
                ")
                
        === TRUE) {
        printf("<h1>Data byla úspěšně uložena do databáze.</h1>");
}

/*
"INSERT INTO `publications`
                (`isbn`,        `title`,    `numpages`,         `edition`,      `published`,    `created_at`) 
                VALUES 
        ((string)"Pokus", (string)"HOKUS", (int)"33", (int)"2", StrFTime("%d/%m/%Y", Time()), StrFTime("%d/%m/%Y", Time()) ")
*/

//$sql = "INSERT INTO lidi (jmeno,prijmeni,adresa,pozice) VALUES ('$jmeno','$prijmeni','$adresa','$pozice')"; 
//$vysledek = mysql_query($sql); 
//echo "<h1>Data byla úspěšně uložena do databáze.</h1>"; 

mysqli_close($link);

?> 

</body>
</html>
