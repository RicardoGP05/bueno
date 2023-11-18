<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function getHello()
    {
        return "Hola";
    }

    public function arrayContainsElement($element, $array)
    {
        return in_array($element, $array);
    }

    public function throwException()
    {
        throw new \InvalidArgumentException("This is an invalid argument exception.");
    }

    public function getNumbers()
    {
        return [1, 2, 3, 4, 5];
    }
}
