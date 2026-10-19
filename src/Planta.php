<?php
class Planta
{
    private string $nome;
    private string $especie;
    private int $aguaPorDia;


public function __construct(string $nome, string $especie, int $aguaPorDia) 
{  
$this->nome = $nome;
$this->especie = $especie;
$this->aguaPorDia = $aguaPorDia;

$this->setAguaPordia($aguaPorDia);
}
public function ehPlanta(): bool
{
    return $this->aguaPorDia < 15;
}
public function getNome(): string {
     return $this->nome;
}
public function getEspecie(): string {
    return $this->especie;
}
public function getAguaPorDia(): int {
    return $this->aguaPorDia;
}
//Setters
public function setNome(string $nome): void {
    $this->nome = $nome;
}
public function setEspecie(string $especie): void {
    $this->especie = $especie;
}
public function setAguaPordia(int $aguaPorDia): void {
   if($aguaPorDia > 0){
$this->aguaPorDia = $aguaPorDia;}
}
}