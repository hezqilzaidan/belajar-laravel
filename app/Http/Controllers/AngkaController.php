<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkaController extends Controller
{
    public function angka(){
    
    // integer
      $angka1 = 4174;
      $angka2 = 1256156;
      $penjumlahan = $angka1 + $angka2;
    // varchar   
      $huruf = "huruf"; 
      
      return $angka1;
      return $angka2;
      return $penjumlahan;

    }
}
