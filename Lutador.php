<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Lutador
 *
 * @author camil
 */
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    private $sexo;


    //CONSTRUCT
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em, $se) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
        $this->sexo = $se;
    }
    
    //GETERS AND SETERS
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    
    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if($this->peso < 52.2){
            $this->categoria = "Inav??lido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "M??dio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inv??lido";
        }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

    //M??TODOS
    public function apresentar() {
        echo "<p>-----------------------------</p>";
        echo "CHEGOU A HORA! O lutador " . $this->getNome();
        echo " do sexo ".$this->getSexo();
        echo ", veio diretamente de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso();
        echo "<br>Ele tem " . $this->getVitorias() . " vit??rias, ";
        echo $this->getDerrotas() . " derrotas " . $this->getEmpates() . " empates";
    }
    
    public function status() {
        echo "<p>-----------------------------</p>";
        echo "<p>" . $this->getNome() . " ?? um peso " . $this->getCategoria();
        echo " e j?? ganhou " . $this->getVitorias() . " vezes.";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes.";
    }  
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
        
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
