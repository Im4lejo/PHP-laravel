<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Substract;
use App\Models\Amigos;
use App\Models\CircleArea;
use App\Models\Factorial;
use App\Models\Primos;
use App\Models\Quadratic;
use App\Models\TriangleArea;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function frm_sumar()
    {

        return view('frm_sumar');
    }

    public function sumar(Request $request)
    {
        $add = new Add();
        $add->numero1 = $request->numero1;
        $add->numero2 = $request->numero2;

        $add->resultado = $add->numero1 + $add->numero2;
        $add->save();
        return $add->resultado;
    }

    public function frm_restar()
    {

        return view('frm_restar');
    }

    public function restar(Request $request)
    {
        $substract = new Substract();
        $substract->numero1 = $request->numero1;
        $substract->numero2 = $request->numero2;

        $substract->resultado = $substract->numero1 - $substract->numero2;
        $substract->save();
        return $substract->resultado;
    }
    //circulo Area
    public function frm_circulo()
    {

        return view('frm_circulo');
    }
    public function circuloArea(Request $request)
    {
        $circleArea = new CircleArea();
        $circleArea->radio = $request->radio;
        $respuesta =M_PI * pow($request->radio, 2);
        $circleArea->resultado = $respuesta;
        $circleArea->save();
        return $respuesta;
    }


    // Cuadratica
    public function frm_cuadratica()
    {

        return view('frm_cuadratica');
    }
    public function cuadratica(Request $request )
    {
        $quadratic = new Quadratic();
        $a = $request-> a;
        $b = $request-> b;
        $c = $request-> c;
        $quadratic->a = $a;
        $quadratic->b = $b;
        $quadratic->c = $c;
        echo "caso positivo ";
        $positivo = ((-$b + (pow($b, 2) - 4 * $a * $c)) / (2 * $a));
        $quadratic->positivo = $positivo;
        echo $positivo;
        echo " caso negativo ";
        $negativo = ((-$b - (pow($b, 2) - 4 * $a * $c)) / (2 * $a));
        $quadratic->negativo = $negativo;
        $quadratic->save();
        echo $negativo;
    }
    //Numeros Amigos
    public function frm_amigos()
    {

        return view('frm_amigos');
    }
    public function amigos(Request $request): string
    {
        $amigos = new Amigos();
        $positivo = "los numeros son amigos";
        $negativo = "los numeros no son amigos";

        $amigos->num1 = $request-> num1;
        $amigos->num2 = $request-> num2;
        $sumTot1 = 1;
        $sumTot2 = 1;

        for ($i = 2; $i < $request-> num1; $i++) {
            if ($request-> num1 % $i == 0) {
                $sumTot1 += $i;
            }
        }

        for ($i = 2; $i < $request-> num2; $i++) {
            if ($request-> num2  % $i == 0) {
                $sumTot2 += $i;
            }
        }

        if ($sumTot1 == $request-> num2 && $sumTot2 == $request-> num1) {
            $amigos->resultado = $positivo;
            $amigos->save();
            return $positivo;
        }
        $amigos->resultado = $negativo;
        $amigos->save();
        return $negativo;
                
    }
    // Factorial
        public function frm_factorial()
    {

        return view('frm_factorial');
    }
        public function factorial(Request $request){
        $facto = new Factorial();
        $facto->num = $request->num;
        $resultado= 1;
        
        for ($i=1; $i <=$request->num; $i++) {
            $resultado = $resultado * $i;
        }
        $facto->resultado = $resultado;
        $facto->save();
        return $resultado;
    }
    // numeros primos
    public function frm_primos()
    {

        return view('frm_primos');
    }
    public function primos(Request $request){
        $positivo = "el numero es primo";
        $negativo = "el numero no es primo";
    $primos = new Primos();
    $num = $request->num;
    $primos->num = $request-> num;
    if ($num <= 1) {
    $primos->resultado = $negativo;
    $primos->save();
    return $negativo;
}
    for ($i = 2; $i < $num; $i++) {

        if ($num % $i == 0) {

            $primos->resultado = $negativo;

            $primos->save();

            return $negativo;
        }
    }
    $primos->resultado = $positivo;

    $primos->save();

    return $positivo;
    }
    public function frm_triangulo()
    {

        return view('frm_triangulo');
    }
    // Area de triangulos
    public function trianguloArea(Request $request){
        $tri = new TriangleArea();
        $base = $request->base;
        $altura = $request->altura;
        $tri->base = $base;        
        $tri->altura = $altura;
        $resultado = ($base * $altura)/2;
        $tri->resultado = $resultado;
        $tri->save();
        return $resultado;
    }
}
