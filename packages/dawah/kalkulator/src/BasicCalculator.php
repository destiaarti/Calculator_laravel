<?php
namespace Dawah\Kalkulator;

class BasicCalculator
{
    public static function add(array $data)
    {
        return array_sum($data);
    }
    public static function mutiply(array $data)
    {
        return array_product($data);
    }

    public static function minus(int $data,int $data1 )
    {
        return ($data-$data1);
    }
    public static function bagi(int $data, int $data1)
    {
        return ($data/$data1);
    }
    public static function akar(int $data)
    {
        return (sqrt($data));
    }
    public static function modulo(int $data, int $data1)
    {
        return ($data % $data1);
    }


}