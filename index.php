<?php
require_once 'data/data.php';
/* Riscrivere questa pagina del sito google:
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Realizziamo la struttura dati che ci sembra più adatta per poter 
poi stampare con un ciclo le domande e risposte della sezione centrale.
Consigli:
Teniamo a mente le differenze tra array associativo ed array con indici numerici
Ricordiamo che possiamo inserire tag all'interno delle stringhe di PHP, saranno 
convertiti in HTML quando faremo echo
Concentriamoci sulle FAQ e lasciamo per ultimo header e footer (e il loro CSS)
Lasciamo per ultimo header e footer (e il loro CSS) e concentriamoci sulle FAQ
Prima facciamo le FAQ e solo dopo header e footer.
BONUS:
Inserire le voci di menu dell'header tramite un array di PHP (i link non devono funzionare) */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" integrity="sha512-NZ19NrT58XPK5sXqXnnvtf9T5kLXSzGQlVZL9taZWeTBtXoN3xIfTdxbkQh6QSoJfJgpojRqMfhyqBAAEeiXcA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <title>FAQ</title>
</head>
<body>
    <header class="d-flex align-items-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="logo google" class="img-fluid">
        <span class="color-gray">Privacy e termini</span>
    </header>
    <nav>
            <ul>
                <li>Introduzione</li>
                <li>Norme sulla privacy</li>
                <li>Termini di servizio</li>
                <li>Tecnologie</li>
                <li class="active">Domande frequenti</li>
            </ul>
        </nav>
        <hr>
    <main>
        <div class="container">
            <?php foreach($faqs as $faq):?>
                <div class="my-5" id="faq">
                    <div class="fs-3 pb-3"><strong><?= $faq['title']?></strong></div>
                    <div class="fs-13"><?= $faq['risp']?></div>
                </div>
                <?php endforeach;?>
            </div>
    </main>
</body>
</html>