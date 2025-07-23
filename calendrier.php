<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="barre">
        <div class="contenue"><p>Calendrier</p></div>
    </div>

    <div class="barre">
        <div class="contenue"><form action="" method="post">
            <label for="date"></label>
            <select name="jour" id="jour">
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Samedi">Samedi</option>
                <option value="Dimanche">Dimanche</option>
            </select>
            <input type="submit" value="Valider">
        </form></div>
    </div>
            <script>
                // Sélectionne automatiquement le jour actuel
                const jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
                const today = new Date();
                const todayJour = jours[today.getDay()];
                document.addEventListener("DOMContentLoaded", function() {
                    document.getElementById("jour").value = todayJour;
                });
            </script>

    <div class="barre">
        <div class="calendrier"></div>
        <div class="calendrier"></div>
        <div class="calendrier"></div>
        <div class="calendrier"></div>
        <div class="calendrier"></div>
    </div>

        <?php include 'includes/footer.php'; ?>
    
</body>
</html>