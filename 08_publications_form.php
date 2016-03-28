<!doctype html>
<html lang="cs">
<head>
    <link rel="stylesheet" type="text/css" href="styly.css">
    <meta charset="UTF-8">
    <title>Formulář - vložení publikace</title>
</head>
​
<body>
<h1>Vložení publikace - formulář</h1>
    <form action="" method="post" >
        <p>
            <label for="isbn"><strong>ISBN</strong></label>
            <input name="isbn" type="text" size="50">
        </p>
        <p>
            <label for="title"><strong>Název titulu</strong></label>
            <textarea name="title" cols=50 rows=2 wrap="soft" ></textarea>
        </p>
        <p>
            <label for="numpages"><strong>Počet stran</strong></label>
            <input name="numpages" type="number" size="5">
        </p>
        <p>
            <label for="edition"><strong>Edice</strong></label>
            <input name="edition" type="text" size="2">
        </p>
        <p>
            <label for="published"><strong>Publikováno</strong></label>
            <input name="published" type="date" size="20">
        </p>
        
       <input type="submit" value="Odeslat">
    </form>

</body>
</html>
