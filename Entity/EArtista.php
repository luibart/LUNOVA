<?php

class EArtista
{
    private string $nome_arte;
    private string $email;
    private string $password;
    private array $dischi;

    /**
     * @param string $nome_arte
     * @param string $email
     * @param string $password
     * @param array $dischi
     */
    public function __construct(string $nome_arte, string $email, string $password, array $dischi)
    {
        $this->nome_arte = $nome_arte;
        $this->email = $email;
        $this->password = $password;
        $this->dischi = $dischi;
    }

    /**
     * @return string
     */
    public function getNomeArte(): string
    {
        return $this->nome_arte;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getDischi(): array
    {
        return $this->dischi;
    }

    /**
     * @param string $nome_arte
     */
    public function setNomeArte(string $nome_arte): void
    {
        $this->nome_arte = $nome_arte;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param array $dischi
     */
    public function setDischi(array $dischi): void
    {
        $this->dischi = $dischi;
    }

    public function aggiungiCd(ECd $cd){
        //salva il cd nel db
    }

}