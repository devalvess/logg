<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function soma($num1, $num2)
    {
        $soma = $num1 + $num2;
        logger()->info('soma feita');

        return $soma;
    }
}
