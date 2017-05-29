<?php
namespace supatchareet\Calculator;
class Calculator
{
    public function add($first_num, $second_num)
    {
        return $first_num + $second_num;
    }
   
    public function substract($first_num, $second_num)
    {
        return $first_num - $second_num;
    }
    
    public function multiply($first_num, $second_num)
    {
        return $first_num * $second_num;
    }
    
    public function divide($first_num, $second_num)
    {
        return $first_num / $second_num;
    }
}