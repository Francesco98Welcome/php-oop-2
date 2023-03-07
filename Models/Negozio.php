<?php

require_once __DIR__ . '/Prodotto.php';

class Negozio
{
    public $prodotti;

    public function __construct()
    {
        $this->prodotti = array();
    }

    public function aggiungiProdotto(Prodotto $prodotto)
    {
        // Aggiungo un prodotto all'array
        $this->prodotti[] = $prodotto;
    }

    public function visualizzaProdotti()
    {
        // Stampo la card di tutti i prodotti nel negozio
        foreach ($this->prodotti as $prodotto) {
            echo  $prodotto->visualizzaCard();
        }
    }
}
