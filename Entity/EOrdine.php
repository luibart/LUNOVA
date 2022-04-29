<?php

class EOrdine
{
private $id;
private $data;
private $pagato;
private $utente;
private $carrello;
private $totale;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $pagato
     */
    public function setPagato($pagato)
    {
        $this->pagato = $pagato;
    }

    /**
     * @param mixed $utente
     */
    public function setUtente($utente)
    {
        $this->utente = $utente;
    }

    /**
     * @param mixed $carrello
     */
    public function setCarrello($carrello)
    {
        $this->carrello = $carrello;
    }

    /**
     * @param mixed $totale
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;
    }

    /**
     * @param mixed $spedizione
     */
    public function setSpedizione($spedizione)
    {
        $this->spedizione = $spedizione;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getPagato()
    {
        return $this->pagato;
    }

    /**
     * @return mixed
     */
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * @return mixed
     */
    public function getCarrello()
    {
        return $this->carrello;
    }

    /**
     * @return mixed
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * @return mixed
     */
    public function getSpedizione()
    {
        return $this->spedizione;
    }
private $spedizione;
}