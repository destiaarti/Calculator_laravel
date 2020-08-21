<?php
namespace Dawah\Kalkulator;

class DecimalCalculator
{
 
public static function decimalToBinary(int $number)
    {
        return decbin($number);
    }
    public static function decimalToOcta(int $number)
    {
        return decoct($number);
    }
    public static function decimalToHexa(int $number)
    {
        return dechex($number);
    }
    public static function binaryToDecimal(string $data)
    {
        return bindec($data);
    }
    public static function binaryToOcta(string $data)
    {   $a = new DecimalCalculator();
       $b= $a->binaryToDecimal($data);
        //return $this->binaryToDecimal($data);
        return decoct($b);
    //return $b;
    } 
    public static function binaryToHexa(string $data)
    {
        $b = bindec($data);
        return dechex($b);
    }
    public static function octaToDecimal(string $data)
    {
        return octdec($data);
    }
    public static function octaToBinary(string $data)
    {  $new = octdec($data);  
        return  decbin($new);
    }
    public static function octaToHexa(string $data)
    {
        $new = octdec($data);
        return dechex($new);
    }
    public static function hexaToOcta(string $data)
    {
        $new = hexdec($data);
        return decoct($new);
    }
    public static function hexaToDecimal(string $data)
    {
        return hexdec($data);
    }
    public static function hexaToBinary(string $data)
    {
        $new = hexdec($data);
        return decbin($new);
    }


}