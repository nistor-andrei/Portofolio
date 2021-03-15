
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    <input type="radio" id="Dimensiune fisier" name="optiune" value="dimensiune_fisier">
        <label for="dimensiune_fisier">Dimensiune Fisier</label>
    <input type="radio" id="Tip fisier" name="optiune" value="tip_fisier">
        <label for="tip_fisier">Tip Fisier</label>
    <input type="radio" id="Fara extensie" name="optiune" value="fisier_fara_extensie">
        <label for="fisier_fara_extensie">Afisare nume fisier fara extensie</label>
    <input type="radio" id="Extensie fisier" name="optiune"    value="extensie">
        <label for="extensie">Afisare extensie fisier</label>
    <input type="radio" id="Stergere Fisier" name="optiune" value="stergere_fisier">
        <label for="stergere_fisier">Stergere Fisier</label>
    </form>
</body>
</html>
