<?php

  class Parcela{
    private $valor;
    private $jurosPagos;
    private $valorAmortizacao;
    private $saldoDevedorAtual;

    public function __construct($valor, $jurosPagos, $valorAmortizacao, $saldoDevedorAtual){
      $this->valor = $valor;
      $this->jurosPagos = $jurosPagos;
      $this->valorAmortizacao = $valorAmortizacao;
      $this->saldoDevedorAtual = $saldoDevedorAtual;
    }

    public function getJurosPagos(){
      return $this->jurosPagos;
    }

    public function getValorAmortizacao(){
      return $this->valorAmortizacao;
    }

    public function getValor(){
      return $this->valor;
    }

    public function getSaldoDevedorAtual(){
      return $this->saldoDevedorAtual;
    }

    public function toArray(){
      return [
        'valor' => $this->valor,
        'jurosPagos' => $this->jurosPagos,
        'valorAmortizacao' => $this->valorAmortizacao,
        'saldoDevedorAtual' => $this->saldoDevedorAtual
      ];
    }

  }

?>
