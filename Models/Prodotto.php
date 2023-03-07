<?php
class Prodotto
{
    public $id;
    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;

    public function __construct($id, $titolo, $prezzo, $immagine, $categoria)
    {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

    public function visualizzaCard($moreInfo = [])
    {
        // Stampo la card del prodotto
        $card = "<div class='card'>
                <img src='{$this->immagine}' />
                <h2>{$this->titolo}</h2>
                <p>Prezzo:  {$this->prezzo} € </p>
                <p>Categoria: {$this->categoria} </p>
                ";
        foreach ($moreInfo as $info) {
            $card .= "<p>{$info}</p>";
        }
        $card .= "</div>";
        return $card;

        /*echo '<div class="card">';
        echo '<img src="' . $this->immagine . '">';
        echo '<h2>' . $this->titolo . '</h2>';
        echo '<p>Prezzo: ' . $this->prezzo . ' €</p>';
        echo '<p>Categoria: ' . $this->categoria . '</p>';*/
    }
}
