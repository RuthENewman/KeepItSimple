<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/assets/css/main.css"  />
    <title>Keep it SIMPLE</title>
</head>
<body>
    <section class="home-section">
        <div class="u-centre-text header-section u-margin-top-large u-margin-bottom-medium">
            <h1 class="main-heading--large">Keep it SIMPLE</h1>
            <h3 class="secondary-heading--purple">Scoring the simplicity of a text</h3>
        </div>
        <div>
            <?php
            ?>
        </div>
        <div class="form-section u-centre-text">
        <h4 class="tertiary-heading u-margin-bottom-medium">Input your text! </h4>
            <form class="form" method="POST" action="score.php">
                <div class="form__details u-centre-text input u-margin-bottom-medium">
                    <textarea class="form__input" type="text" placeholder="Your text"></textarea>
                </div>
                <button class="btn u-margin-bottom-small" type="submit">Submit</button>
            </form>
        </div>
    </section>
</body>
</html>