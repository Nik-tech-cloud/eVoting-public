<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= STATIC_URL ?>style-o-stranki.css">
    <title>O stranki ~ <?= $naziv ?></title>
</head>
<body>
    <header>
        <h1><?= $naziv ?></h1>
    </header>
    <div class="president">
        <div class="picture-wrapper">
            <div class="pic">
                <img id="prc"src="<?= STATIC_URL . $oseba?>" alt="">
            </div>
        </div>
        <div class="quote-wrapper">
            <div class="quote">
                <p id="shorts"><?= $kratek ?> ~ <b><?= $precednik ?></b></p>
            </div>
        </div>
    </div>
    <div class="stranka">
        <div class="quote-wrapper long">
            <div class="quote long">
                <p id="longs"><?= $dolg ?></p>
            </div>
        </div>
        <div class="picture-wrapper long">
            <div class="pic long">
                <img src="<?= STATIC_URL . $logo?>" alt="">
            </div>
        </div>
    </div>
    <footer>
        <div class="data">
            <p id="more">You can find more data about <?= $naziv ?> <a href="<?= $link ?>">here</a>. If you are not sure who to vote chech <a href="https://volitvomat.si">this</a>.</p>
        </div>
        <div class="logo-wrapper">
            <div class="logo">
                <img id="logo" src="<?= STATIC_URL . "/images/logo/logo2-blu.png" ?>" alt="eVolitve">
            </div>
        </div>
    </footer>
</body>
</html>