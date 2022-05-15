<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="<?= "http://" . $_SERVER['SERVER_NAME'] ?>/hack/evolitve/static/style.css">
    <title>e-Volitve Registracija</title>
</head>
<body style="display: grid; grid-template-columns: auto auto; font-family: 'JetBrains Mono', monospace;">
    <header style="width: 49vw; height: 99vh;">
        <img style="height: 4rem; margin: 25rem 0 0 20rem " src="<?= STATIC_URL . "/images/logo/logo2-white.png" ?>" alt="">
    </header>
    <div class="wrapper" style="width: 49vw; height: 99vh;" id="special1">
        <div class="form-wrapper" style="width: 49vw; height: 99vh;">
            <div class="form-body">
                <form style="margin:20rem 0 0 0;" action="<?= BASE_URL . "rezultati" ?>" method="post">
                    <h2 style="font-family: 'JetBrains Mono', monospace;">ADD CERT:</h2>
                    <input type="file" name="popofile" id="file">
                    <input class="button-31" id="special3" type="submit" value="REGISTER">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
