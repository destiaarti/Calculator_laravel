<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/testing', function () {
    $array = [2,89,99,150,89,64,39];
    echo implode(' + ',$array) . ' = '. \Dawah\Kalkulator\BasicCalculator::add($array). '<br>';
    $array = [2,4,8];
    echo implode ('*',$array). '='  . \Dawah\Kalkulator\BasicCalculator::mutiply($array).'<br>';
    $number = rand(10,100);
   $binary = \Dawah\Kalkulator\Basic2Calculator::decimalToBinary($number);
    echo $number . 'dalam biner: ' . $binary. '<br>';
    $hex = \Dawah\Kalkulator\Basic2Calculator::binaryToDecimal($binary);
    echo $binary . 'dalam desimal : '.$hex.'<br>';

});
