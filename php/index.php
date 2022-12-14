<?php
  require_once 'Financiamento.php';

  // Implemente os métodos na classe Financiamento de acordo com os comentários no código;
  // O objetivo é que o script abaixo gere o seguinte json:
  /*
  [{
  	"valor": 906.52,
  	"jurosPagos": 750,
  	"valorAmortizacao": 156.52,
  	"saldoDevedorAtual": 14843.48
  }, {
  	"valor": 906.52,
  	"jurosPagos": 742.17,
  	"valorAmortizacao": 164.35,
  	"saldoDevedorAtual": 14679.13
  }, {
  	"valor": 906.52,
  	"jurosPagos": 733.96,
  	"valorAmortizacao": 172.56,
  	"saldoDevedorAtual": 14506.57
  }, {
  	"valor": 906.52,
  	"jurosPagos": 725.33,
  	"valorAmortizacao": 181.19,
  	"saldoDevedorAtual": 14325.38
  }, {
  	"valor": 906.52,
  	"jurosPagos": 716.27,
  	"valorAmortizacao": 190.25,
  	"saldoDevedorAtual": 14135.13
  }, {
  	"valor": 906.52,
  	"jurosPagos": 706.76,
  	"valorAmortizacao": 199.76,
  	"saldoDevedorAtual": 13935.37
  }, {
  	"valor": 906.52,
  	"jurosPagos": 696.77,
  	"valorAmortizacao": 209.75,
  	"saldoDevedorAtual": 13725.62
  }, {
  	"valor": 906.52,
  	"jurosPagos": 686.28,
  	"valorAmortizacao": 220.24,
  	"saldoDevedorAtual": 13505.38
  }, {
  	"valor": 906.52,
  	"jurosPagos": 675.27,
  	"valorAmortizacao": 231.25,
  	"saldoDevedorAtual": 13274.13
  }, {
  	"valor": 906.52,
  	"jurosPagos": 663.71,
  	"valorAmortizacao": 242.81,
  	"saldoDevedorAtual": 13031.32
  }, {
  	"valor": 906.52,
  	"jurosPagos": 651.57,
  	"valorAmortizacao": 254.95,
  	"saldoDevedorAtual": 12776.37
  }, {
  	"valor": 906.52,
  	"jurosPagos": 638.82,
  	"valorAmortizacao": 267.7,
  	"saldoDevedorAtual": 12508.67
  }, {
  	"valor": 906.52,
  	"jurosPagos": 625.43,
  	"valorAmortizacao": 281.09,
  	"saldoDevedorAtual": 12227.58
  }, {
  	"valor": 906.52,
  	"jurosPagos": 611.38,
  	"valorAmortizacao": 295.14,
  	"saldoDevedorAtual": 11932.44
  }, {
  	"valor": 906.52,
  	"jurosPagos": 596.62,
  	"valorAmortizacao": 309.9,
  	"saldoDevedorAtual": 11622.54
  }, {
  	"valor": 906.52,
  	"jurosPagos": 581.13,
  	"valorAmortizacao": 325.39,
  	"saldoDevedorAtual": 11297.15
  }, {
  	"valor": 906.52,
  	"jurosPagos": 564.86,
  	"valorAmortizacao": 341.66,
  	"saldoDevedorAtual": 10955.49
  }, {
  	"valor": 906.52,
  	"jurosPagos": 547.77,
  	"valorAmortizacao": 358.75,
  	"saldoDevedorAtual": 10596.74
  }, {
  	"valor": 906.52,
  	"jurosPagos": 529.84,
  	"valorAmortizacao": 376.68,
  	"saldoDevedorAtual": 10220.06
  }, {
  	"valor": 906.52,
  	"jurosPagos": 511,
  	"valorAmortizacao": 395.52,
  	"saldoDevedorAtual": 9824.54
  }, {
  	"valor": 906.52,
  	"jurosPagos": 491.23,
  	"valorAmortizacao": 415.29,
  	"saldoDevedorAtual": 9409.25
  }, {
  	"valor": 906.52,
  	"jurosPagos": 470.46,
  	"valorAmortizacao": 436.06,
  	"saldoDevedorAtual": 8973.19
  }, {
  	"valor": 906.52,
  	"jurosPagos": 448.66,
  	"valorAmortizacao": 457.86,
  	"saldoDevedorAtual": 8515.33
  }, {
  	"valor": 906.52,
  	"jurosPagos": 425.77,
  	"valorAmortizacao": 480.75,
  	"saldoDevedorAtual": 8034.58
  }, {
  	"valor": 906.52,
  	"jurosPagos": 401.73,
  	"valorAmortizacao": 504.79,
  	"saldoDevedorAtual": 7529.79
  }, {
  	"valor": 906.52,
  	"jurosPagos": 376.49,
  	"valorAmortizacao": 530.03,
  	"saldoDevedorAtual": 6999.76
  }, {
  	"valor": 906.52,
  	"jurosPagos": 349.99,
  	"valorAmortizacao": 556.53,
  	"saldoDevedorAtual": 6443.23
  }, {
  	"valor": 906.52,
  	"jurosPagos": 322.16,
  	"valorAmortizacao": 584.36,
  	"saldoDevedorAtual": 5858.87
  }, {
  	"valor": 906.52,
  	"jurosPagos": 292.94,
  	"valorAmortizacao": 613.58,
  	"saldoDevedorAtual": 5245.29
  }, {
  	"valor": 906.52,
  	"jurosPagos": 262.26,
  	"valorAmortizacao": 644.26,
  	"saldoDevedorAtual": 4601.03
  }, {
  	"valor": 906.52,
  	"jurosPagos": 230.05,
  	"valorAmortizacao": 676.47,
  	"saldoDevedorAtual": 3924.56
  }, {
  	"valor": 906.52,
  	"jurosPagos": 196.23,
  	"valorAmortizacao": 710.29,
  	"saldoDevedorAtual": 3214.27
  }, {
  	"valor": 906.52,
  	"jurosPagos": 160.71,
  	"valorAmortizacao": 745.81,
  	"saldoDevedorAtual": 2468.46
  }, {
  	"valor": 906.52,
  	"jurosPagos": 123.42,
  	"valorAmortizacao": 783.1,
  	"saldoDevedorAtual": 1685.36
  }, {
  	"valor": 906.52,
  	"jurosPagos": 84.27,
  	"valorAmortizacao": 822.25,
  	"saldoDevedorAtual": 863.11
  }, {
  	"valor": 906.52,
  	"jurosPagos": 43.16,
  	"valorAmortizacao": 863.36,
  	"saldoDevedorAtual": -0.25000000000125
  }]
  */
  $financiamento = new Financiamento(15000, 0.05, 36);
  echo json_encode(array_map(function($parcela){
    return $parcela->toArray();
  }, $financiamento->gerarDemonstrativoPagamento()));

?>
