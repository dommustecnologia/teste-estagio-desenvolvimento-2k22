<?php

  require_once 'Parcela.php';

  class Financiamento{

    private $valorFinanciado;
    private $juros;
    private $quantidadePrestacoes;

    public function __construct($valorFinanciado, $juros, $quantidadePrestacoes){
      $this->valorFinanciado = $valorFinanciado;
      $this->juros = $juros;
      $this->quantidadePrestacoes = $quantidadePrestacoes;
    }

    // O Fator Acumulado de Capitalização do Financiamento é determinado por (1 + taxa de juros) elevado à
    // potência da quantidade de prestações
    // IMPLEMENTE A FUNÇÃO QUE REALIZA ESSE CÁLCULO - A SAÍDA ESPERADA QUANDO juros = 0.05 e quantidadePrestacoes = 36 é 5.791816136
    private function calcularFatorAcumuladoCapitalizacao(){
    }

    // O coeficiente Price é utilizado para calcular o valor de cada parcela; de forma a garantir que cada
    // parcela terá o mesmo valor sob o regime de juros compostos; ele é determinado por uma divisão na qual
    // o numerador é o Fator Acumulado de Capitalização multiplicado pela taxa de juros - e o denominador
    // é o Fator Acumulado de Capitalização subtraído o inteiro 1
    // IMPLEMENTE A FUNÇÃO QUE REALIZA ESSE CÁLCULO - A SAÍDA ESPERADA QUANDO $fatorAcumuladoCapitalizacao = 5.791816136 e $juros = 0.05
    // é 0.060434457
    private function calcularCoeficientePrice($fatorAcumuladoCapitalizacao){
    }

    // O valor da prestação é determinado pelo valor financiado multiplicado pelo coeficiente price.
    // IMPLEMENTE A FUNÇÃO QUE CALCULA O VALOR DA PRESTAÇÃO PARA ESSE FINANCIAMENTO
    // A SAÍDA ESPERADA QUANDO juros = 0.05, quantidadePrestacoes = 36 e valorFinanciado = 15000 é de 906.52
    // já arredondado para duas casas decimais;
    private function calcularValorPrestacao(){
    }

    // Um objeto Parcela é composto pelo seu valor (calculado anteriormente), os juros pagos
    // nessa parcela ( juros * $saldoDevedor), o valor amortizado (valor da parcela - juros pagos)
    // e o saldoDevedorAtual (que será o $saldoDevedor - valorAmortizado da parcela);
    // IMPLEMENTE O MÉTODO QUE CRIA UM OBJETO DO TIPO PARCELA PASSANDO COMO PARÂMETRO PARA O CONTRUTOR 
    // O VALOR DA PRESTAÇÃO, OS JUROS PAGOS, O VALOR DA AMORTIZAÇÃO E O SALDO DEVEDOR ATUALIZADO
    private function criarParcela($saldoDevedor, $valorPrestacao){
    }

    // O demonstrativo de pagamento do financiamento deve trazer os valores pagos
    // à cada parcela; você deve retornar um vetor de objetos do tipo Parcela - a cada parcela paga
    // do valor do Saldo Devedor (que inicialmente é o valor do Finaciamento)
    // deve ser atualizado e na última parcela deverá estar pago
    public function gerarDemonstrativoPagamento(){
    }
  }

?>
