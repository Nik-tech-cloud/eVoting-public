<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= STATIC_URL ?>style-pregled.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">

    <style></style>
    <title>Document</title>
</head>
<body>
    <header id="head">
        <img src="<?= STATIC_URL . "images/logo/logo2-greeen.png"?>" alt="">
        <a href="<?= BASE_URL . "user/logout"?>">LOGOUT</a>
    </header>
    <div class="main-wrapper">
        <h1><span>Voting Ballot</span> <a id="inst">Instructions</a></h1>
        <form action="<?= BASE_URL . "user/register" ?> "  id="izbira" method="post">
            <div class="container" id="main">
                <?php
                    require_once "controllers/StrankaController.php";
                    foreach(StrankaController::getIds() as $i) :
                ?>
                    <div class="stranka-wrapper">
                        <label for="<?= $i["ID_STRANKE"] ?>" id="<?= $i["ID_STRANKE"] ?>-wrapper">
                            <div class="slika"><img src="<?= STATIC_URL . StrankaController::getLogo($i["ID_STRANKE"])?>" alt=""></div>
                        <div class="opis">
                            <span><?= StrankaController::getPrecednik($i["ID_STRANKE"]) ?></span>
                        </div>
                        <a href="<?= BASE_URL . "/stranka/program/" . $i["ID_STRANKE"]?>" class="o-stranki">O Stranki</a>
                        </label>
                        <input type="radio" id="<?= $i["ID_STRANKE"] ?>" name="stranka" value="<?= StrankaController::getNaziv($i["ID_STRANKE"]) ?>">
                    </div>
                <?php endforeach; ?>
            </div>
            <div id="display-inst" style="display:none">
                <ol>
                    <li>Click on the desierd party you wish to vote for</li>
                    <li>Click on send vote</li>
                    <li>You will be redirected to the certificate verification page</li>
                    <li>Add your digital certificate which will be used for verifying your identity</li>
                    <li>If the verification is successful you will be redirected to the results page</li>
                </ol>
            </div>
    
        </form>
    </div>
    <div id="button-wrapper">
        <button id="button" form="izbira">Send Vote</button>
    </div>
    <footer>
        <span>Powered By Lumpi Software Solutions</span>
    </footer>
</body>
<script>
    document.getElementById("inst").addEventListener("click", () => {
        if (document.getElementById("inst").innerHTML == "Instructions") {
            document.getElementById("main").style = "display: none";
            document.getElementById("button-wrapper").style = "display: none";
            document.getElementById("display-inst").style = "";
            document.getElementById("inst").innerHTML = "Return";
        } else {
            document.getElementById("main").style = "container";
            document.getElementById("button-wrapper").style = "";
            document.getElementById("display-inst").style = "display: none";
            document.getElementById("inst").innerHTML = "Instructions";
        }
    });
    let id=document.getElementById('head');
    <?php
        require_once "controllers/StrankaController.php";
        foreach(StrankaController::getIds() as $i) :
        $index = $i["ID_STRANKE"];
    ?>
    
    document.getElementById(<?= $index ?>).addEventListener("click", () => {
        if (id == document.getElementById('<?= $index ?>-wrapper')) {
            id.classList.remove("click");
            id=document.getElementById('head');
            document.getElementById("button").innerHTML = "Oddaj Glas";
        } else {
            id.classList.remove("click");
            document.getElementById('<?= $index ?>-wrapper').classList.add("click");
            document.getElementById("button").innerHTML = "Send Vote For <?= StrankaController::getNaziv($index) ?>";
            id = document.getElementById('<?= $index ?>-wrapper');

            console.log("test");
        }
    });
    <?php endforeach; ?>
</script>
</html>