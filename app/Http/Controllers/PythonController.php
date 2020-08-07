<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{

    public function change(){
        /*exec("pip install pandas");
        exec("pip install janome");
        exec("pip install jaconv");
        exec("pip install pathlib");//ここまでモジュール。一回実行したことあるなら消す
        */
        exec("python3 strchange.py",$output,$s);
        return $output[0];

    }

    public function text(String $text){
        $t = fopen("dictext/text.txt","w");
        fwrite($t,$text.".");
        fclose($t);
    }

    public function test(){
        exec("ls",$output,$s);
        print $output[0];
        //return $output[0];
    }

}