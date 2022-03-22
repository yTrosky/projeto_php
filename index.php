<?php

class  Pessoa{
    public $nome;
    public $endereco;
    public $bairro;
    public $cep;

    public function setNome($nome){
    $this-> nome = $nome;
}
public function getNome(){
    return $this -> nome;
 }

 public function setEndereco($endereco){
     $this ->endereco = $endereco;
 }

 public function getEndereco(){
     return $this -> endereco;
 }
 
 public function setBairro($bairro){
    $this -> bairro = $bairro;
}

public function getBairro(){
    return $this -> bairro;
}

public function setCep($cep){
    $this ->cep = $cep;
}

public function getCep(){
    return $this -> cep;
}
}

$temp = new Pessoa();

$temp -> setNome("Thiago Cruz Machado" );
echo"<h1>" . $temp -> getNome() ."<br>" . "</h1>";

$temp -> setEndereco("ETEC ZONA LESTE") ;
echo "<h2>" . $temp -> getEndereco()."<br>" . "</h2>";

$temp -> setBairro("Av. Aguia de Haia, 2223") ;
echo "<h3>" .$temp -> getBairro()."<br>" . "</h3>";

$temp -> setCep("222.555") ;
echo "<h4>". $temp -> getCep()."<br>" . "</h4>";

?>