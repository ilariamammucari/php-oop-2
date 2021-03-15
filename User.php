<?php

class User {
    private $id;
    public $nome;
    public $cognome;
    public $email;
    public $username;
    private $password;

    public function __construct($_nome,$_cognome,$_password){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->password = $_password;
    }

}