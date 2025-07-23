<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="espace-user">
            <h1>Bienvenue dans votre espace profil</h1>
                <img src="" alt="Avatar" class="avatar">
                <p>Pseudo</p>
                <section id="espace_user">
        
        <?php if (!empty($_SESSION['photo_profil'])): ?>
            <img src="<?php echo "assets/".  htmlspecialchars($_SESSION['photo_profil']); ?>" alt="Photo de profil">
            <?php else: ?>
                <p>Aucune photo de profil enregistrée.</p>
                <?php endif; ?>
                <?php if (!empty($_SESSION['utilisateur_nom'])): ?>
                <p><?php echo isset($_SESSION['utilisateur_nom']) ? htmlspecialchars($_SESSION['utilisateur_nom']) : 'Nom d\'utilisateur non défini.'; ?></p>
            <?php else: ?>
                <p>Nom d'utilisateur non défini.</p>
            <?php endif; ?>
                        
    </section>

    </section>
    <?php include 'includes/footer.php'; ?>
</body>
</html>