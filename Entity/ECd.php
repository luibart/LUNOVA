<?php

class ECd{
    private string $id;
    private string $titolo;
    private float $prezzo;
    private string $genere;
    private string $copertina;
    private string $artista;
    private string $canzoni;

    /**
     * @param string $id
     * @param string $titolo
     * @param float $prezzo
     * @param string $genere
     * @param string $copertina
     * @param string $artista
     * @param string $canzoni
     */
    public function __construct(string $id, string $titolo, float $prezzo, string $genere, string $copertina, string $artista, string $canzoni)
    {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->genere = $genere;
        $this->copertina = $copertina;
        $this->artista = $artista;
        $this->canzoni = $canzoni;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitolo(): string
    {
        return $this->titolo;
    }

    /**
     * @return float
     */
    public function getPrezzo(): float
    {
        return $this->prezzo;
    }

    /**
     * @return string
     */
    public function getGenere(): string
    {
        return $this->genere;
    }

    /**
     * @return string
     */
    public function getCopertina(): string
    {
        return $this->copertina;
    }

    /**
     * @return string
     */
    public function getArtista(): string
    {
        return $this->artista;
    }

    /**
     * @return string
     */
    public function getCanzoni(): string
    {
        return $this->canzoni;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $titolo
     */
    public function setTitolo(string $titolo): void
    {
        $this->titolo = $titolo;
    }

    /**
     * @param float $prezzo
     */
    public function setPrezzo(float $prezzo): void
    {
        $this->prezzo = $prezzo;
    }

    /**
     * @param string $genere
     */
    public function setGenere(string $genere): void
    {
        $this->genere = $genere;
    }

    /**
     * @param string $copertina
     */
    public function setCopertina(string $copertina): void
    {
        $this->copertina = $copertina;
    }

    /**
     * @param string $artista
     */
    public function setArtista(string $artista): void
    {
        $this->artista = $artista;
    }

    /**
     * @param string $canzoni
     */
    public function setCanzoni(string $canzoni): void
    {
        $this->canzoni = $canzoni;
    }


}