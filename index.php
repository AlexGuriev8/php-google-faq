<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>

<body>
    <header>
        <a href="#"><img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo"></a>
        <h2><a href="#">Privacy e termini</a></h2>
        <ul class="intro">
            <li><a href="#">Introduzione</a></li>
            <li><a href="#">Norme sulla privacy</a></li>
            <li><a href="#">Termini di servizio</a></li>
            <li><a href="#">Tecnologie</a></li>
            <li><a class="special" href="#">Domande frequenti</a></li>
        </ul>
    </header>
    <section>
        <div class="container term">
            <?php foreach ($info as $dato) { ?>
                <h2><?php echo $dato['titolo'] ?></h2>
                <p><?php echo nl2br($dato['paragrafo']); ?></p>
            <?php } ?>
        </div>
    </section>
    <footer>

    </footer>
</body>

</html>