<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Welcome(){
        return view('welcome');
    }

    public function Exemplo(){
        return view('exemplo');
    }

    public function Exercicio1(){
        return view('exercicio1');
    }

    public function Exercicio2(){
        return view('exercicio2');
    }

    public function Exercicio3(){
        return view('exercicio3');
    }

    public function Exercicio4(){
        return view('exercicio4');
    }

    public function Exercicio5(){
        return view('exercicio5');
    }

    public function resultado(Request $request){
        $valor = $request["valor"];
        return "O valor informado é $valor";
    }

    public function resultado1(Request $request){
        $valor_pago = $request["valor_pago"];
        $valor_produto = $request["valor_produto"];
        $troco = $valor_pago - $valor_produto;
        return "Troco: R$$troco";
    }

    public function resultado2(Request $request){
        $valor_kilo = $request["valor_kilo"];
        $qntd_kilo = $request["qntd_kilo"];
        $valor = $valor_kilo * $qntd_kilo;
        return "Valor a se pagar: R$ $valor";
    }

    public function resultado3(Request $request){
        $valor = $request["valor"];
        if ($valor > 10)
            return "O valor é maior que 10";
        else if ($valor == 10)
            return "O valor é igual a 10";
        else
            return "O valor é menor que 10";
    }

    public function resultado4(Request $request){
        $valor = $request["valor"];
        if ($valor > 0)
            return "Valor Positivo";
        else if ($valor == 0)
            return "Igual a Zero";
        else
            return "Valor Negativo";
    }

    public function resultado5(Request $request){
        $n1 = $request["nota1"];
        $n2 = $request["nota2"];
        $n3 = $request["nota3"];
        $n4 = $request["nota4"];
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        if ($media >= 7)
            return "Aluno aprovado";
        else
            return "Aluno reprovado";
    }
}
