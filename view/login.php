<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= STATIC_URL . "/style.css" ?>">

    <title>Login</title>
</head>
<body>
    <div class="logo-wrapper">
        <div class="center">
            <img id="logo" src="<?= STATIC_URL . "/images/logo/logo2-white.png" ?>" alt="eVolitve">
            <p>Fast, transparent, trustworthy, simple voting solution.</p>
            <p>Voting reimagened.</p>
        </div>
    </div>
    <div class="form-div">
        <form action="<?= BASE_URL . "user/login" ?>" method="post">
            <input placeholder="EMSO" type="name" name="emso">
            <input placeholder="PASSWORD" type="password" name="password">
            <input class="button-31" type="submit">
        </form>
    </div>
</body>
</html>