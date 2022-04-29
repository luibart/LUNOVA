<?php

class EUtente
{

    private string $nome;
    private string $cognome;
    private string $email;
    private string $password;
    private string $username;
    private bool $admin;

    /**
     * @param string $nome
     * @param string $cognome
     * @param string $email
     * @param string $password
     * @param string $username
     * @param bool $admin
     */
    public function __construct($nome, $cognome, $email, $password, $username, $admin)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;
        $this->username = $username;
        $this->admin = $admin;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->admin;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @param string $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = strtolower($username);
    }

    /**
     * @param bool $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }


}