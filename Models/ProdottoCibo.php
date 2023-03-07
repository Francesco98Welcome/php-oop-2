<?php
require_once __DIR__ . '/Prodotto.php';


class ProdottoCibo extends Prodotto
{
    public $tipo;
    public $descrizione;

    public function __construct($id, $titolo, $prezzo, $immagine, $tipo, $descrizione)
    {
        parent::__construct($id, $titolo, $prezzo, $immagine, 'Cibo');
        $this->tipo = $tipo;
        $this->descrizione = $descrizione;
    }

    public function visualizzaCard($moreInfo = [])
    {
        // Stampiamo la card del prodotto gioco
        return parent::visualizzaCard([$this->tipo, $this->descrizione]);
    }
}
