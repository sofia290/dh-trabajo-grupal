<?php
class Usuario{

    private $nombre;
    private $email;
    private $id;

    public function __construct($nom,$ema, $id){
        $this->nombre = $nom;
        $this->email = $ema;
        $this->id = $id; 
    }

}
