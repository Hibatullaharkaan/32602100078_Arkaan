<?php

namespace App\Controllers;
use PhpParser\Node\Stmt\Return_;

class HalloWorld extends BaseController
{
    public function halodunia (){
    return "<h1> Hello World </h1>";
    }
}
?>