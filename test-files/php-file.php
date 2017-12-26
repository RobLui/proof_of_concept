<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
  
  // FUNCTIE 1
  public function TestFunctionOne() {
    $a = 3;
    $b = 2;
    $result = $a * $b;
    return $result;
  }
  
  // REPEAT FUNCTION 1
  public function TestFunctionTwo() {
    $c = 3;
    $d = 2;
    $result = $c * $d;
    return $result;
  }
  
  // REPEAT FUNCTION 2
  public function TestFunctionThree() {
    $e = 3;
    $f = 2;
    $result = $e * $f;
    return $result;
  }
  
  public function __construct() {
    $a = $this->TestFunctionOne();
    $b = $this->TestFunctionTwo();
    $c = $this->TestFunctionThree();
    return $c;
  }
  
}
