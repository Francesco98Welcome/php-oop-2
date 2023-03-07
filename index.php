<?php
require_once __DIR__ . '/Models/Negozio.php';
require_once __DIR__ . '/Models/ProdottoGioco.php';
require_once __DIR__ . '/Models/ProdottoCuccia.php';
require_once __DIR__ . '/Models/ProdottoCibo.php';


$negozio = new Negozio();

// Aggiungi alcuni prodotti al negozio
$negozio->aggiungiProdotto(new ProdottoCibo(1, 'Croccantini per cani', 20, 'immagini/croccantinicani.jpeg', 'Cani', 'Croccantini per cani di taglia media'));
$negozio->aggiungiProdotto(new ProdottoGioco(2, 'Palla per gatti', 5, 'immagini/pallapergatti.jpeg', 'Gatti', 'Palla morbida per gatti'));
$negozio->aggiungiProdotto(new ProdottoCuccia(3, 'Cuccia per cani', 50, 'immagini/cucciapercani.jpeg', 'Cani', 'Cuccia morbida per cani di taglia grande'));

// Visualizza i prodotti nel negozio
//$negozio->visualizzaProdotti();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container">
        <?php
        $negozio->visualizzaProdotti();
        ?>
    </div>
</body>

</html>