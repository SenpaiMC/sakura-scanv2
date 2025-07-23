<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="barre">
        <div class="contenue" style="width: 20%;"><form action="" method="post">
            <select name="genre" id="genre">
                <option value="Shonen">Shonen</option>
                <option value="Shojo">Shojo</option>
                <option value="Seinen">Seinen</option>
                <option value="Josei">Josei</option>
                <option value="Kodomo">Kodomo</option>
            </select>
            <select name="type" id="type">
                <option value="Action">Action</option>
                <option value="Aventure">Aventure</option>
                <option value="Comédie">Comédie</option>
                <option value="Drame">Drame</option>
                <option value="Fantastique">Fantastique</option>
                <option value="Horreur">Horreur</option>
                <option value="Romance">Romance</option>
                <option value="Science-fiction">Science-fiction</option>
            </select>
            <input type="submit" value="Valider">
        </form></div>
    </div>

    <div id="sortie">
    <div class="contenue3">
        <p>Sortie 1</p>
    </div>
    <div class="contenue3">
        <p>Sortie 2</p>
    </div>
    <div class="contenue3">
        <p>Sortie 3</p>
    </div>
    <div class="contenue3">
        <p>Sortie 4</p>
    </div>
    <div class="contenue3">
        <p>Sortie 5</p>
    </div>

</div>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>